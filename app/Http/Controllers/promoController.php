<?php

namespace App\Http\Controllers;
use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;

class promoController extends Controller
{
    function tanya($slug)
    {
        $pertanyaan = Qna::all();
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        
        // $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
        // $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
        // return view('promo', compact(['pertanyaan', 'menuNavbar', 'subMenuNavbar', 'hero']));
    }
}
