<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\DB;
use App\Models\ModuleHostingUnlimited;
use App\Models\ServicesSection;
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

    function hostingUnlimited($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->firstOrFail();
            $services_section = ServicesSection::where('id_menu_navbar', $menuParent->id)->get();
            $check_service = ServicesSection::count();
            $pertanyaan = Qna::where('id_menu_navbar', $menuParent->id)->get();
            $check_qna = Qna::where('id_menu_navbar', $menuParent->id)->count();
            return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'services_section', 'check_service', 'check_qna']));
        } else {
            $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
            $services_section = ServicesSection::where('id_submenu_navbar', $subMenu->id)->get();
            $check_service = ServicesSection::count();
            $pertanyaan = Qna::where('id_submenu_navbar', $subMenu->id)->get();
            $check_qna = Qna::where('id_submenu_navbar', $subMenu->id)->count();
            return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'services_section', 'check_service', 'check_qna']));
        }
    }


}
