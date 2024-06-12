@extends('layouts.dashboard.app')
@section('title', 'Tambah Produk')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-5">Tambah Produk</h3>
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama"
                            required />
                    </div>
                    <div class="col mb-4">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="kategori_id">
                            @foreach ($kategori_produks as $kategori_produk)
                                <option value="{{ $kategori_produk->id }}">{{ $kategori_produk->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" aria-describedby="gambar"
                            placeholder="Gambar" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" id="stok" name="stok" class="form-control" placeholder="Stok"
                            required />
                    </div>
                    <div class="col mb-4">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga"
                            required />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi"></textarea>
                    </div>
                </div>
                <div class="text-end">
                    <a class="btn btn-dark me-2" href="{{ route('produk.index') }}"> Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
