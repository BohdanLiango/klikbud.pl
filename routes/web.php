<?php

use App\Http\Livewire\Dashboard\Show;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsletterController;

//Route::get('/', [MainController::class, 'show'])->name('main');
//
//Route::post('/newsletter', [NewsletterController::class, 'save'])->name('save.newsletter');
//
//Route::get('/gallery', [GalleryController::class, 'show'])->name('gallery');
//Route::get('/gallery/{slug}', [GalleryController::class, 'showByCategorySlug'])->name('gallery.slug');
//
//Route::get('/contact', [ContactController::class, 'show'])->name('contact');
//Route::post('/contact/send-message', [ContactController::class, 'save'])->name('contact.save');


Route::get('/', Show::class)->name('main');
