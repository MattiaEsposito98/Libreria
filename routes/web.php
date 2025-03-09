<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [HomePageController::class, 'index'])->name('homepage');


Route::get('/autori', function () {
    return view('pages.autori');
})->name('autori');


Route::get('/dettagli', function () {
    return view('pages.dettagli');
})->name('dettagli');
