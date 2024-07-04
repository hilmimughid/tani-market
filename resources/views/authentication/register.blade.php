@extends('layouts.authentication.app')
@section('title', 'Register')
@section('content')
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('images/logo.png') }}" width="180" alt="">
                                </a>
                                <h4 class="text-center">Tani Market</h4>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('nama') border border-danger @enderror"
                                        name="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No. HP <span class="text-danger">*</label>
                                    <input type="text"
                                        class="form-control @error('no_hp') border border-danger @enderror" name="no_hp"
                                        value="{{ old('no_hp') }}">
                                    @error('no_hp')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</label>
                                    <input type="email"
                                        class="form-control @error('email') border border-danger @enderror" name="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password <span class="text-danger">*</label>
                                    <input type="password"
                                        class="form-control @error('password') border border-danger @enderror"
                                        name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit"
                                    class="btn btn-success w-100 py-8 fs-4 mb-4 rounded-2">Daftar</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-3 mb-0 fw-bold">Sudah punya akun?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('login.index') }}">Login di
                                        sini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
