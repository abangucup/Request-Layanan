<?php

use App\Http\Controllers\Admin\CctvController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InternetController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PermintaanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'storeLogin']);
Route::get('register', [AuthController::class, 'register'])->name('register');

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::group(['middleware' => ['role:admin']], function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('cctv', CctvController::class);
            Route::resource('internet', InternetController::class);
            Route::resource('contact', ContactController::class);
            Route::resource('user', UserController::class);
        });
    });
});

// user
Route::get('cctv', [CctvController::class, 'userindex'])->name('cctv');
Route::get('internet', [InternetController::class, 'userindex'])->name('internet');
Route::get('contact', [ContactController::class, 'userindex'])->name('contact');
Route::resource('permintaan', PermintaanController::class);
