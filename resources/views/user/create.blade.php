@extends('layouts.dashboard.app')
@section('title', 'Tambah User')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-5">Tambah User</h3>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama"
                            value="{{ old('nama') }}" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                            value="{{ old('email') }}" required />
                    </div>
                    <div class="col mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                            value="{{ old('password') }}" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" required>
                            <option selected>Pilih Role</option>
                            <option value="Customer">Customer</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="col mb-4">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No. HP"
                            value="{{ old('no_hp') }}" required />
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
