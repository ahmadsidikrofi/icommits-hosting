<?php

namespace App\Http\Controllers;
use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;

class promoController extends Controller
{
    function tanya()
    {
        $pertanyaan = Qna::all();
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $hero = Hero::all()->take(2)->skip(1);
        return view('promo', compact(['pertanyaan', 'menuNavbar', 'subMenuNavbar', 'hero']));
    }
}
