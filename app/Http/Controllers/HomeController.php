<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\DB;
use App\Models\ModuleHostingUnlimited;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $paketUnlimited = ModuleHostingUnlimited::all();
        $selectedMenuSlug = Request::input('menu_navbar');
        $hero = DB::table('tb_hero')
        ->where('slug', $selectedMenuSlug)
        ->first();

        return view('home', compact(['paketUnlimited', 'menuNavbar', 'subMenuNavbar']));
    }
}
