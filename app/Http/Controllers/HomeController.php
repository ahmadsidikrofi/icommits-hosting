<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModuleHostingUnlimited;

class HomeController extends Controller
{
    function showHome()
    {
        $paketUnlimited = ModuleHostingUnlimited::all();
        return view('home', compact('paketUnlimited'));
    }
}
