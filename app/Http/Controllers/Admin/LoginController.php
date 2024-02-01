<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        if (auth('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->intended('/admin');
        }
        return redirect()->route('admin.login')->withErrors(['error' => 'Invalid credentials']);
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect('/');
    }
}
