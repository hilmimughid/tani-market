<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBeliRequest;
use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class BeliController extends Controller
{
    public function create($id)
    {
        $produk = Produk::find($id);
        return view('beli.create', compact('produk'));
    }

    public function store(StoreBeliRequest $request)
    {
        try {
            $request->validated();

            $produk = Produk::find($request->produk_id);
            $jumlah = $request->jumlah;
            $total = $jumlah * $produk->harga;
            $produk->stok -= $request->jumlah;
            $produk->save();

            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::id();
            $pesanan->produk_id = $request->produk_id;
            $pesanan->jumlah = $jumlah;
            $pesanan->total = $total;
            $pesanan->alamat = $request->alamat;
            $pesanan->catatan = $request->catatan;
            $pesanan->save();

            return redirect()->route('beli.histori');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal Membuat Pesanan: ' . $e->getMessage());
        }
    }

    public function histori()
    {
        $pesanans = auth()->user()->pesanan()->paginate(5);
        return view('beli.histori', compact('pesanans'));
    }

    public function show($id)
    {
        $pesanan = Pesanan::find($id);
        return view('beli.show', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {
        try {
            $pesanan = Pesanan::find($id);
            $produk = $pesanan->produk;

            $produk->stok += $pesanan->jumlah;
            $produk->save();

            $pesanan->status = $request->status;
            $pesanan->save();
            return redirect()->route('beli.histori');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal Membatalkan Pesanan: ' . $e->getMessage());
        }
    }
}
