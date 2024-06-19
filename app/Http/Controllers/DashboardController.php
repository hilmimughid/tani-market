<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPesanan = Pesanan::count();
        $jumlahPesananBaru = Pesanan::where('status', 'Menunggu Konfirmasi')->count();
        $jumlahPesananDiproses = Pesanan::where('status', 'Sedang Dikirim')->count();
        $jumlahKategoriProduk = KategoriProduk::count();
        $jumlahProduk = Produk::count();
        $jumlahUserCustomer = User::where('role', 'Customer')->count();
        return view('dashboard.index', compact('jumlahPesanan', 'jumlahPesananBaru', 'jumlahPesananDiproses', 'jumlahKategoriProduk', 'jumlahProduk', 'jumlahUserCustomer'));
    }
}
