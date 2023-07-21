<?php

namespace App\Http\Controllers;
use App\Models\Qna;
use Illuminate\Http\Request;

class promoController extends Controller
{
    function tanya()
    {
        $pertanyaan = Qna::all();
        return view('promo', compact('pertanyaan'));
    }
}
