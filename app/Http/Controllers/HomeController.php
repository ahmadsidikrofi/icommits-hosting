<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Partner;
use App\Models\MenuNavbar;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\DB;
use App\Models\ModuleHostingUnlimited;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $paketUnlimited = ModuleHostingUnlimited::all();
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $partner = Partner::all();
        // $hero = Hero::where('slug', $slug)->first();
        $selectedMenuSlug = Request::input('menu_navbar');
        $hero = DB::table('tb_hero')
        ->where('slug', $selectedMenuSlug)
        ->first();

        return view('home', compact(['paketUnlimited', 'menuNavbar', 'subMenuNavbar', 'hero', 'partner']));
    }
}
