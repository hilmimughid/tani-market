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
            [
                'nama' => 'Pisang',
                'gambar' => 'pisang.png',
                'kategori_id' => 1,
                'stok' => 10,
                'harga' => 5000,
                'deskripsi' => 'Pisang adalah nama umum yang diberikan pada tumbuhan terna berukuran besar dengan daun memanjang dan besar yang tumbuh langsung dari bagian tangkai. Batang pisang bersifat lunak karena terbentuk dari lapisan pelepah yang lunak dan panjang. Batang yang agak keras berada di bagian permukaan tanah. Pisang memiliki daun bertangkai yang berpencar dengan bagian batang yang meruncing. Ukuran daun pada tiap spesies pisang juga berbeda-beda. Tangkai pisang menghasilkan bunga dalam jumlah yang banyak. Bagian bunga pada pisang akan membentuk buah yang disebut sisir. Buah pisang berkelompok dalam satu bunga majemuk dengan ukuran yang makin ke bawah makin mengecil. Pisang mentah (tidak termasuk kulitnya) mengandung 75% air, 23% karbohidrat, 1% protein, dan mengandung sedikit lemak yang dapat diabaikan. 100 gram pisang mengandung 89 kalori, 31% dari Nilai Asupan Harian AS yang direkomendasikan, vitamin B6, dan vitamin C dalam jumlah sedang, mangan dan serat pangan, tanpa nutrien lain berukuran mikro dalam kandungan yang signifikan'
            ],
            [
                'nama' => 'Semangka',
                'gambar' => 'semangka.jpg',
                'kategori_id' => 1,
                'stok' => 10,
                'harga' => 12000,
                'deskripsi' => 'Semangka, tembikai, atau mendikai (Citrullus lanatus, suku ketimun-ketimunan atau Cucurbitaceae) adalah tanaman merambat yang berasal dari daerah setengah gurun di Afrika bagian selatan. Tanaman ini masih sekerabat dengan labu-labuan (Cucurbitaceae), melon (Cucumis melo), dan ketimun (Cucumis sativus). Semangka biasa dipanen buahnya untuk dimakan segar atau dibuat jus. Biji semangka yang dikeringkan dan disangrai juga dapat dimakan isinya (kotiledon) sebagai kuaci.'
            ],
            [
                'nama' => 'Bayam',
                'gambar' => 'bayam.jpg',
                'kategori_id' => 2,
                'stok' => 10,
                'harga' => 3000,
                'deskripsi' => 'Bayam (Amaranthus) adalah tumbuhan yang biasa ditanam untuk dikonsumsi daunnya sebagai sayuran hijau. Tumbuhan ini berasal dari Amerika tropik namun sekarang tersebar ke seluruh dunia. Tumbuhan ini dikenal sebagai sayuran sumber zat besi yang penting bagi tubuh. Manfaat Bayam untuk Kesehatan: Baik Untuk Penglihatan, Memperkuat Otot, Menjaga Tekanan Darah, Membantu Mencegah Kanker'
            ],
            [
                'nama' => 'Brokoli',
                'gambar' => 'brokoli.jpg',
                'kategori_id' => 2,
                'stok' => 10,
                'harga' => 4000,
                'deskripsi' => 'Brokoli (Brassica oleracea L. Kelompok Italica) adalah tanaman yang sering dibudidayakan sebagai sayur. Brokoli adalah kultivar dari spesies yang sama dengan kubis dan kembang kol, yaitu Brassica oleracea.[3] Brokoli berasal dari daerah Laut Tengah dan sudah sejak masa Yunani Kuno dibudidayakan. Sayuran ini masuk ke Indonesia belum lama (sekitar 1970-an) dan kini cukup populer sebagai bahan pangan. '
            ],
            [
                'nama' => 'Wortel',
                'gambar' => 'wortel.jpg',
                'kategori_id' => 2,
                'stok' => 10,
                'harga' => 3500,
                'deskripsi' => 'Wortel (serapan dari bahasa Belanda: wortel) (Daucus carota subsp. sativus) adalah tumbuhan biennial (siklus hidup 12 - 24 bulan) yang menyimpan karbohidrat dalam jumlah besar untuk tumbuhan tersebut berbunga pada tahun kedua. Batang bunga tumbuh setinggi sekitar 1 m, dengan bunga berwarna putih, dan rasa yang manis langu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya. Wortel mengandung vitamin A yang baik untuk kesehatan mata. Mengkonsumsi wortel baik untuk penglihatan pada mata, terutama bisa meningkatkan pandangan jarak jauh. Selain vitamin A, wortel juga mengandung vitamin B1, B2, B3, B6, B9, dan C, kalsium, zat besi, magnesium, fosfor, kalium, dan sodium.'
            ],
        ];

        DB::table('produk')->insert($produks);
    }
}
