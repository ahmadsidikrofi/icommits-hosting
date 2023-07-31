<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\ServicesSection;

class promoController extends Controller
{
    function allPromo($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $pertanyaan = Qna::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ($menu) {
            $hero = Hero::where('id_menu_navbar', $menu->id)->firstOrFail();
            $services_section = ServicesSection::where('id_menu_navbar', $menu->id)->get();
        } else {
            // Cari data Hero berdasarkan slug dari SubMenuNavbar
            $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
            $services_section = ServicesSection::where('id_submenu_navbar', $subMenu->id)->get();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
        }
        return view('promo', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'services_section']));

        // $hero = Hero::whereHas('menu_navbar', function ($query) use ($slug) {
        //     $query->where('slug', $slug);
        // })->orWhereHas('submenu_navbar', function ($query) use ($slug) {
        //     $query->where('slug', $slug);
        // })->firstOrFail();
        // return view('promo', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
    }
}
