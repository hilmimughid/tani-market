<?php

namespace App\Models;

use App\Models\KategoriProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $guarded = ['id'];

    public function kategoriProduk()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_id', 'id');
    }
}
