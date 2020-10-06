<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('daftar', 'DaftarController@paparBorangDaftar')->name('daftar.papar');
Route::get('log-masuk', 'LogMasukController@paparBorangLogMasuk')->name('log-masuk.papar');