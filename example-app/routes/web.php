<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login - Pastikan menggunakan POST method dan nama route login.process
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// Halaman register
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('registerForm');

// Proses registrasi
Route::post('/register', [RegisterController::class, 'register'])->name('register');  // Tambahkan nama route

// Rute logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Grup rute dengan proteksi middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/reservasi', function () {
        return view('pages.reservasi');
    })->name('reservasi');
});
