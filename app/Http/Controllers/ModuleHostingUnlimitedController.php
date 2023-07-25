<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\DB;
use App\Models\ModuleHostingUnlimited;
use Illuminate\Support\Facades\Request;

class ModuleHostingUnlimitedController extends Controller
{
    function viewPageHostingUnlimited()
    {
        $webHostingUnlimited = ModuleHostingUnlimited::all();
        return view('admin.module.paket_unlimited.show', compact('webHostingUnlimited'));
    }

    function viewPageAddPaketHostingUnlimited()
    {
        return view('admin.module.paket_unlimited.create');
    }

    function addPaketHostingUnlimited( Request $request )
    {
        $validate = $request->validate([
            'nama_paket' => 'required|max:100',
        ]);
        $tambahPaketHosting = ModuleHostingUnlimited::create($request->all());
        return redirect('/admin/paket-unlimited');
    }

    // function editPaketHostingUnlimited( $slug, Request $request )
    // {
    //     $editPaketHosting = ModuleHostingUnlimited::where('slug', $slug)->first();
    //     $editPaketHosting->slug = NULL;
    //     $editPaketHosting->update($request->all());
    //     return redirect('/admin/paket-unlimited');
    // }

    function hostingUnlimited($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $pertanyaan = Qna::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->firstOrFail();
            return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
        } else {
            $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
            return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
        }

    //     $menu = MenuNavbar::where('slug' , $slug)->first();
    //     if ($menu) {
    //         if ($menu->tipe_menu === 'link') {
    //             // Jika tipe menu adalah 'link', cari hero berdasarkan id_menu_navbar
    //             $menuLink = MenuNavbar::where('slug' , $slug)->first();
    //             $hero = Hero::where('id_menu_navbar', $menuLink->id)->firstOrFail();
    //         } elseif ($menu->tipe_menu === 'sub_menu') {
    //             // Jika tipe menu adalah 'sub_menu', gunakan relasi untuk mencari hero berdasarkan id_submenu_navbar
    //             $subMenu = $menu->subMenu;
    //             if ($subMenu) {
    //                 $subMenu = SubMenuNavbar::where('slug', $slug);
    //                 $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
    //             } else {
    //                 abort(404);
    //             }
    //         }
    //         return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
    //     }
    }


}
