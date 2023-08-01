<?php

namespace App\Http\Controllers;
use App\Models\Qna;
use App\Models\Hero;
use App\Models\Promo;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;

class PromoController extends Controller
{
    function allPromo($slug)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $pertanyaan = Qna::all();
        $menu = MenuNavbar::where('slug', $slug)->first();
        if ($menu) {
            $menuParent = MenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_menu_navbar', $menuParent->id)->firstOrFail();
            $promo = Promo::where('id_menu_navbar', $menuParent->id)->get();
            return view('promo', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'promo']));
        } else {
            $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
            $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
            $promo = Promo::where('id_submenu_navbar', $subMenu->id)->get();
            return view('promo', compact(['menuNavbar', 'subMenuNavbar', 'hero', 'pertanyaan', 'promo']));
        }
    }

    public function index()
    {
        $promo = Promo::all();
        return view('admin.module.promo.index', compact('promo'));
    }

    public function create(Request $request)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        return view('admin.module.promo.create', compact([ 'menuNavbar', 'subMenuNavbar']));
    }

    public function section(Request $request)
    {
        $tambahPromo = new Promo();
        $tambahPromo->title_promo = $request->title_promo;
        $tambahPromo->mini_title_promo = $request->mini_title_promo;
        $tambahPromo->save();
        return redirect()->back();
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
        return redirect()->back();
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


        if ( $request -> hasFile("promo") ) {
            $request -> file("promo")->move("image/", $request->file("promo")->getClientOriginalName());
            $updatePromo -> promo = $request -> file("promo")->getClientOriginalName();
            $updatePromo -> save();
        }

        return redirect('/admin/promo');
    }

    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->deleteGambar();
        $promo->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('promo.index');
    }
}
