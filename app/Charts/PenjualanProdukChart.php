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
        foreach (Produk::all() as $produk) {
            $labels[] = $produk->nama;
        }

        $data = Pesanan::select('produk_id')
            ->selectRaw('SUM(jumlah) as total_pesanan')
            ->where(function ($query) {
                $query->where('status', 'selesai')
                    ->orWhere('status', 'sedang dikirim');
            })
            ->groupBy('produk_id')
            ->get();

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
