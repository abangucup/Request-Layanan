<?php

use App\Http\Controllers\Admin\CctvController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InternetController;
use App\Http\Controllers\Admin\ResponseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\OpdController;
use App\Http\Controllers\User\PermintaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('cctv', [CctvController::class, 'userindex'])->name('cctv');
Route::get('contact', [ContactController::class, 'userindex'])->name('contact');
Route::get('permintaan', [PermintaanController::class, 'index'])->name('permintaan');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'storeLogin']);
    Route::get('register', [AuthController::class, 'register'])->name('register');
});

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
            // Route::get('ping', [InternetController::class, 'ping'])->name('ping');
            Route::resource('tanggapan', ResponseController::class);
            Route::resource('opd', OpdController::class);
            Route::resource('cctv', CctvController::class);
            Route::resource('internet', InternetController::class);
            Route::resource('contact', ContactController::class);
            Route::resource('user', UserController::class);
        });
    });
    Route::group(['middleware' => ['role:opd']], function () {
    });
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

// user
