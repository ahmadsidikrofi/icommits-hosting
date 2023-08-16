<?php

use App\Models\MenuNavbar;
use Illuminate\Support\Facades\Route;
use App\Models\ModuleHostingUnlimited;

use App\Http\Controllers\qnaController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\domainController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\MenuNavbarController;
use App\Http\Controllers\subMenuNavbarController;
use App\Http\Controllers\KategoriStoriesController;
use App\Http\Controllers\ModulePaketVPSController;
use App\Http\Controllers\ServicesSectionController;
use App\Http\Controllers\ModuleHostingUnlimitedController;

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

//Bab VPS
Route::get('/vps/{slug}', [ModulePaketVPSController::class, "paketVPS"]);
Route::get('/admin/paket-vps', [ModulePaketVPSController::class, "viewPagePaketVPS"]);
Route::get('/admin/create/paket-vps', [ModulePaketVPSController::class, "viewPageAddPaketVPS"]);
Route::post('/admin/create/paket-vps/store', [ModulePaketVPSController::class, "addPaketVpsStore"]);
Route::put('/admin/edit/paket-vps/{slug}/store', [ModulePaketVPSController::class, "editPaketVpsStore"]);
Route::get('/admin/delete/paket-vps/{slug}', [ModulePaketVPSController::class, "deletePaketVpsStore"]);

//Bab Promo

Route::get('/promoKeren/{slug}', [PromoController::class, "allPromo"]);
Route::resource('/admin/promo', PromoController::class);
Route::get('/promo/{slug}', [PromoController::class, "detailPromo"]);
Route::get('/admin/hapus/promo/{id}', [PromoController::class, "destroy"]);

// Domain
Route::get('/domain/{slug}', [DomainController::class, "searchDomainPage"]);

// Article
Route::get('/daftar-artikel', [BlogController::class, "allStories"]);

// Cloud Hosting


// Bab Hosting
Route::get('/hosting-unlimited/{slug}', [ModuleHostingUnlimitedController::class, "hostingUnlimited"]);

Route::get('/cloud-hosting', function () {
    return view('hosting.cloudHosting');
});

Route::get('/client', function () {
    return view('clientArea.homeClient');
});

Route::get('/homeClient', function () {
    return view('clientArea.home');
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
// Delete
Route::get('/admin/delete/paket-unlimited-hosting/{slug}', [ModuleHostingUnlimitedController::class, "deletePaketHostingUnlimited"]);


//Module QnA
//Menampilkan QnA dihalaman admin
Route::resource('/admin/qna', qnaController::class);
Route::get('/admin/hapus/tanya/{id}', [qnaController::class, "destroy"]);
// Fitur Menu Navbar
Route::get('/admin/menu-navbar', [MenuNavbarController::class, "viewPageMenu"]);
Route::post('/admin/tambah/menu-navbar', [MenuNavbarController::class, "tambahMenu"]);
Route::put('/admin/edit/menu-navbar/{slug}', [MenuNavbarController::class, "editMenu"]);
Route::get('/admin/hapus/{id}', [MenuNavbarController::class, "hapusMenu"]);

// Fitur Sub Menu
Route::get('/admin/sub-menu-navbar/{slug}', [subMenuNavbarController::class, "viewPageSubMenu"]);
Route::post('/admin/submenu/create/store', [subMenuNavbarController::class, "tambahSubMenu"]);
Route::get('/admin/edit/submenu/{slug}', [subMenuNavbarController::class, "viewPageEditSubMenu"]);
Route::put('/admin/edit/submenu/{slug}/store', [subMenuNavbarController::class, "editSubMenuStore"]);
Route::get('/admin/hapus/sub-menu/{id}', [subMenuNavbarController::class, "hapusSubMenu"]);
Route::get('/admin/hapus/{id}', [MenuNavbarController::class, "hapusMenu"]);

// Module Hero
Route::resource('/admin/hero', HeroController::class);
Route::get('/admin/hero/remove/background-hero/{slug}', [HeroController::class, "removeHero"]);
Route::get('/admin/hero/remove/background-hero-right/{slug}', [HeroController::class, "removeHeroRight"]);
Route::get('/admin/hapus/hero/{id}', [HeroController::class, "destroy"]);

// Module Services Section
Route::get('/admin/services-section', [ServicesSectionController::class, "viewPageServicesSection"]);
Route::get('/admin/create/service', [ServicesSectionController::class, "viewPageCreateService"]);
Route::post('/admin/create/service/store', [ServicesSectionController::class, "createServiceSection"]);
Route::put('/admin/edit/service-section/{id}', [ServicesSectionController::class, "editServiceSection"]);
Route::put('/admin/hapus/service-section/{id}', [ServicesSectionController::class, "editServiceSection"]);

// Module Stories Section
Route::get('/admin/kategori-stories', [KategoriStoriesController::class, "viewPageKategoriStories"]);
Route::post('/admin/create/data/kategori-stories/store', [KategoriStoriesController::class, "CreateKategoriStoriesStore"]);
Route::get('/admin/edit/data/kategori-stories/{slug}', [KategoriStoriesController::class, "ViewPageEditKategoriStories"]);
Route::put('/admin/edit/data/kategori-stories/store/{slug}', [KategoriStoriesController::class, "EditKategoriStoriesStore"]);
Route::get('/admin/destroy/data/kategori-stories/{slug}', [KategoriStoriesController::class, "DestroyKategoriStoriesStore"]);

Route::get('/admin/stories-section', [StoriesController::class, "viewPageStoriesSection"]);
Route::get('/admin/create/stories', [StoriesController::class, "viewPageCreateStories"]);
Route::post('/admin/create/stories/store', [StoriesController::class, "CreateStoriesStore"]);
Route::get('/admin/edit/stories/{slug}', [StoriesController::class, "viewPageEditStories"]);
Route::put('/admin/edit/stories/store/{slug}', [StoriesController::class, "EditStoriesStore"]);
Route::get('/admin/destroy/stories/{slug}', [StoriesController::class, "DestroyStories"]);

Route::get('/stories', [StoriesController::class, "showStories"]);
Route::get('/stories/{slug}', [StoriesController::class, "showDetailStories"]);
Route::get('/admin/stories-section', [StoriesController::class, "viewPageStoriesSection"]);

//Module Partners
Route::resource('/admin/partner', PartnerController::class);
Route::get('/admin/hapus/partner/{id}', [PartnerController::class, "destroy"]);
// ====== Halaman dan Menu Admin (CMS) End // ======



