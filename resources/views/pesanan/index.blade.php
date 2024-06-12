@extends('layouts.dashboard.app')
@section('title', 'Pesanan')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-4">Pesanan</h3>
            <div class="d-flex justify-content-between mb-0">
                <form action="{{ route('pesanan.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari">
                    <button type="submit" class="btn btn-outline-primary"><i class="ti ti-search"></i></button>
                </form>
            </div>
            <div class="pt-4 table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Pelanggan</th>
                            <th>Produk</th>
                            <th class="col-1">Jumlah</th>
                            <th>Alamat</th>
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($pesanans as $pesanan)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pesanan->user_id }}</td>
                                <td>{{ $pesanan->produk_id }}</td>
                                <td>{{ $pesanan->jumlah }}</td>
                                <td>{{ $pesanan->alamat }}</td>
                                <td>
                                    <div class="d-flex ">
                                        {{-- Button  Edit --}}
                                        <button class="btn btn-warning me-3" data-bs-toggle="modal"
                                            data-bs-target="#update_pesanan_modal{{ $pesanan->id }}">
                                            <i class="ti ti-edit"></i>
                                        </button>

                                        {{-- Button Delete --}}
                                        <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST"
                                            class="form_delete">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger button_delete">
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
                    {{ $pesanans->links() }}
                </div>
            </div>
        </div>
    </div>

    {{-- @include('pesanan.modal') --}}
@endsection
