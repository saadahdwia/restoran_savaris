<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

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

