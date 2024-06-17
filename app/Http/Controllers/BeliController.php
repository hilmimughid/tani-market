<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $produk = Produk::find($id);
        return view('beli.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jumlah' => 'required',
            'alamat' => 'required',
        ]);
        $produk = Produk::find($request->produk_id);
        $jumlah = $request->jumlah;
        $total = $jumlah * $produk->harga;

        if ($request->jumlah > $produk->stok) {
            return back()->withErrors(['message' => 'Jumlah melebihi stok yang tersedia']);
        }

        // Simpan pesanan
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::id();
        $pesanan->produk_id = $request->produk_id;
        $pesanan->jumlah = $jumlah;
        $pesanan->total = $total; // Simpan total ke dalam database
        $pesanan->alamat = $request->alamat;
        $pesanan->catatan = $request->catatan;
        $pesanan->save();

        $produk->stok -= $request->jumlah;
        $produk->save();

        return redirect()->route('/')->with('success', 'Pesanan berhasil dibuat');

        return redirect()->route('/')->with('success', 'Pesanan berhasil dibuat');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
