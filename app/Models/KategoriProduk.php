<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriProduk extends Model
{
    use HasFactory;

    protected $table = 'kategori_produk';
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id', 'id');
    }
}
