<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;

class DomainController extends Controller
{
    public function searchDomainPage( $slug )
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $pertanyaan = Qna::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->firstOrFail();
            return view('domain', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
        } else {
            $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
            return view('domain', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
        }
    }
}