<?php

use App\Http\Controllers\Admin\CctvController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InternetController;
use App\Http\Controllers\Admin\ResponseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\BidangController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\OpdController;
use App\Http\Controllers\User\PemohonController;
use App\Http\Controllers\User\PermintaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('cctv', [CctvController::class, 'userindex'])->name('cctv');
Route::get('contact', [UserController::class, 'contact'])->name('contact');
Route::get('getrequest', [PermintaanController::class, 'getrequest'])->name('getrequest');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'storeLogin']);
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'storeRegis']);
});

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('permintaan', [ResponseController::class, 'listpermintaan'])->name('listpermintaan');
            Route::resource('tanggapan', ResponseController::class);
            Route::resource('cctv', CctvController::class);
            Route::resource('internet', InternetController::class);
            Route::resource('contact', UserController::class);
            Route::resource('user', UserController::class);
            Route::resource('opd', OpdController::class);
        });
    });
    Route::group(['middleware' => ['role:opd']], function () {
        Route::resource('permintaan', PermintaanController::class);
        Route::resource('pemohon', PemohonController::class);
    });
    Route::resource('bidang', BidangController::class);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

// user
