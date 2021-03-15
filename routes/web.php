<?php

use App\Http\Controllers\UpdateDataController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'show'])->name('main');
Route::get('/gallery', [GalleryController::class, 'show'])->name('gallery');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/asdasd321413asdasd21312sadsad12321sadsad123123', [UpdateDataController::class, 'updateCache']);
