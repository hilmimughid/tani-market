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
            return response()->json(['status' => 'success', 'message' => 'Kategori produk berhasil ditambahkan!']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Gagal menambahkan kategori produk!']);
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
            return response()->json(['status' => 'success', 'message' => 'Kategori produk berhasil diperbarui!']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Gagal memperbarui kategori produk!']);
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
            return response()->json(['status' => 'success', 'message' => 'Kategori produk berhasil dihapus!']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Kategori produk tidak bisa dihapus karena sedang digunakan!']);
        }
    }
}
