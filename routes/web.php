<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/menu', [MenuController::class, 'index'])->name('menu_index');
Route::get('/menu/tambah', [MenuController::class, 'tambah'])->name('menu_tambah');
Route::post('/menu', [MenuController::class, 'store'])->name('menus.store');

