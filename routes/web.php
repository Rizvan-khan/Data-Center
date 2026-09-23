<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Website\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cloud-migration', [WebController::class, 'cloudMigration']);


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/add-menu', [AdminController::class, 'Add']);
    Route::post('/add-menu', [MenuController::class, 'createmenu'])->name('admin.add-menu');
    Route::get('add-submenu', [AdminController::class, 'Submenu']);
    Route::post('/add-submenu', [MenuController::class, 'storeSubmenu'])->name('admin.add-submenu');
Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('/plans/store', [PlanController::class, 'store'])->name('plans.store');
    Route::get('/home-setting', [AdminController::class, 'setting'])->name('admin.home-setting.index');
    Route::post('/home-setting/update', [AdminController::class, 'update'])->name('admin.home-setting.update');
Route::get('/plan-headings/create', [PlanController::class, 'planHeading'])->name('plan-headings.create');
Route::post('/plan-headings/store', [PlanController::class, 'storeheading'])->name('plan-headings.store');

    });

   Route::get('/{slug}', [WebController::class, 'showPlan']);
