@extends('layouts.landing.app')
@section('title', 'Tani Market')
@section('content')
    <div class="container-fluid py-3">
        <div class="container py-3">
            <h1 class="mb-4">Form Pembelian</h1>
            <form action="{{ route('beli.store') }}" method="POST">
                @csrf
                <div class="col">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="rounded">
                                <a href="#">
                                    <img src="{{ asset('uploads/' . $produk->gambar) }}" class="rounded" height="300px"
                                        width="300px" alt="Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="fw-bold mb-3">{{ $produk->nama }}</h1>
                            <h5 class="fw-bold mb-3">Rp.{{ $produk->harga }} per kg</h5>
                            <p class="mb-3">Stok: {{ $produk->stok }} kg</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <div class="form-item">
                            <label class="form-label my-3">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                        <div class="text-end mt-5">
                            <a class="btn btn-dark me-2" href="{{ route('/') }}"> Batal</a>
                            <button type="submit" class="btn btn-success">Pesan Sekarang</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
