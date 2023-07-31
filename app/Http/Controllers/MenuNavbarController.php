<?php

namespace App\Http\Controllers;

use App\Models\MenuNavbar;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        return redirect()->back();
    }

    public function editMenu($id, Request $request)
    {
        $editMenuNavbar = MenuNavbar::findOrFail($id);
        $editMenuNavbar->nama_menu = $request->nama_menu;
        $editMenuNavbar->slug = Str::slug($request->nama_menu);
        $editMenuNavbar->link = $request->link ? $request->link . "/" . $editMenuNavbar->slug : null;
        $editMenuNavbar->save();
        return redirect()->back();
    }
}
