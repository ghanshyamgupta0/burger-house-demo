<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');