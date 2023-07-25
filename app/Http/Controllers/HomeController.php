<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use App\Models\SubMenuNavbar;
use App\Models\ModuleHostingUnlimited;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $paketUnlimited = ModuleHostingUnlimited::all();
        $pertanyaan = Qna::all();
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        // $hero = Hero::where('slug', $slug)->first();
        $selectedMenuSlug = Request::input('menu_navbar');
        $hero = DB::table('tb_hero')
        ->where('slug', $selectedMenuSlug)
        ->first();

        return view('home', compact(['paketUnlimited', 'pertanyaan', 'menuNavbar', 'subMenuNavbar', 'hero']));
    }
}
