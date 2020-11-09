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

// Bilik
// ebooking.icujpm.gov.my/bilik
// ebooking.icujpm.gov.my/bilik/create
// ebooking.icujpm.gov.my/bilik/1/edit
// ebooking.icujpm.gov.my/bilik

// // Memaparkan senarai bilik
// Route::get('bilik', 'BilikController@index');
// // Memaparkan borang untuk daftar bilik baru
// Route::get('bilik/create', 'BilikController@create');
// // Daftar bilik baru
// Route::post('bilik', 'BilikController@store');
// // Memaparkan butiran bilik
// Route::get('bilik/{bilik}', 'BilikController@show');
// // Memaparkan borang untuk kemaskini bilik
// Route::get('bilik/{bilik}/edit', 'BilikController@edit');
// // Mengemaskini butiran bilik
// Route::put('bilik/{bilik}', 'BilikController@update');
// // Buang butiran bilik
// Route::delete('bilik/{bilik}', 'BilikController@destroy');

Route::resource('bilik', 'BilikController');