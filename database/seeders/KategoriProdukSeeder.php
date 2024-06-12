<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama' => 'Buah',
                'deskripsi' => 'Aneka buah-buahan'
            ],
            [
                'nama' => 'Sayur',
                'deskripsi' => 'Aneka sayuran'
            ]
        ];

        DB::table('kategori_produk')->insert($kategori);
    }
}
