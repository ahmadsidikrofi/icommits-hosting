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
        $hero = Hero::whereHas('menu_navbar', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->orWhereHas('submenu_navbar', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->firstOrFail();
        return view('domain', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
    }
}
