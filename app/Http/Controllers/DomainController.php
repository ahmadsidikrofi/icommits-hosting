<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;

class DomainController extends Controller
{
    // public function searchDomainPage( $slug )
    // {
    //     $menuNavbar = MenuNavbar::all();
    //     $subMenuNavbar = SubMenuNavbar::all();
    //     $menu = MenuNavbar::where('slug', $slug)->first();
    //     if ($menu) {
    //         $menuParent = MenuNavbar::where('slug', $slug)->firstOrFail();
    //         $hero = Hero::where('id_menu_navbar', $menuParent->id)->firstOrFail();
    //         if (!$hero) {
    //             return view('admin.dashboard');
    //         }
    //         $pertanyaan = Qna::where('id_menu_navbar', $menuParent->id)->get();
    //         $check_qna = Qna::count();
    //         return view('domain', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'check_qna']));
    //     } elseif (!$menu) {
    //         $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
    //         $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
    //         if (!$hero) {
    //             return view('admin.dashboard');
    //         }
    //         $pertanyaan = Qna::where('id_submenu_navbar', $subMenu->id)->get();
    //         $check_qna = Qna::count();
    //         return view('domain', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'check_qna']));
    //     }
    // }
    public function searchDomainPage($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $menu = MenuNavbar::where('slug', $slug)->first();

        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->first();
            if ($hero) {
                $pertanyaan = Qna::where('id_menu_navbar', $menuParent->id)->get();
                $check_qna = Qna::where('id_menu_navbar', $menuParent->id)->count();
                return view('domain', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'check_qna']));
            } else {
                return view('404');
            }
        } elseif (!$menu) {
            $subMenu = SubMenuNavbar::where('slug', $slug)->first();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->first();
            if ($hero) {
                $pertanyaan = Qna::where('id_submenu_navbar', $subMenu->id)->get();
                $check_qna = Qna::where('id_submenu_navbar', $subMenu->id)->count();
                return view('domain', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'check_qna']));
            } else {
                return view('404');
            }
        }
    }
}
