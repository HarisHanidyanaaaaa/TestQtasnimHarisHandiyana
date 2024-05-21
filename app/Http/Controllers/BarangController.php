<?php

namespace App\Http\Controllers;

use App\Models\BarangModels;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = BarangModels::all();
        return view('Barang.index')->with('barang', $barang);
    }
    public function store(Request $request)
    {

        $barang = new BarangModels();
        $barang->nama_barang = $request->nama_barang;
        $barang->stok = $request->stok;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->save();
        return redirect('/Barang-Index');
    }
    public function update(Request $request, $id)
    {
        $barang = BarangModels::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->stok = $request->stok;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->save();
        return redirect('/Barang-Index');
    }
    public function destroy($id)
    {

        $b = BarangModels::findOrFail($id);
        $b->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
