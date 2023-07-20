<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModuleHostingUnlimited;
use App\Models\Qna;

class HomeController extends Controller
{
    function showHome()
    {
        $paketUnlimited = ModuleHostingUnlimited::all();
        $pertanyaan = Qna::all();
        return view('home', compact(['paketUnlimited', 'pertanyaan']));
    }
}
