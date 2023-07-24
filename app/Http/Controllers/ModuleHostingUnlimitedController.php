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

    function hostingUnlimited()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $pertanyaan = Qna::all();

        // $selectedMenuSlug = Request::input('menu_navbar');
        // $hero = DB::table('tb_hero')
        // ->where('slug', $selectedMenuSlug)
        // ->first();
        $hero = Hero::all()->take(1);
        return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan']));
    }

    // function tanya()
    // {

    //     return view('hosting.hostingUnlimited', compact('pertanyaan'));
    // }


}
