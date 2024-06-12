<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'Admin') {
                return redirect()->route('dashboard.index');
            }

            return redirect()->route('/');
        }

        return back()->with('error', 'Email atau password salah');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
