<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Ocupacion', function () {
    return view('Ocupacion');
})->name('Ocupacion');

Route::get('/Acercademi', function () {
    return view('Acercademi');
})->name('Acercademi');

Route::get('/Experiencia', function () {
    return view('Experiencia');
})->name('Experiencia');

Route::get('/Favoritos', function () {
    return view('Favoritos');
})->name('Favoritos');

Route::get('/Pasatiempos', function () {
    return view('Pasatiempos');
})->name('Pasatiempos');

Route::get('/Inicio', function () {
    return view('Inicio');
})->name('Inicio');
