<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/add-menu', [AdminController::class, 'Add']);
    Route::post('/add-menu', [MenuController::class, 'createmenu'])->name('admin.add-menu');
    Route::get('add-submenu',[AdminController::class, 'Submenu']);
    Route::post('/add-submenu', [MenuController::class, 'storeSubmenu'])->name('admin.add-submenu');
});





