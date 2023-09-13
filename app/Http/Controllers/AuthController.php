<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    use Authenticatable;
    public array $credentials;

    /**
     * @throws ValidationException
     */
    public function login(Request $request)
    {
//        dd($request);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if (!Auth::attempt($credentials, true)) {
            throw ValidationException::withMessages(
                [
                'email' => "Your email address has not been verified. Please try again.",
                'password' => "Wrong password."
            ]);
        } else {
            session()->regenerate();
            session()->flash('success', "Welcome back, dear Master");
            return redirect('/');
        }
    }

}

