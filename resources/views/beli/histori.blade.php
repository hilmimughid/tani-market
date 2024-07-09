@extends('layouts.landing.app')
@section('title', 'Tani Market')
@section('content')
    <div class="container-fluid py-3">
        <div class="container py-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title fw-semibold mb-4">Histori Pesanan</h3>
                    <div class="pt-4 table-responsive text-nowrap">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-1">Produk</th>
                                    <th class="col-1">Jumlah</th>
                                    <th class="col-1">Total</th>
                                    <th>Alamat</th>
                                    <th class="col-1">Tanggal</th>
                                    <th class="col-1">Jam</th>
                                    <th class="col-1">Status</th>
                                    <th class="col-1">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($pesanans as $pesanan)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pesanan->produk->nama }}</td>
                                        <td>{{ $pesanan->jumlah }} kg</td>
                                        <td>Rp{{ $pesanan->total }}</td>
                                        <td>{{ $pesanan->alamat }}</td>
                                        <td>{{ $pesanan->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $pesanan->created_at->format('H:i') }}</td>
                                        <td>
                                            <span
                                                class="badge
                                        @if ($pesanan->status == 'Menunggu Konfirmasi') bg-info text-dark
                                        @elseif ($pesanan->status == 'Sedang Dikirim')
                                            bg-warning
                                        @elseif ($pesanan->status == 'Selesai')
                                            bg-success
                                        @elseif ($pesanan->status == 'Dibatalkan')
                                            bg-danger @endif">
                                                {{ $pesanan->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('beli.show', $pesanan->id) }}" class="btn btn-info text-dark">
                                                <i class="fas fa-eye"></i>
                                            </a>
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
        </div>
    </div>
@endsection
