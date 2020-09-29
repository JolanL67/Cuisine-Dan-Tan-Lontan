<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [
            'email.required' => 'Le champ :attribute est requis.',
            'email.email' => 'Le champ :attribute doit être une adresse e-mail valide.',
            'password.required' => 'Le champ :attribute est requis.',
            'password.confirmed' => 'Le champ de confirmation de :attribute n\'est pas identique au champ de :attribute.',
            'password.min' => 'Le champ :attribute doit être de :min caractères minimum.',
        ];
    }
}
