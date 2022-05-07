<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegistrationRequest;
use App\Models\Registration;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Spikkl\Api\Exceptions\AccessDeniedException;
use Spikkl\Api\Exceptions\AccessRestrictedException;
use Spikkl\Api\Exceptions\InvalidApiKeyException;
use Spikkl\Api\Exceptions\QuotaReachedException;
use Spikkl\Api\Exceptions\ZeroResultsException;
use Spikkl\Laravel\Facades\Spikkl;

class RegistrationController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function create(): Factory|View|Application
    {
        return view('registration.create');
    }

    /**
     * @param CreateRegistrationRequest $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(CreateRegistrationRequest $request): RedirectResponse
    {
        $data = (object) $request->validated();

        try {
            $address = Spikkl::api()->lookup('nld', $data->postal_code, $data->house_number, $data->house_number_extension);
        }
        catch (ZeroResultsException|\Spikkl\Api\Exceptions\ValidationException $exception) {
            throw ValidationException::withMessages(['address_error' => 'Can not get a address with the postal code and house number combination.']);
        }
        catch (AccessRestrictedException|AccessDeniedException|QuotaReachedException|InvalidApiKeyException $exception) {
            throw ValidationException::withMessages(['address_error' => 'Error connecting to the address API']);
        }

        $registration = new Registration();
        $registration->first_name = $data->first_name;
        $registration->last_name = $data->last_name;
        $registration->initials = strtoupper($data->initials);
        $registration->postal_code = $data->postal_code;
        $registration->house_number = $data->house_number;
        $registration->house_number_extension = $data->house_number_extension;
        $registration->street_name = $address[0]->street_name;
        $registration->city = $address[0]->administrative_areas[0]->name;
        $registration->province = $address[0]->municipality;
        $registration->email_address = $data->email_address;
        $registration->phone_number = $data->phone_number;
        $registration->password = Hash::make($data->password);
        $registration->save();

        return redirect()->route('registration.view');
    }

    /**
     * @param Registration $registration
     * @return Factory|View|Application
     */
    public function view(): Factory|View|Application
    {
        $data = Registration::all();

        return view('registration.view', ['registrations' => $data]);
    }
}
