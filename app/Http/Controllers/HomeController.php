<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $slideshows = Slideshow::all();
        $search = $request->get('search');
        $produks = Produk::where('nama', 'like', '%' . $search . '%')
            ->orWhere('harga', 'like', '%' . $search . '%')
            ->orWhere('stok', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%')
            ->get();
        return view('index', compact('produks', 'slideshows'));
    }
}
