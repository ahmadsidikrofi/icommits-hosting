<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\ModulePaketVPS;

class ModulePaketVPSController extends Controller
{
    public function viewPagePaketVPS()
    {
        $paketVPS = ModulePaketVPS::all();
        return view('admin.module.paketVPS.show', compact(['paketVPS']));
    }

    public function viewPageAddPaketVPS()
    {
        return view('admin.module.paketVPS.create');
    }

    function addPaketVpsStore( Request $request )
    {
        $validate = $request->validate([
            'nama_paket' => 'required|max:100',
        ]);
        $tambahPaketVPS = ModulePaketVPS::create($request->all());
        return redirect('/admin/paket-vps')->with('addVPS', 'VPS berhasil ditambah');;
    }

    public function editPaketVpsStore( $slug, Request $request )
    {
        $validate = $request->validate([
            'nama_paket' => 'required|max:100',
        ]);
        $editPaketVPS = ModulePaketVPS::where('slug', $slug)->first();
        $editPaketVPS->update($request->all());
        return redirect('/admin/paket-vps')->with('editVPS', 'Edit VPS berhasil dilakukan');
    }

    function deletePaketVpsStore( $slug )
    {
        $deletePaketVPS = ModulePaketVPS::where('slug', $slug)->first()->delete();
        return redirect('/admin/paket-vps')->with('success', 'apa?');
    }

    public function paketVPS( $slug )
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $menu = MenuNavbar::where( 'slug', $slug )->first();
        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->first();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->first();
            if ( $hero ) {
                $showPaketVPS = ModulePaketVPS::all();
                $pertanyaan = Qna::where('id_menu_navbar', $menuParent->id)->get();
                $check_qna = Qna::where('id_menu_navbar', $menuParent->id)->count();
            } else {
                return view('404');
            }
        } else {
            $subMenu = SubMenuNavbar::where('slug', $slug)->first();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->first();
            if ( $hero ) {
                $showPaketVPS = ModulePaketVPS::all();
                $pertanyaan = Qna::where('id_submenu_navbar', $subMenu->id)->get();
                $check_qna = Qna::where('id_submenu_navbar', $subMenu->id)->count();
            } else {
                return view('404');
            }
        }
        return view('vps.vpsPage', compact(['menuNavbar', 'subMenuNavbar', 'showPaketVPS' ,'hero', 'pertanyaan', 'check_qna']));
    }
}
