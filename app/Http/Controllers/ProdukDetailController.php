<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukDetailController extends Controller
{
    public function index($id)
    {
        $produk = Produk::find($id);
        return view('produk.detail', compact('produk'));
    }
}
