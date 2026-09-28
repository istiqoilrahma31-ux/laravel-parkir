<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TarifController;

// ROUTE E LOGIN
// =========================

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login']);



// ROUTE E ADMIN DASHBOARD
// =========================

Route::get('/admin/dasboard', [DasboardController::class, 'index'])
    ->name('admin.dasboard');


//  ROUTE E DATA USER
// =========================

Route::get('/admin/user', [UserController::class, 'index'])
    ->name('admin.user');

Route::get('/admin/user/create', [UserController::class, 'create'])
    ->name('admin.user.create');

    Route::post('/admin/user', [UserController::class, 'store'])
    ->name('admin.user.store');

Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])
    ->name('admin.user.edit');

Route::put('/admin/user/{id}', [UserController::class, 'update'])
    ->name('admin.user.update');

Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])
    ->name('admin.user.destroy');
//  ROUTE E TARIF PARKIR
// =========================

Route::get('/admin/tarif', [TarifController::class, 'index'])
    ->name('admin.tarif');

Route::get('/admin/tarif/create', [TarifController::class, 'create'])
    ->name('admin.tarif.create');

Route::post('/admin/tarif', [TarifController::class, 'store'])
    ->name('admin.tarif.store');