@extends('layouts.authentication.app')
@section('title', 'Login')
@section('content')
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{ route('/') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="{{ asset('images/logo.png') }}" width="180" alt="">
                            </a>
                            <h4 class="text-center">Tani Market</h4>
                            <form method="POST" action="{{ route('login.auth') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Masukkan Email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Masukkan Password" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100 py-8 fs-4 mb-4 rounded-2">Masuk</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-3 mb-0 fw-bold">Belum punya akun?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('register.index') }}">Buat akun di
                                        sini</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
