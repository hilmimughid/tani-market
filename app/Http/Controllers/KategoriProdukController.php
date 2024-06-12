<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Http\Requests\KategoriProduk\StoreKategoriProdukRequest;
use App\Http\Requests\KategoriProduk\UpdateKategoriProdukRequest;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $kategori_produks = KategoriProduk::where('nama', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%')
            ->orderBy('nama')
            ->paginate(5);
        return view('kategori-produk.index', compact('kategori_produks'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriProdukRequest $request)
    {
        try {
            KategoriProduk::create($request->validated());
            return redirect()->route('kategori-produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menambahkan kategori produk: ' . $e->getMessage());
        }
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
    public function update(UpdateKategoriProdukRequest $request, KategoriProduk $kategori_produk)
    {
        try {
            $kategori_produk->update($request->validated());
            return redirect()->route('kategori-produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui kategori produk: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $kategori_produk = KategoriProduk::where('id', $id)->first();
            $kategori_produk->delete();
            return redirect()->route('kategori-produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus kategori produk: ' . $e->getMessage());
        }
    }
}
