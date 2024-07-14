<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesanans = [
            [
                'user_id' => 2,
                'produk_id' => 1,
                'jumlah' => 1,
                'total' => 10000,
                'alamat' => 'Jl. Raya No. 1',
                'status' => 'Menunggu Konfirmasi',
                'catatan' => 'Tidak ada catatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'produk_id' => 2,
                'jumlah' => 2,
                'total' => 10000,
                'alamat' => 'Jl. Raya No. 2',
                'status' => 'Sedang Dikirim',
                'catatan' => 'Tidak ada catatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'produk_id' => 3,
                'jumlah' => 3,
                'total' => 24000,
                'alamat' => 'Jl. Raya No. 3',
                'status' => 'Selesai',
                'catatan' => 'Tidak ada catatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'produk_id' => 4,
                'jumlah' => 4,
                'total' => 12000,
                'alamat' => 'Jl. Raya No. 4',
                'status' => 'Dibatalkan',
                'catatan' => 'Tidak ada catatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'produk_id' => 5,
                'jumlah' => 5,
                'total' => 20000,
                'alamat' => 'Jl. Raya No. 5',
                'status' => 'Selesai',
                'catatan' => 'Tidak ada catatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'produk_id' => 6,
                'jumlah' => 6,
                'total' => 21000,
                'alamat' => 'Jl. Raya No. 6',
                'status' => 'Selesai',
                'catatan' => 'Tidak ada catatan',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('pesanan')->insert($pesanans);
    }
}
