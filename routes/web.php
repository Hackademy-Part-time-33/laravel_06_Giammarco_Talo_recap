<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

Route::get('/homepage', [PageController::class, 'homepage'])->name('homepage');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::post('/contact', [ContactController::class, 'send'])->name('send');

