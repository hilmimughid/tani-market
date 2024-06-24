<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('authentication.login');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'Admin') {
                return redirect()->route('dashboard.index');
            }
            return redirect()->route('/');
        }
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
            'password' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
