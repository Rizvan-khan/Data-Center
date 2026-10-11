<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NavigationController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MenuCategoryController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Website\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', [WebController::class,'AboutUs'])->name('about-us');
Route::get('/contact', [WebController::class,'ContactUs'])->name('contact');
Route::view('/partners', 'DataCenter.partners');
Route::view('/industries', 'DataCenter.industries');
Route::view('/pricing', 'DataCenter.pricing');
Route::get('/colocation', function () {
    return view('DataCenter.colocation');
});
Route::get('/firewall', function () {
    return view('DataCenter.firewall');
});
Route::get('/it-amc', function () {
    return view('DataCenter.it-amc');
});
Route::get('/cloud-servers', function () {
    return view('DataCenter.cloud-server');
});
Route::get('/private-cloud', function () {
    return view('DataCenter.private-cloud');
});
Route::get('/dedicated-server', function () {
    return view('DataCenter.dedicated-server');
});

Route::get('/cloud-migration', [WebController::class, 'cloudMigration']);
Route::get('/vps-hosting', [WebController::class, 'VPSHoting']);


Route::get('/business-services', function () {
    return view('DataCenter.services.index', ['categories' => config('business_services')]);
})->name('business-services');

foreach (config('business_services') as $category => $services) {
    foreach ($services as $service) {
        Route::get('/'.$service[0], function () use ($category, $service, $services) {
            return view('DataCenter.services.show', compact('category', 'service', 'services'));
        })->name('service.'.$service[0]);
    }
}

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->middleware('throttle:10,1')->name('login.store');
    Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AuthController::class, 'authenticate'])->middleware('throttle:10,1')->name('admin.login.store');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->middleware('throttle:5,1')->name('register.store');
    Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendReset'])->middleware('throttle:3,1')->name('password.email');
    Route::get('/reset-password/{token}', [AuthController::class, 'resetForm'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'reset'])->middleware('throttle:5,1')->name('password.update');
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::middleware(['auth', 'active'])->group(function () {
    Route::get('/account', [AccountController::class, 'show'])->name('account');
    Route::put('/account', [AccountController::class, 'update'])->name('account.update');
    Route::put('/account/password', [AccountController::class, 'password'])->middleware('throttle:5,1')->name('account.password');
});
Route::prefix('admin')->middleware(['auth', 'active', 'admin'])->group(function () {
    Route::get('/', fn () => redirect('/admin/dashboard'));
    Route::get('/categories', [MenuCategoryController::class, 'index'])->name('admin.categories.index');
    Route::post('/categories', [MenuCategoryController::class, 'store'])->name('admin.categories.store');
    Route::put('/categories/{category}', [MenuCategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{category}', [MenuCategoryController::class, 'destroy'])->name('admin.categories.destroy');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::put('/users/{user}', [UserController::class, 'update'])->middleware('throttle:10,1')->name('admin.users.update');
    Route::get('/profile', [AccountController::class, 'show']);
    Route::get('/change-password', [AccountController::class, 'show']);
    Route::get('/pages', [FaqController::class, 'pages'])->name('admin.pages.index');
    Route::get('/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::get('/faqs/create', [FaqController::class, 'create'])->name('admin.faqs.create');
    Route::post('/faqs', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->name('admin.faqs.edit');
    Route::put('/faqs/{faq}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::patch('/faqs/{faq}/visibility', [FaqController::class, 'visibility'])->name('admin.faqs.visibility');
    Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/menus', [NavigationController::class, 'menus'])->name('admin.menus.index');
    Route::get('/add-menu', [NavigationController::class, 'menuForm'])->name('admin.menus.create');
    Route::post('/add-menu', [NavigationController::class, 'storeMenu'])->name('admin.add-menu');
    Route::get('/menus/{menu}/edit', [NavigationController::class, 'menuForm'])->name('admin.menus.edit');
    Route::put('/menus/{menu}', [NavigationController::class, 'updateMenu'])->name('admin.menus.update');
    Route::get('/submenus', [NavigationController::class, 'index'])->name('admin.submenus.index');
    Route::get('/add-submenu', [NavigationController::class, 'create'])->name('admin.submenus.create');
    Route::post('/add-submenu', [NavigationController::class, 'store'])->name('admin.add-submenu');
    Route::get('/submenus/{submenu}/edit', [NavigationController::class, 'edit'])->name('admin.submenus.edit');
    Route::put('/submenus/{submenu}', [NavigationController::class, 'update'])->name('admin.submenus.update');
    Route::patch('/submenus/{submenu}/visibility', [NavigationController::class, 'visibility'])->name('admin.submenus.visibility');
    Route::delete('/submenus/{submenu}', [NavigationController::class, 'destroy'])->name('admin.submenus.destroy');
Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('/plans/store', [PlanController::class, 'store'])->name('plans.store');
    Route::get('/home-setting', [AdminController::class, 'setting'])->name('admin.home-setting.index');
    Route::post('/home-setting/update', [AdminController::class, 'update'])->name('admin.home-setting.update');
Route::get('/plan-headings/create', [PlanController::class, 'planHeading'])->name('plan-headings.create');
Route::post('/plan-headings/store', [PlanController::class, 'storeheading'])->name('plan-headings.store');

    });

   Route::get('/{slug}', [WebController::class, 'showPlan']);
