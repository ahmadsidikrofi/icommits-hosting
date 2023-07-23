<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\ModuleHostingUnlimited;
use App\Models\SubMenuNavbar;

class HomeController extends Controller
{
    function showHome()
    {
        $paketUnlimited = ModuleHostingUnlimited::all();
        $pertanyaan = Qna::all();
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        return view('home', compact(['paketUnlimited', 'pertanyaan', 'menuNavbar', 'subMenuNavbar']));
    }
}
