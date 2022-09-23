<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\DetailMobilController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenjualanController;
use App\Models\Produksi;
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

Route::get('/', function () {
    $data = Produksi::groupBy('tahun')->get();
    return view('components.dashboard', ['data'=>$data]);
});

// Cabang
Route::get('/cabang', [CabangController::class, 'index']);

// Barang
Route::get('/barang',[BarangController::class, 'index']);

// JenisBarang
Route::get('/jenisbarang',[JenisBarangController::class, 'index']);

// Penjualan
Route::get('/sales',[PenjualanController::class, 'index']);

// Detail Penjualan
Route::get('/salesdetail',[DetailPenjualanController::class, 'index']);

// Mobil
Route::get('/car',[MobilController::class, 'index']);

// Detail Mobil
Route::get('/cardetail',[DetailMobilController::class, 'index']);

// countPenjualan
Route::get('/countPenjualan/{year}',[BarangController::class, 'countPenjualan']);