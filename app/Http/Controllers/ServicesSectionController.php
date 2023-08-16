<?php

namespace App\Http\Controllers;

use App\Models\MenuNavbar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\ServicesSection;

class ServicesSectionController extends Controller
{
    public function viewPageServicesSection()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $showServices = ServicesSection::all();
        return view('admin.module.services_section.showService', compact(['showServices', 'menuNavbar', 'subMenuNavbar']));
    }

    public function viewPageCreateService()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $showServices = ServicesSection::first();
        $readonlySectionTitle = false;
        if ($showServices) {
            $readonlySectionTitle = true;
        }
        return view('admin.module.services_section.CreateService', compact(['menuNavbar', 'subMenuNavbar', 'readonlySectionTitle']));
    }

    public function createServiceSection( Request $request )
    {
        $tambahLayanan = ServicesSection::create($request->except('menu_navbar', 'submenu_navbar', 'slug'));
        $tambahLayanan->menu_navbar()->associate($request->menu_navbar);
        $tambahLayanan->services_title = $request->services_title;
        $tambahLayanan->slug = Str::slug($request->services_title);
        // Jika submenu_navbar dipilih dan nilainya valid, simpan relasinya
        if ($request->submenu_navbar && $request->submenu_navbar != -1) {
            $tambahLayanan->submenu_navbar()->associate($request->submenu_navbar);
        }
        $tambahLayanan->save();

        return redirect()->back()->with('addSS', 'Service berhasil ditambah');
    }

    public function editServiceSection( $id, Request $request )
    {
        $editLayanan = ServicesSection::find($id);
        $editLayanan->update($request->except('menu_navbar', 'submenu_navbar', 'slug'));
        $editLayanan->services_title = $request->services_title;
        $editLayanan->slug = Str::slug($request->services_title);
        $editLayanan->save();

        return redirect()->back()->with('editSS', 'Edit service berhasil dilakukan');
    }

    public function deleteServiceSection( $slug )
    {
        $deletePaketVPS = ServicesSection::where('slug', $slug)->first()->delete();
        return redirect('/admin/paket-vps')->with('success', 'apa?');
    }
}
