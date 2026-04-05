<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    public function forgotPassword(): View
    {
        return view('auth.forgot-password', [
            'pageKey' => 'forgot-password',
            'title' => 'Forgot Password | CODETA Admin',
        ]);
    }

    public function login(): View
    {
        return view('auth.login', [
            'pageKey' => 'login',
            'title' => 'Login | CODETA Admin',
        ]);
    }

    public function register(): View
    {
        return view('auth.register', [
            'pageKey' => 'register',
            'title' => 'Register | CODETA Admin',
        ]);
    }
}
