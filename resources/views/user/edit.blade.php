@extends('layouts.dashboard.app')
@section('title', 'Edit User')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-5">Edit User</h3>
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control"
                            value="{{ $user->nama }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ $user->email }}" />
                    </div>
                    <div class="col mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Masukkan Password Baru" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" required>
                            <option value="Customer" {{ $user->role === 'Customer' ? 'selected' : '' }}>
                                Customer</option>
                            <option value="Admin" {{ $user->role === 'Admin' ? 'selected' : '' }}>
                                Admin</option>
                        </select>
                    </div>
                    <div class="col mb-4">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control"
                            value="{{ $user->no_hp }}" />
                    </div>
                </div>
                <div class="text-end">
                    <a class="btn btn-dark me-2" href="{{ route('user.index') }}"> Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
