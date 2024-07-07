@extends('layouts.dashboard.app')
@section('title', 'Edit Produk')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-5">Edit Produk</h3>
            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-4">
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</label>
                        <input type="text" name="nama"
                            class="form-control @error('nama') border border-danger @enderror"
                            value="{{ $produk->nama }}" />
                        @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-4">
                        <label for="kategori" class="form-label">Kategori <span class="text-danger">*</label>
                        <select class="form-select @error('kategori_id') border border-danger @enderror" name="kategori_id">
                            @foreach ($kategori_produks as $kategori_produk)
                                <option value="{{ $kategori_produk->id }}"
                                    {{ $kategori_produk->id == $produk->kategori_id ? 'selected' : '' }}>
                                    {{ $kategori_produk->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="gambar" class="form-label">Gambar <span class="text-danger">*</label><br>
                        <img src="{{ asset('uploads/' . $produk->gambar) }}" width="100px" height="100px">
                        <input type="file" name="gambar"
                            class="form-control @error('gambar') border border-danger @enderror" aria-describedby="gambar"
                            placeholder="Gambar" />
                        @error('gambar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="stok" class="form-label">Stok <span class="text-danger">*</label>
                        <input type="text" name="stok"
                            class="form-control @error('stok') border border-danger @enderror"
                            value="{{ $produk->stok }}" />
                        @error('stok')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-4">
                        <label for="harga" class="form-label">Harga <span class="text-danger">*</label>
                        <input type="text" name="harga"
                            class="form-control @error('harga') border border-danger @enderror"
                            value="{{ $produk->harga }}" />
                        @error('harga')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') border border-danger @enderror" rows="8" name="deskripsi">{{ $produk->deskripsi }}</textarea>
                        @error('deskripsi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
