<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SlideshowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slideshows = [
            [
                'gambar' => 'buah.png'
            ],
            [
                'gambar' => 'sayur.jpeg'
            ]
        ];

        DB::table('slideshow')->insert($slideshows);
    }
}
