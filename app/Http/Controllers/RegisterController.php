<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\User\StoreUserRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authentication.register');
    }

    /**
     * Store a newly created resource in storage.
     */
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
