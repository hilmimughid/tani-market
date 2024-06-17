@extends('layouts.dashboard.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-sm-4 mb-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Total Pesanan</h3>
                </div>
                <div class="card-body">
                    <h3>01</h3>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-3">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Pesanan Baru</h3>
                </div>
                <div class="card-body">
                    <h3>01</h3>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-3">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Pesanan Diproses</h3>
                </div>
                <div class="card-body">
                    <h3>01</h3>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-3">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Kategori Produk</h3>
                </div>
                <div class="card-body">
                    <h3>01</h3>
                    <a href="{{ route('kategori-produk.index') }}" class="btn btn-primary mt-3">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Produk</h3>
                </div>
                <div class="card-body">
                    <h3>01</h3>
                    <a href="{{ route('produk.index') }}" class="btn btn-primary mt-3">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Customer</h3>
                </div>
                <div class="card-body">
                    <h3>01</h3>
                    <a href="{{ route('user.index') }}" class="btn btn-primary mt-3">Detail</a>
                </div>
            </div>
        </div>
    </div>
@endsection
