<?php

use Illuminate\Support\Facades\Route;

Route::get('/klinik', function () {
    return view('klinik');
});


Route::get('/klinik', function () {
    return 'Sistem Informasi Klinik';
});
