<?php

namespace App\Http\Controllers;

use App\Models\BarangModels;
use App\Models\TransaksiModels;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $transaksi = TransaksiModels::query();

        if ($request->has('search')) {
            $keyword = $request->search;
            $transaksi->where(function ($query) use ($keyword) {
                $query->where('nama_barang', 'like', '%' . $keyword . '%')
                    ->orWhere('tanggal_transaksi', 'like', '%' . $keyword . '%');
            });
        }


        if ($request->has('sort') && $request->sort == 'nama_barang') {
            $transaksi->orderBy('nama_barang');
        }


        if ($request->has('sort') && $request->sort == 'tanggal_transaksi') {
            $transaksi->orderBy('tanggal_transaksi');
        }

        $transaksi = $transaksi->get();
        $barang = BarangModels::all();

        return view('Transaksi.index', compact('transaksi', 'barang'));
    }
   

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'jumlah_terjual' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
            'jenis_barang' => 'required|max:255'
        ]);

        $barang = BarangModels::where('nama_barang', $request->nama_barang)->first();
        $stok = $barang->stok - $request->jumlah_terjual;
        $barang->stok = $stok >= 0 ? $stok : 0;
        $barang->save();

        $validatedData['stok'] = $stok;

        TransaksiModels::create($validatedData);

        return redirect('/Transaksi-Index')->with('success', 'Data transaksi berhasil ditambahkan');
    }

    public function compareJenisBarang(Request $request)
    {
        $query = TransaksiModels::query();

        if ($request->has('jenis_barang') && !empty($request->jenis_barang)) {
            $query->where('jenis_barang', $request->jenis_barang);
        }

        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('tanggal_transaksi', [$request->start_date, $request->end_date]);
        }

        $terbanyak = (clone $query)->orderBy('jumlah_terjual', 'desc')->first();

        $terendah = (clone $query)->orderBy('jumlah_terjual', 'asc')->first();

        return view('Transaksi.compare', compact('terbanyak', 'terendah'));
    }
    public function destroy($id)
    {
        $transaksi = TransaksiModels::findOrFail($id);
        $barang = BarangModels::where('nama_barang', $transaksi->nama_barang)->first();

        if ($barang) {
            $barang->stok += $transaksi->jumlah_terjual;
            $barang->save();
        }

        $transaksi->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus dan stok barang telah diperbarui');
    }

}
