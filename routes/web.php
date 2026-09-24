<?php

use Illuminate\Support\Facades\Route;

// 1. Halaman Mahasiswa (URL: /)
Route::get('/', function () {
    return view('mahasiswa');
});

// 2. Halaman Login (URL: /login)
Route::get('/login', function () {
    return view('login');
});

// 3. Halaman Home Company Profile (URL: /home)
Route::get('/home', function () {
    return view('home');
});