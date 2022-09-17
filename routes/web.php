<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\PenjualanController;
use App\Models\Barang;
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
    return view('components.dashboard');
});

// Cabang
Route::get('/cabang', [CabangController::class, 'index']);

// Barang
Route::get('/barang',[BarangController::class, 'index']);

//Penjualan
Route::get('/sales',[PenjualanController::class, 'index']);