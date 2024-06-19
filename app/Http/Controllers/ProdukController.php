<?php

namespace App\Http\Controllers;

use App\Http\Requests\Produk\StoreProdukRequest;
use App\Http\Requests\Produk\UpdateProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $kategori_produks = KategoriProduk::all();
        $produks = Produk::with('kategoriProduk')
            ->join('kategori_produk', 'produk.kategori_id', '=', 'kategori_produk.id')
            ->where('produk.nama', 'like', '%' . $search . '%')
            ->orWhere('kategori_produk.nama', 'like', '%' . $search . '%')
            ->orWhere('produk.stok', 'like', '%' . $search . '%')
            ->orWhere('produk.harga', 'like', '%' . $search . '%')
            ->orWhere('produk.deskripsi', 'like', '%' . $search . '%')
            ->select('produk.*')
            ->orderBy('produk.nama')
            ->paginate(5);
        return view('produk.index', compact('produks', 'kategori_produks'));
    }

    public function create()
    {
        $kategori_produks = KategoriProduk::all();
        return view('produk.create', compact('kategori_produks'));
    }

    public function store(StoreProdukRequest $request)
    {
        try {
            $gambar = $request->file('gambar');
            $nama_gambar = 'gambar' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $nama_gambar);
            Produk::create([
                'nama' => $request->nama,
                'gambar' => $nama_gambar,
                'kategori_id' => $request->kategori_id,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menyimpan produk: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori_produks = KategoriProduk::all();
        return view('produk.edit', compact('produk', 'kategori_produks'));
    }

    public function update(UpdateProdukRequest $request, $id)
    {
        try {
            $produk = Produk::find($id);
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = 'gambar' . time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('uploads'), $nama_gambar);
                if (file_exists(public_path('uploads/' . $produk->gambar))) {
                    unlink(public_path('uploads/' . $produk->gambar));
                }
                $produk->gambar = $nama_gambar;
            }
            $produk->nama = $request->nama;
            $produk->kategori_id = $request->kategori_id;
            $produk->stok = $request->stok;
            $produk->harga = $request->harga;
            $produk->deskripsi = $request->deskripsi;
            $produk->save();
            return redirect()->route('produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui produk: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $produk = Produk::find($id);
            if (file_exists(public_path('uploads/' . $produk->gambar))) {
                unlink(public_path('uploads/' . $produk->gambar));
            }
            $produk->delete();
            return redirect()->route('produk.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus produk: ' . $e->getMessage());
        }
    }
}
