<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Hero;
use App\Models\Promo;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\ServicesSection;
use Carbon\Carbon;

class PromoController extends Controller
{
    function allPromo($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ( $menu === NULL) {
            return view('404.404');
        }
        if ($menu) {
            $hero = Hero::where('id_menu_navbar',$menu->id)->first();
            if ( $hero ) {
                $services_section = ServicesSection::where('id_menu_navbar', $menu->id)->get();
                $promo = Promo::where('id_menu_navbar', $menu->id)->get();
                $pertanyaan = Qna::where('id_menu_navbar', $menu->id)->get();
                $check_promo = Promo::count();
                $check_qna = Qna::where('id_menu_navbar', $menu->id)->count();
                return view('promoPage.promo', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'services_section', 'promo', 'check_promo', 'check_qna']));
            } else {
                return view('404.heroNotFound');
            }
        } elseif (!$menu) {
            // Cari data Hero berdasarkan slug dari SubMenuNavbar
            $subMenu = SubMenuNavbar::where('slug', $slug)->first();
            if ($subMenu === NULL) {
                return view('404.404');
            }
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->first();
            if ( $hero ) {
                $services_section = ServicesSection::where('id_submenu_navbar', $subMenu->id)->get();
                $promo = Promo::where('id_submenu_navbar', $subMenu->id)->get();
                $check_promo = Promo::count();
                $pertanyaan = Qna::where('id_submenu_navbar', $subMenu->id)->get();
                $check_qna = Qna::where('id_submenu_navbar', $subMenu->id)->count();
                return view('promoPage.promo', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'services_section', 'promo', 'check_promo', 'check_qna']));
            } else {
                return view('404.heroNotFound');
            }
        }

    }

    public function index()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $promo = Promo::all();
        return view('admin.module.promo.index', compact(['menuNavbar', 'subMenuNavbar','promo']));
    }

    public function create(Request $request)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $promo = Promo::first();
        $readonlySectionTitle = false;
        if ($promo) {
            $readonlySectionTitle = true;
        }
        return view('admin.module.promo.create', compact(['menuNavbar', 'subMenuNavbar', 'readonlySectionTitle']));
    }


    public function store( Request $request )
    {
        $tambahPromo = Promo::create($request->except('menu_navbar', 'submenu_navbar', 'slug_navbar'));
        $tambahPromo->menu_navbar()->associate($request->menu_navbar);

        // Jika submenu_navbar dipilih dan nilainya valid, simpan relasinya
        if ($request->submenu_navbar && $request->submenu_navbar != -1) {
            $tambahPromo->submenu_navbar()->associate($request->submenu_navbar);
        }

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/", $request->file("image")->getClientOriginalName());
            $tambahPromo -> image = $request -> file("image")->getClientOriginalName();
            $tambahPromo -> save();
        }

        $tambahPromo->save();
        return redirect('/admin/promo')->with('addPromo', 'Promo berhasil ditambah');;
    }

    public function edit($id, Request $request)
    {
        $promo = Promo::findOrFail($id);
        $menuNavbar = MenuNavbar::where('id', $promo->id_menu_navbar)->first();
        $subMenuNavbar = SubMenuNavbar::where('id', $promo->id_submenu_navbar)->first();
        return view('admin.module.promo.edit', compact('promo','menuNavbar','subMenuNavbar'));
    }

    public function update(Request $request, $id)
    {
        $updatePromo = Promo::findOrFail($id);
        $updatePromo->update($request->except('menu_navbar', 'submenu_navbar'));
        // Calculate the countdown time
        $expiredDateTime = new \DateTime($request->input('expired_at'));
        $now = new \DateTime();
        $interval = $now->diff($expiredDateTime);
        $countdownTime = sprintf(
            "%d hari %d jam %02d menit",
            $interval->d,
            $interval->h,
            $interval->i
        );

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/", $request->file("image")->getClientOriginalName());
            $updatePromo -> image = $request -> file("image")->getClientOriginalName();
            $updatePromo -> save();
        }

        return redirect('/admin/promo')->with('editPromo', 'Edit promo berhasil dilakukan');
    }

    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->deleteGambar();
        $promo->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('promo.index');
    }

    function detailPromo( $slug )
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $promoLain = Promo::latest()->get();
        $menu = MenuNavbar::where('slug', $slug)->first();
        $promoDetail = Promo::where('slug', $slug)->first();
        $promoDetail->formatted_expired_at = Carbon::parse($promoDetail->expired_at)->isoFormat('MMMM DD, YYYY');
        return view('promoPage.detailPromo', compact(['menuNavbar', 'subMenuNavbar', 'menu', 'promoDetail', 'promoLain']));
    }
}
