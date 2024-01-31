<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth('admin')->attempt($credentials)) {
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
