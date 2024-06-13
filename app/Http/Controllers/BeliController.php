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
        return view('pesanan.beli', compact('produk'));
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

        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::id(); // Mengambil id user yang sedang login
        $pesanan->produk_id = $request->produk_id; // Mengambil id produk dari form
        $pesanan->jumlah = $request->jumlah;
        $pesanan->alamat = $request->alamat;
        $pesanan->save();

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
