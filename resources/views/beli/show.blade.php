@extends('layouts.landing.app')
@section('title', 'Tani Market')
@section('content')
    <div class="container-fluid py-3">
        <div class="container py-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title fw-semibold mb-3">Detail Pesanan</h3>
                    <form action="{{ route('beli.update', $pesanan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Nama:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->user->nama }}</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>No. HP:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->user->no_hp }}</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Email:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->user->email }}</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Produk:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->produk->nama }}</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Jumlah:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->jumlah }} kg</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Total:</h6>
                            </div>
                            <div class="col-3">
                                <p>Rp{{ $pesanan->total }}</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Alamat:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->alamat }}</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Catatan:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->catatan }}</p>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-1">
                                <h6>Status:</h6>
                            </div>
                            <div class="col-3">
                                <p>{{ $pesanan->status }}</p>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a class="btn btn-dark me-2" href="{{ route('beli.histori') }}"> Kembali</a>
                            @if ($pesanan->status == 'Menunggu Konfirmasi')
                                <input type="hidden" name="status" value="Dibatalkan">
                                <button type="submit" class="btn btn-danger">Batalkan Pesanan</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
