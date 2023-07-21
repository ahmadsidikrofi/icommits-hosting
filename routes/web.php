<?php

use Illuminate\Support\Facades\Route;

use App\Models\ModuleHostingUnlimited;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleHostingUnlimitedController;
use App\Http\Controllers\qnaController;
use App\Http\Controllers\PromoController;



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
Route::get('/promo', function () {
    return view('promo');
});

Route::get('/promo', [PromoController::class, "tanya"]);

// Bab Hosting
Route::get('/hosting-unlimited', function () {
    return view('hosting.hostingUnlimited');
});

Route::get('/cloud-hosting', function () {
    return view('hosting.cloudHosting');
});

Route::get('/client', function () {
    return view('clientArea.homeClient');
});

Route::get('/hosting-unlimited', [ModuleHostingUnlimitedController::class, "tanya"]);

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


//Module QnA
//Menampilkan QnA dihalaman admin
Route::resource('admin/qna', qnaController::class);

// ====== Halaman dan Menu Admin (CMS) End // ======



