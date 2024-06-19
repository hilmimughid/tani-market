<?php

namespace App\Http\Controllers;

use App\Http\Requests\Slideshow\StoreSlideshowRequest;
use App\Http\Requests\Slideshow\UpdateSlideshowRequest;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $slideshows = Slideshow::paginate(5);
        return view('slideshow.index', compact('slideshows'));
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
    public function store(StoreSlideshowRequest $request)
    {
        try {
            $gambar = $request->file('gambar');
            $nama_gambar = 'gambar' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $nama_gambar);
            Slideshow::create([
                'gambar' => $nama_gambar,
            ]);
            return redirect()->route('slideshow.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menyimpan produk: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slideshow $slideshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slideshow $slideshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSlideshowRequest $request, $id)
    {
        try {
            $slideshow = Slideshow::find($id);
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = 'gambar' . time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('uploads'), $nama_gambar);
                if (file_exists(public_path('uploads/' . $slideshow->gambar))) {
                    unlink(public_path('uploads/' . $slideshow->gambar));
                }
                $slideshow->gambar = $nama_gambar;
            }
            $slideshow->save();
            return redirect()->route('slideshow.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui slideshow: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $slideshow = Slideshow::find($id);

            if (file_exists(public_path('uploads/' . $slideshow->gambar))) {
                unlink(public_path('uploads/' . $slideshow->gambar));
            }

            $slideshow->delete();
            return redirect()->route('slideshow.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus slideshow: ' . $e->getMessage());
        }
    }
}
