<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('authentication.register');
    }

    public function store(RegisterRequest $request)
    {
        try {
            $request->merge(['role' => 'Customer']);

            $validated = $request->validated();
            $validated['password'] = bcrypt($validated['password']);
            User::create($validated);
            return redirect()->route('home');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat mendaftar: ' . $e->getMessage());
        }
    }
}
