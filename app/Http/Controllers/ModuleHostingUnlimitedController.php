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
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        return view('admin.module.paket_unlimited.create', compact(['menuNavbar', 'subMenuNavbar']));
    }

    function addPaketHostingUnlimited( Request $request )
    {
        $validate = $request->validate([
            'nama_paket' => 'required|max:100',
        ]);
        $tambahPaketHosting = ModuleHostingUnlimited::create($request->all());
        return redirect('/admin/paket-unlimited')->with('addPaket', 'Paket berhasil ditambah');;
    }

    public function editPaketHostingUnlimited( $slug, Request $request )
    {
        $validate = $request->validate([
            'nama_paket' => 'required|max:100',
        ]);
        $editPaketHosting = ModuleHostingUnlimited::where('slug', $slug)->first();
        $editPaketHosting->update($request->all());
        return redirect('/admin/paket-unlimited')->with('editPaket', 'Edit paket berhasil dilakukan');
    }

    public function deletePaketHostingUnlimited( $slug )
    {
        $deletePaketHosting = ModuleHostingUnlimited::where('slug', $slug)->first()->delete();
        return redirect('/admin/paket-unlimited')->with('success', 'apa?');
    }

    function hostingUnlimited($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $paketUnlimited = ModuleHostingUnlimited::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->first();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->first();
            if ( $hero ) {
                $services_section = ServicesSection::where('id_menu_navbar', $menuParent->id)->get();
                $check_service = ServicesSection::count();
                $pertanyaan = Qna::where('id_menu_navbar', $menuParent->id)->get();
                $check_qna = Qna::where('id_menu_navbar', $menuParent->id)->count();
            } else {
                return view('404.heroNotFound');
            }
        } else {
            $subMenu = SubMenuNavbar::where('slug', $slug)->first();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->first();
            if ( $hero ) {
                $services_section = ServicesSection::where('id_submenu_navbar', $subMenu->id)->get();
                $check_service = ServicesSection::count();
                $pertanyaan = Qna::where('id_submenu_navbar', $subMenu->id)->get();
                $check_qna = Qna::where('id_submenu_navbar', $subMenu->id)->count();
            } else {
                return view('404.heroNotFound');
            }
        }
        return view('hosting.hostingUnlimited', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'services_section', 'check_service', 'check_qna', 'paketUnlimited']));
    }


}
