<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Http\Requests\KategoriProduk\StoreKategoriProdukRequest;
use App\Http\Requests\KategoriProduk\UpdateKategoriProdukRequest;

class KategoriProdukController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $kategori_produks = KategoriProduk::where('nama', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%')
            ->orderBy('nama')
            ->paginate(5);
        return view('kategori-produk.index', compact('kategori_produks'));
    }

    public function store(StoreKategoriProdukRequest $request)
    {
        try {
            KategoriProduk::create($request->validated());
            return redirect()->route('kategori-produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menambahkan kategori produk: ' . $e->getMessage());
        }
    }

    public function update(UpdateKategoriProdukRequest $request, KategoriProduk $kategori_produk)
    {
        try {
            $kategori_produk->update($request->validated());
            return redirect()->route('kategori-produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui kategori produk: ' . $e->getMessage());
        }
    }

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
