<?php

use Illuminate\Support\Facades\Route;

use App\Models\ModuleHostingUnlimited;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuNavbarController;
use App\Http\Controllers\ModuleHostingUnlimitedController;
use App\Http\Controllers\subMenuNavbarController;
use App\Models\MenuNavbar;
use App\Http\Controllers\qnaController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\HeroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "showHome"]);

//Bab Promo

Route::get('/promo/{slug}', [PromoController::class, "allPromo"]);

// Bab Hosting
Route::get('/hosting-unlimited/{slug}', [ModuleHostingUnlimitedController::class, "hostingUnlimited"]);

Route::get('/cloud-hosting', function () {
    return view('hosting.cloudHosting');
});

Route::get('/client', function () {
    return view('clientArea.homeClient');
});

// Route::get('/hosting-unlimited', [ModuleHostingUnlimitedController::class, "tanya"]);

// ====== Halaman dan Menu Admin (CMS) Start // ======

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/module', function () {
    return view('admin.module');
});

// Module Hosting Unlimited
Route::get('/admin/paket-unlimited', [ModuleHostingUnlimitedController::class, "viewPageHostingUnlimited"]);
// Create Paket Hosting Unlimited
Route::get('/admin/create/paket-hosting-unlimited', [ModuleHostingUnlimitedController::class, "viewPageAddPaketHostingUnlimited"]);
Route::post('/admin/create/paket-hosting-unlimited/store', [ModuleHostingUnlimitedController::class, "addPaketHostingUnlimited"]);
// Update Paket Hosting Unlimited
Route::put('/admin/edit/paket-hosting-unlimited/{slug}/store', [ModuleHostingUnlimitedController::class, "editPaketHostingUnlimited"]);


//Module QnA
//Menampilkan QnA dihalaman admin
Route::resource('admin/qna', qnaController::class);

// Fitur Menu Navbar
Route::get('/admin/menu-navbar', [MenuNavbarController::class, "viewPageMenu"]);
Route::post('/admin/tambah/menu-navbar', [MenuNavbarController::class, "tambahMenu"]);
Route::put('/admin/edit/menu-navbar/{slug}', [MenuNavbarController::class, "editMenu"]);

// Fitur Sub Menu
Route::get('/admin/sub-menu-navbar/{id}', [subMenuNavbarController::class, "viewPageSubMenu"]);
Route::post('/admin/submenu/create/store', [subMenuNavbarController::class, "tambahSubMenu"]);
Route::get('/admin/edit/menu-navbar/{slug}', [subMenuNavbarController::class, "viewPageEditSubMenu"]);
Route::put('/admin/edit/menu-navbar/{slug}/store', [subMenuNavbarController::class, "editSubMenuStore"]);

// Module Hero
// Route::get('/admin/hero', function () {
//     return view('admin.module.hero.index');
// });

Route::resource('/admin/hero', HeroController::class);
// ====== Halaman dan Menu Admin (CMS) End // ======



