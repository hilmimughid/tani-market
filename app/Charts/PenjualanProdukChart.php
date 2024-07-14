<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Pesanan;
use App\Models\Produk;

class PenjualanProdukChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $data = Pesanan::select('produk_id')
            ->selectRaw('SUM(jumlah) as total_pesanan')
            ->where('status', 'selesai')
            ->orWhere('status', 'sedang dikirim')
            ->groupBy('produk_id')
            ->get();

        $labels = $data->map(function ($item) {
            $produk = Produk::find($item->produk_id);
            return $produk ? $produk->nama : 'Produk Tidak Ditemukan';
        })->toArray();

        return $this->chart->barChart()
            ->setXAxis($labels)
            ->setDataset([
                [
                    'name' => 'Jumlah Pesanan',
                    'data' => $data->pluck('total_pesanan'),
                ],
            ]);
    }
}
