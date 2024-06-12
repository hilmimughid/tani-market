@extends('layouts.dashboard.app')
@section('title', 'Kategori Produk')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-4">Kategori Produk</h3>
            <div class="d-flex justify-content-between mb-0">
                <form action="{{ route('kategori-produk.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari">
                    <button type="submit" class="btn btn-outline-primary"><i class="ti ti-search"></i></button>
                </form>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create_kategori_produk_modal">Tambah
                    Data</button>
            </div>
            <div class="pt-4 table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($kategori_produks as $kategori_produk)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kategori_produk->nama }}</td>
                                <td>{{ $kategori_produk->deskripsi }}</td>
                                <td>
                                    <div class="d-flex ">
                                        {{-- Button  Edit --}}
                                        <button class="btn btn-warning me-2" data-bs-toggle="modal"
                                            data-bs-target="#update_kategori_produk_modal{{ $kategori_produk->id }}">
                                            <i class="ti ti-edit"></i>
                                        </button>

                                        {{-- Button Delete --}}
                                        <form action="{{ route('kategori-produk.destroy', $kategori_produk->id) }}"
                                            method="POST" class="form_delete">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger button_delete">
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
                    {{ $kategori_produks->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('kategori-produk.modal')
@endsection
