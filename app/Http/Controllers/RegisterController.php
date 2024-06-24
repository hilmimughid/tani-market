<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('authentication.register');
    }

    public function store(Request $request)
    {
        try {
            $request->merge(['role' => 'Customer']);

            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'no_hp' => 'required|string|max:15',
                'role' => 'required|in:Customer,Admin',
            ]);
            $validated['password'] = bcrypt($validated['password']);
            User::create($validated);
            return redirect()->route('home');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat mendaftar: ' . $e->getMessage());
        }
    }
}
