<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\ServicesSection;
use Illuminate\Support\Facades\DB;
use App\Models\ModuleHostingUnlimited;

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

    function hostingUnlimited($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->first();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->first();
            if ( $hero ) {
                $services_section = ServicesSection::where('id_menu_navbar', $menuParent->id)->get();
                $check_service = ServicesSection::count();
                $pertanyaan = Qna::where('id_menu_navbar', $menuParent->id)->get();
                $check_qna = Qna::count();
            } else {
                return view('404');
            }
        } else {
            $subMenu = SubMenuNavbar::where('slug', $slug)->first();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->first();
            if ( $hero ) {
                $services_section = ServicesSection::where('id_submenu_navbar', $subMenu->id)->get();
                $check_service = ServicesSection::count();
                $pertanyaan = Qna::where('id_submenu_navbar', $subMenu->id)->get();
                $check_qna = Qna::count();
            } else {
                return view('404');
            }
        }
        return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'services_section', 'check_service', 'check_qna']));
    }


}
