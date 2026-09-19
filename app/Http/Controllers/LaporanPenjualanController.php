<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    public function __invoke()
    {
        $laporan = [
            'total_transaksi' => 25,
            'total_penjualan' => 5000000,
            'produk_terjual' => 75,
            'rata_rata_transaksi' => 200000
        ];

        return view('laporan', [
            'laporan' => $laporan
        ]);
    }
}