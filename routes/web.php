<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Pendaftaran pengguna
Route::get('daftar', 'DaftarController@paparBorangDaftar')->name('daftar.papar');
Route::post('daftar', 'DaftarController@daftar')->name('daftar');
// Log masuk pengguna
Route::get('log-masuk', 'LogMasukController@paparBorangLogMasuk')->name('log-masuk.papar');
Route::post('log-masuk', 'LogMasukController@logMasuk')->name('log-masuk');
// Log Keluar
Route::post('log-keluar', 'LogKeluarController@logKeluar')->name('log-keluar');
// Laman Utama
Route::get('laman-utama', 'LamanUtamaController@lamanUtama')->name('laman-utama');