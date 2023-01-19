<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard.index');
        }

        return redirect()->back()->withInput()->withErrors(['username' => 'Username atau password salah']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
