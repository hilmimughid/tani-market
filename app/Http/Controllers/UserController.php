<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $users = User::where('nama', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('no_hp', 'like', '%' . $search . '%')
            ->orWhere('role', 'like', '%' . $search . '%')
            ->orderBy('nama')
            ->paginate(5);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUserRequest $request)
    {
        try {
            User::create($request->validated());
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menyimpan user: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        try {
            $user = User::find($id);
            $data = $request->validated();
            if (!$data['password']) {
                unset($data['password']);
            } else {
                $data['password'] = Hash::make($data['password']);
            }
            $user->update($data);
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat mengupdate user: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::where('id', $id)->first();
            $user->delete();
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus produk: ' . $e->getMessage());
        }
    }
}
