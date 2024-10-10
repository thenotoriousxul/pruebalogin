<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class LoginController extends Controller
{
    public function login(Request $request, Redirector $redirect){


            $remember = $request->filled('remember');

            if (Auth::attempt($request->only('email', 'password'), $remember)) {
                $request->session()->regenerate();

                return $redirect
                    ->intended('dashboard')
                    ->with('status', 'You are logged in');
            }
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
                'password' => __('auth.password')


            ]);
    }

            public function logout(Request $request, Redirector $redirect)
        {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return $redirect->to('/')->with('status', 'You have been logged out');
        }


}
