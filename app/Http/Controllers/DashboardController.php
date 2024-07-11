<?php

namespace App\Http\Controllers;

use App\Charts\PenjualanProdukChart;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\KategoriProduk;

class DashboardController extends Controller
{
    public function index(PenjualanProdukChart $penjualanProdukChart)
    {
        $jumlahPesanan = Pesanan::count();
        $jumlahPesananBaru = Pesanan::where('status', 'Menunggu Konfirmasi')->count();
        $jumlahPesananDiproses = Pesanan::where('status', 'Sedang Dikirim')->count();
        $jumlahKategoriProduk = KategoriProduk::count();
        $jumlahProduk = Produk::count();
        $jumlahUserCustomer = User::where('role', 'Customer')->count();
        return view('dashboard.index', [
            'penjualanProdukChart' => $penjualanProdukChart->build(),
            'jumlahPesananBaru' => $jumlahPesananBaru,
            'jumlahPesananDiproses' => $jumlahPesananDiproses,
            'jumlahPesanan' => $jumlahPesanan,
        ]);
    }
}
