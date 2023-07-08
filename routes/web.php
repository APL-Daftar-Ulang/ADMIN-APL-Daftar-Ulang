<?php

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
    return view('dashboard.dashboard');
});


Route::get('/siswa', function () {
    return view('dashboard.dataSiswa');
});

Route::get('/daftar-ulang', function () {
    return view('dashboard.daftarUlang');
});

Route::get('/bukti-pembayaran', function () {
    return view('dashboard.buktiPembayaran');
});

Route::get('/request-nota', function () {
    return view('dashboard.requestNota');
});

Route::get('/laporan-respon', function () {
    return view('dashboard.laporanRespon');
});
