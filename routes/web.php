<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profil', [Controllers\ProfilController::class, 'index'])->name('profil');
Route::get('/ekstrakurikuler', [Controllers\EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler');
Route::get('/gallery', [Controllers\GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');