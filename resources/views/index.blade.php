@extends('layouts.landing.app')
@section('title', 'Tani Market')
@section('content')
    <div class="container">
        <form action="{{ route('/') }}" method="GET" class="d-flex mt-1 mb-3">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari">
            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="container-fluid hero-header">
        <div class="container p-5">
            <div class="row g-2 align-items-center justify-content-center">
                <div class="col-md-12 col-lg-7">
                    <h3 class="mb-3 text-secondary">100% Organik Tanpa Kimia</h3>
                    <h1 class="mb-5 display-3 text-primary">Toko Buah & Sayur Organik</h1>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('templates/fruitables/img/hero-img-1.png') }}" height="300px"
                                    class="d-block w-100" alt="...">
                            </div>
                            @foreach ($slideshows as $slideshow)
                                <div class="carousel-item">
                                    <img src="{{ asset('uploads/' . $slideshow->gambar) }}" height="300px"
                                        class="d-block w-100">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container pb-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-6">Produk Kami</h1>
            </div>
            <div class="row g-4">
                @foreach ($produks as $produk)
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('uploads/' . $produk->gambar) }}" class="rounded-circle"
                                        height="150px" width="150px">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h3">{{ $produk->nama }}</a>
                                    <h5 class="my-3">Rp.{{ $produk->harga }} per kg</h5>
                                    <a href="{{ route('produk.detail', $produk->id) }}"
                                        class="btn border border-secondary rounded px-3 text-primary">Beli</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->

    <!-- Featurs Section Start -->
    <div class="container-fluid featurs bg-secondary">
        <div class="container p-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-6 text-white">Mengapa Harus Belanja di Kami?</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Gratis Ongkir</h5>
                            <p class="mb-0">Gratis biaya pengiriman area Malang</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-money-bill-wave fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pembayaran COD</h5>
                            <p class="mb-0">Sistem pembayaran COD dijamin aman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-leaf fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Organik</h5>
                            <p class="mb-0">Produk kami dijamin 100% organik</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-seedling fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Fresh</h5>
                            <p class="mb-0">Produk kami selalu fresh hasil panen hari yang sama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->
@endsection
