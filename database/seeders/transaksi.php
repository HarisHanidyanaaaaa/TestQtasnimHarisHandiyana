<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TransaksiModels::create([
            'nama_barang' => 'Kopi',
            'stok' => 100,
            'jumlah_terjual' => 10,
            'tanggal_transaksi' => '2021-05-01',
            'jenis_barang' => 'Konsumsi',
        ]);
        \App\Models\TransaksiModels::create([
            'nama_barang' => 'Teh',
            'stok' => 100,
            'jumlah_terjual' => 19,
            'tanggal_transaksi' => '2021-05-05',
            'jenis_barang' => 'Konsumsi',
        ]);
        \App\Models\TransaksiModels::create([
            'nama_barang' => 'Kopi',
            'stok' => 90,
            'jumlah_terjual' => 15,
            'tanggal_transaksi' => '2021-05-10',
            'jenis_barang' => 'Konsumsi',
        ]);
        \App\Models\TransaksiModels::create([
            'nama_barang' => 'Pasta Gigi',
            'stok' => 100,
            'jumlah_terjual' => 20,
            'tanggal_transaksi' => '2021-05-11',
            'jenis_barang' => 'Pembersih',
        ]);
        \App\Models\TransaksiModels::create([
            'nama_barang' => 'Sabun Mandi',
            'stok' => 100,
            'jumlah_terjual' => 30,
            'tanggal_transaksi' => '2021-05-11',
            'jenis_barang' => 'Pembersih',
        ]);
        \App\Models\TransaksiModels::create([
            'nama_barang' => 'Sampo',
            'stok' => 100,
            'jumlah_terjual' => 25,
            'tanggal_transaksi' => '2021-05-12',
            'jenis_barang' => 'Pembersih',
        ]);
        \App\Models\TransaksiModels::create([
            'nama_barang' => 'Teh',
            'stok' => 81,
            'jumlah_terjual' => 5,
            'tanggal_transaksi' => '2021-05-12',
            'jenis_barang' => 'Konsumsi',
        ]);
    }
}
