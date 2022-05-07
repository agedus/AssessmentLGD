<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/registration/create');
});

Route::prefix('registration')->group(function () {

    Route::get('/', function () {
        return redirect('/registration/create');
    });

    Route::get('create', [RegistrationController::class, 'create'])->name('registration.create');
    Route::post('create', [RegistrationController::class, 'store'])->name('registration.create');
    Route::get('view', [RegistrationController::class, 'view'])->name('registration.view');

});

