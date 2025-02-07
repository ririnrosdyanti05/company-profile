<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('frontEnd.index');
Route::resource('profiles', ProfileController::class);
Route::post('/send-contact', [ContactController::class, 'sendContact'])->name('send.contact');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//     // Rute admin lainnya
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('profiles', ProfileController::class);
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/send-contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
