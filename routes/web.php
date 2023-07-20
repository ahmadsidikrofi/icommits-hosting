<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/promo', function () {
    return view('promo');
});

// Bab Hosting
Route::get('/hosting-unlimited', function () {
    return view('hosting.hostingUnlimited');
});
Route::get('/cloud-hosting', function () {
    return view('hosting.cloudHosting');
});

Route::get('/admin/dashboard', function () {
    return view('admin.admin');
});
