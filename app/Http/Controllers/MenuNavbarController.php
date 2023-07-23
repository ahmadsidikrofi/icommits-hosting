<?php

namespace App\Http\Controllers;

use App\Models\MenuNavbar;
use Illuminate\Http\Request;

class MenuNavbarController extends Controller
{
    public function viewPageMenu()
    {
        $menuNavbar = MenuNavbar::all();
        return view('admin.menuNavbar.showMenu', compact(['menuNavbar']));
    }

    public function tambahMenu( Request $request )
    {
        $tambahMenu = MenuNavbar::create($request->all());
        return redirect()->back();
    }

    public function editMenu( $slug, Request $request )
    {
        $editMenuNavbar = MenuNavbar::where('slug', $slug)->first();
        $editMenuNavbar->update($request->all());
        return redirect()->back();
    }
}
