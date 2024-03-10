<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{angka}/{angka2}', function ($angka, $angka2) {
    return 'Penjumlahan : '. $angka + $angka2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('admin', function () {
    return view('template');
});

Route::get('tampil', [ProdukController::class,'index']);



//route::get('siswa', [SiswaController::class, 'index']);
//route::get('siswa', [SiswaController::class, 'create']);

route::resource('produk', ProdukController::class);


