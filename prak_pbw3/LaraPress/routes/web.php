<?php

use Illuminate\Support\Facades\Route;

// 1. Rute Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// 2. Rute Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
});

// 3. Rute Halaman Kontak (Tugas Mandiri)
Route::get('/kontak', function () {
    return view('contact');
});