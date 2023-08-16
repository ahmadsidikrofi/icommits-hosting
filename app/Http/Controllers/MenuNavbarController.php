<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Promo;
use App\Models\MenuNavbar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;

class MenuNavbarController extends Controller
{
    public function viewPageMenu()
    {
        $menuNavbar = MenuNavbar::all();
        return view('admin.menuNavbar.showMenu', compact(['menuNavbar']));
    }

    public function tambahMenu(Request $request)
    {
        $tambahMenu = new MenuNavbar();
        $subMenuNavbar = new SubMenuNavbar();
        $tambahMenu->nama_menu = $request->nama_menu;
        $tambahMenu->tipe_menu = $request->tipe_menu;
        $tambahMenu->slug = Str::slug($request->nama_menu);
        $tambahMenu->link = $request->link ? $request->link . "/" . $tambahMenu->slug : null;
        $tambahMenu->save();
        return redirect('/admin/menu-navbar')->with('addMenu', 'Menu berhasil ditambah');
    }

    public function editMenu($id, Request $request)
    {
        $editMenuNavbar = MenuNavbar::findOrFail($id);
        $editMenuNavbar->nama_menu = $request->nama_menu;
        $editMenuNavbar->slug = Str::slug($request->nama_menu);
        $editMenuNavbar->link = $request->link ? $request->link . "/" . $editMenuNavbar->slug : null;
        $editMenuNavbar->save();
        return redirect()->back()->with('editMenu', 'Edit menu berhasil dilakukan');
    }

    public function hapusMenu($id)
    {
        $menu = MenuNavbar::where('id', $id)->first();
        if ($menu->tipe_menu === "link"){
            $hapusMenu = MenuNavbar::where('id', $id)->first()->delete();
            $hapusHero = Hero::where('id_menu_navbar', $menu->id)->delete();
            $hapusPromo = Promo::where('id_menu_navbar', $menu->id)->delete();
            return redirect('/admin/menu-navbar');
        } elseif ($menu->tipe_menu === "sub_menu") {
            $hapusMenu = MenuNavbar::where('id', $id)->first()->delete();
            $hapusMenuParent = SubMenuNavbar::where('id_menu_navbar', $menu->id)->delete();
            return redirect('/admin/menu-navbar');
        }
    }
}
