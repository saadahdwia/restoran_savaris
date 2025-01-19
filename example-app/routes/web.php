<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Rute halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rute untuk halaman lainnya
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

Route::get('/reservasi', function () {
    return view('pages.reservasi');
})->name('reservasi');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Rute halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Rute halaman register (GET)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Rute untuk memproses form register (POST)
Route::post('/register', [RegisterController::class, 'register'])->name('register.process');
