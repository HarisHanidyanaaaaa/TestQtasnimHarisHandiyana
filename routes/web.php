<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Models\BarangModels;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BarangController::class, 'index']);
Route::get('/Barang-Index', [BarangController::class, 'index'])->name('Barang-Index');
Route::post('/Barang-Store', [BarangController::class, 'store'])->name('Barang-Store');
Route::put('/Barang-Update/{id}', [BarangController::class, 'update'])->name('Barang-Update');
Route::delete('/Barang-Delete/{id}', [BarangController::class, 'destroy'])->name('Barang-Delete');

Route::get('/Transaksi-Index', [TransaksiController::class, 'index'])->name('Transaksi-Index');
Route::get('/transaksi/terbanyak', [TransaksiController::class, 'terbanyak'])->name('transaksi.terbanyak');
Route::get('/Terendah', [TransaksiController::class, 'terendah'])->name('Terendah');
Route::post('/Transaksi-Store', [TransaksiController::class, 'store'])->name('Transaksi-Store');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('Transaksi-Update');
Route::delete('/Transaksi-Delete/{id}', [TransaksiController::class, 'destroy'])->name('Transaksi-Delete');


Route::get('/transaksi/compare', [TransaksiController::class, 'compareJenisBarang'])->name('transaksi.compare');

