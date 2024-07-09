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
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" name="nama"
                            class="form-control @error('nama') border border-danger @enderror" placeholder="Masukkan Nama"
                            value="{{ old('nama') }}" />
                        @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email"
                            class="form-control @error('email') border border-danger @enderror" placeholder="Masukkan Email"
                            value="{{ old('email') }}" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-4">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password"
                            class="form-control @error('password') border border-danger @enderror"
                            placeholder="Masukkan Password" value="{{ old('password') }}" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                        <select class="form-select @error('role') border border-danger @enderror" name="role">
                            <option selected value="">Pilih Role</option>
                            <option value="Customer" {{ old('role') === 'Customer' ? 'selected' : '' }}>
                                Customer</option>
                            <option value="Admin" {{ old('role') === 'Admin' ? 'selected' : '' }}>
                                Admin</option>
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-4">
                        <label for="no_hp" class="form-label">No. HP <span class="text-danger">*</span></label>
                        <input type="text" name="no_hp"
                            class="form-control @error('no_hp') border border-danger @enderror"
                            placeholder="Masukkan No. HP" value="{{ old('no_hp') }}" />
                        @error('no_hp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
