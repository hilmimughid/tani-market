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
                            <th class="col-1">Nama</th>
                            <th class="col-1">Produk</th>
                            <th class="col-1">Jumlah</th>
                            <th class="col-1">Total</th>
                            <th>Alamat</th>
                            <th class="col-1">Status</th>
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($pesanans as $pesanan)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pesanan->user->nama }}</td>
                                <td>{{ $pesanan->produk->nama }}</td>
                                <td>{{ $pesanan->jumlah }} kg</td>
                                <td>Rp{{ $pesanan->total }}</td>
                                <td>{{ $pesanan->alamat }}</td>
                                <td>
                                    <span
                                        class="badge
                                        @if ($pesanan->status == 'Menunggu Konfirmasi') text-bg-primary
                                        @elseif ($pesanan->status == 'Sedang Dikirim')
                                            text-bg-warning
                                        @elseif ($pesanan->status == 'Selesai')
                                            text-bg-success
                                        @elseif ($pesanan->status == 'Dibatalkan')
                                            text-bg-danger @endif">
                                        {{ $pesanan->status }}
                                    </span>
                                </td>

                                <td>
                                    <a href="{{ route('pesanan.show', $pesanan->id) }}" class="btn btn-primary"><i
                                            class="ti ti-eye"></i></a>
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
