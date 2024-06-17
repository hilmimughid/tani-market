<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produks = [
            [
                'nama' => 'Apel',
                'gambar' => 'apel.jpg',
                'kategori_id' => 1,
                'stok' => 10,
                'harga' => 10000,
                'deskripsi' => 'Apel, tufah, atau rantas merupakan jenis buah-buahan, atau buah yang dihasilkan dari pohon apel. Buah apel biasanya berwarna merah kulitnya jika masak dan siap dimakan, tetapi bisa juga kulitnya berwarna hijau atau kuning. Kulit buahnya agak lembek dan daging buahnya keras. Buah apel memiliki beberapa biji di dalamnya. Berdasarkan penelitian, apel bisa mengurangi risiko kanker usus besar, kanker prostat, dan kanker paru-paru. Dibandingkan dengan buah lainnya dan sayuran, apel mengandung vitamin C yang tidak seberapa, tetapi kaya dengan senyawa antioksidan lainnya. Biarpun tidak sebanyak buah lain, namun konten serabut dalam apel membantu mengontrol pergerakan usus, maka mengurangi risiko kanker usus besar. Serat apel juga membendung penyakit jantung, serta mengontrol berat badan dan tingkat kolesterol, karena buah apel tidak mengandung kolesterol dan mempunyai serat yang mengurangi kolesterol dengan mencegah reabsorpsi.'
            ],
        ];

        DB::table('produk')->insert($produks);
    }
}
