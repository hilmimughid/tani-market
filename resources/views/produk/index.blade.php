@extends('layouts.dashboard.app')
@section('title', 'Produk')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-4">Produk</h3>
            <div class="d-flex justify-content-between mb-0">
                <form action="{{ route('produk.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari">
                    <button type="submit" class="btn btn-outline-primary"><i class="ti ti-search"></i></button>
                </form>
                <a class="btn btn-success" href="{{ route('produk.create') }}"> Tambah Data</a>
            </div>
            <div class="pt-4 table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th class="col-1">Stok</th>
                            <th class="col-2">Harga</th>
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($produks as $produk)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $produk->nama }}</td>
                                <td><img src="{{ asset('uploads/' . $produk->gambar) }}" width="64px" height="64px"></td>
                                <td>{{ $produk->kategoriProduk->nama }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td>Rp.{{ $produk->harga }}</td>
                                <td>
                                    <div class="d-flex ">
                                        {{-- Button  Edit --}}
                                        <a class="btn btn-warning me-2" href="{{ route('produk.edit', $produk->id) }}"><i
                                                class="ti ti-edit"></i></a>

                                        {{-- Button Delete --}}
                                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="mt-4 d-flex justify-content-end">
                    {{ $produks->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
