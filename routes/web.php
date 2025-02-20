<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\BookingServiceController;
use App\Http\Controllers\ServiceController;

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

    // backend lainnya
    });

    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('profiles', ProfileController::class);
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/send-contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');
});

// galerry
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

// kunjungan
Route::get('/kunjungan/create', [KunjunganController::class, 'create']);
Route::post('/kunjungan/store', [KunjunganController::class, 'store']);
Route::get('/admin/kunjungan', [KunjunganController::class, 'index']);

// admin booking
Route::resource('booking_service', BookingServiceController::class);
Route::get('/booking_service/create', [BookingServiceController::class, 'create'])->name('booking_service.create');
Route::post('/booking_service/store', [BookingServiceController::class, 'store'])->name('booking_service.store');

Route::get('/test-adminlte', function () {
    return view('test-adminlte');
});

// service
Route::get('/service', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
// data admin booking
