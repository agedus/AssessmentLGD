<?php

namespace App\Http\Requests;

use App\Rules\InitialRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class CreateRegistrationRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'initials' => ['required', new InitialRule('first_name')],
            'postal_code' => ['required'],
            'house_number' => ['required', 'numeric'],
            'house_number_extension' => ['nullable'],
            'email_address' => ['required', 'email:rfc', 'unique:registrations,email_address'],
            'phone_number' => ['required', 'phone:NL,DE'],
            'password' => ['required', Password::min(9)->letters()->mixedCase()->numbers()->symbols()]
        ];
    }
}
