@extends('layouts.dashboard.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-sm-0">
                            <h5 class="card-title fw-semibold">Grafik Penjualan Produk</h5>
                        </div>
                    </div>
                    <div>
                        {!! $penjualanProdukChart->container() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-body p-4 text-center">
                            <h5 class="card-title mb-9 fw-semibold text-start">Pesanan Baru</h5>
                            <h3 class="pt-3">{{ $jumlahPesananBaru }}</h3>
                            <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-3">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-4 text-center">
                            <h5 class="card-title mb-9 fw-semibold text-start">Pesanan Sedang Dikirim</h5>
                            <h3 class="pt-3">{{ $jumlahPesananDiproses }}</h3>
                            <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-3">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-4 text-center">
                            <h5 class="card-title mb-9 fw-semibold text-start">Total Pesanan</h5>
                            <h3 class="pt-3">{{ $jumlahPesanan }}</h3>
                            <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-3">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ $penjualanProdukChart->cdn() }}"></script>
        {{ $penjualanProdukChart->script() }}
    @endpush
@endsection
