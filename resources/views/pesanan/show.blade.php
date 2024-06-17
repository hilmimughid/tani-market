@extends('layouts.dashboard.app')
@section('title', 'Pesanan')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-3">Detail Pesanan</h3>
            <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
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
                        <select class="form-select" name="status">
                            @foreach (['Menunggu Konfirmasi', 'Sedang Dikirim', 'Selesai', 'Dibatalkan'] as $status)
                                <option value="{{ $status }}" {{ $pesanan->status == $status ? 'selected' : '' }}>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a class="btn btn-dark me-2" href="{{ route('pesanan.index') }}"> Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
