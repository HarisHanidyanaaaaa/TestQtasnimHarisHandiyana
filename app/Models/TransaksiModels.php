<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModels extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_barang',
        'stok',
        'jumlah_terjual',
        'tanggal_transaksi',
        'jenis_barang'
    ];
    public function Barang(){
        return $this->belongsTo(BarangModels::class, 'id_barang', 'id');
}
}
