@extends('layouts.landing.app')
@section('title', 'Tani Market')
@section('content')
    <div class="container-fluid py-3">
        <div class="container py-3">
            <h1 class="mb-3">Form Pembelian</h1>
            <form action="{{ route('beli.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <div class="rounded">
                            <img src="{{ asset('uploads/' . $produk->gambar) }}" class="img-fluid rounded" height="200px"
                                width="200px" alt="Image">
                        </div>
                        <h1 class="fw-bold mb-3">{{ $produk->nama }}</h1>
                        <h5 class="fw-bold mb-3">Rp {{ $produk->harga }}/kg</h5>
                        <p class="mb-3">Stok: {{ $produk->stok }} kg</p>
                    </div>
                    <div class="col-9">
                        <div class="form-item">
                            <label class="form-label my-3">Jumlah <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('jumlah') border border-danger @enderror"
                                name="jumlah" value="{{ old('jumlah') }}">
                            @error('jumlah')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Alamat Tujuan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('alamat') border border-danger @enderror"
                                name="alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Catatan</label>
                            <textarea class="form-control" rows="5" name="catatan" value="{{ old('catatan') }}"></textarea>
                        </div>
                        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                        <div class="form-item">
                            <label class="form-label my-3">Metode Pembayaran</label>
                            <input class="form-control" type="text" value="COD" aria-label="Disabled input example"
                                disabled readonly>
                        </div>
                        <div class="text-end mt-5">
                            <a class="btn btn-dark me-2" href="{{ route('produk.detail', $produk->id) }}"> Batal</a>
                            <button type="submit" class="btn btn-success">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
