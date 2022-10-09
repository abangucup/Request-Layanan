<?php

use App\Http\Controllers\Admin\CctvController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InternetController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PermintaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('cctv', CctvController::class);
Route::resource('internet', InternetController::class);
Route::resource('contact', ContactController::class);

// user
Route::get('cctv', [CctvController::class, 'userindex'])->name('cctv');
Route::get('internet', [InternetController::class, 'userindex'])->name('internet');
Route::get('contact', [ContactController::class, 'userindex'])->name('contact');
Route::resource('permintaan', PermintaanController::class);
