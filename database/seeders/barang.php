<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BarangModels::create([
            'nama_barang' => 'Kopi',
            'stok' => 100,
            'jenis_barang' => 'Konsumsi',
        ]);
        \App\Models\BarangModels::create([
            'nama_barang' => 'Teh',
            'stok' => 100,
            'jenis_barang' => 'Konsumsi',
        ]);
        \App\Models\BarangModels::create([
            'nama_barang' => 'Pasta Gigi',
            'stok' => 20,
            'jenis_barang' => 'pembesih',
        ]);
        \App\Models\BarangModels::create([
            'nama_barang' => 'Sabun Mandi',
            'stok' => 100,
            'jenis_barang' => 'pembesih',
        ]);

        \App\Models\BarangModels::create([
            'nama_barang' => 'Sampo',
            'stok' => 81,
            'jenis_barang' => 'pembesih',
        ]);
    }
}
