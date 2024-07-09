<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(Request $request)
    {
        $query = Pesanan::query();
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->join('users', 'pesanan.user_id', '=', 'users.id')
                ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
                ->where('users.nama', 'like', '%' . $search . '%')
                ->orWhere('produk.nama', 'like', '%' . $search . '%')
                ->orWhere('pesanan.jumlah', 'like', '%' . $search . '%')
                ->orWhere('pesanan.total', 'like', '%' . $search . '%')
                ->orWhere('pesanan.alamat', 'like', '%' . $search . '%')
                ->orWhere('pesanan.status', 'like', '%' . $search . '%')
                ->orWhere('pesanan.catatan', 'like', '%' . $search . '%')
                ->select('pesanan.*')
                ->orderBy('pesanan.created_at', 'desc');
        }
        $pesanans = $query->paginate(5);
        return view('pesanan.index', compact('pesanans'));
    }

    public function show($id)
    {
        $pesanan = Pesanan::find($id);
        return view('pesanan.show', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {
        try {
            $pesanan = Pesanan::find($id);

            if ($request->status == 'Dibatalkan') {
                $produk = $pesanan->produk;
                $produk->stok += $pesanan->jumlah;
                $produk->save();
            }

            $pesanan->status = $request->status;
            $pesanan->save();
            return redirect()->route('pesanan.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui pesanan: ' . $e->getMessage());
        }
    }
}
