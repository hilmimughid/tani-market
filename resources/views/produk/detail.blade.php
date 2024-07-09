@extends('layouts.landing.app')
@section('title', 'Tani Market')
@section('content')
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row g-4 mb-5">
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
                            <h5 class="fw-bold mb-3">Rp {{ $produk->harga }}/kg</h5>
                            <p class="mb-3">Kategori: {{ $produk->kategoriProduk->nama }}</p>
                            <p class="mb-3">Stok: {{ $produk->stok }} kg</p>
                            <a href="{{ route('beli.create', $produk->id) }}"
                                class="btn border border-secondary rounded px-4 py-2 mb-4 text-primary">Beli</a>
                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button"
                                        role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                        aria-controls="nav-about" aria-selected="true">Deskripsi</button>
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active text-justify" id="nav-about" role="tabpanel"
                                    aria-labelledby="nav-about-tab">
                                    <p>{{ $produk->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
