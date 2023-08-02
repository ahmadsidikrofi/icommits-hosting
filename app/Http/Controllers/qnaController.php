<?php

namespace App\Http\Controllers;
use App\Models\Qna;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\Validator;

class QnaController extends Controller
{
    // public function tanya($slug)
    // {
    //     $menuNavbar = MenuNavbar::all();
    //     $subMenuNavbar = SubMenuNavbar::all();
    //     $menu = MenuNavbar::where('slug', $slug)->first();
    //     if ($menu) {
    //         $pertanyaan = Qna::where('id_menu_navbar', $menu->id)->get();
    //         $check_pertanyaan = Qna::count();
    //     } else {
    //         // Cari data Hero berdasarkan slug dari SubMenuNavbar
    //         $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
    //         $pertanyaan = Qna::where('id_submenu_navbar', $menu->id)->get();
    //         $check_pertanyaan = Qna::count();
    //     }
    //     return view('qna', compact(['menuNavbar', 'subMenuNavbar', 'check_promo', 'pertanyaan']));
    //     // $pertanyaan = Qna::all();
    //     // return view('admin.module.qna.index', compact('pertanyaan'));
    // }
    
    public function index()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $pertanyaan = Qna::all();
        return view('admin.module.qna.index', compact(['menuNavbar', 'subMenuNavbar','pertanyaan']));
    }

    public function create(Request $request)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $pertanyaan = Qna::first();
        return view('admin.module.qna.create', compact(['menuNavbar', 'subMenuNavbar']));
    }

    public function store( Request $request )
    {
        $tambahPertanyaan = Qna::create($request->except('menu_navbar', 'submenu_navbar', 'slug'));
        $tambahPertanyaan->menu_navbar()->associate($request->menu_navbar);

        // Jika submenu_navbar dipilih dan nilainya valid, simpan relasinya
        if ($request->submenu_navbar && $request->submenu_navbar != -1) {
            $tambahPertanyaan->submenu_navbar()->associate($request->submenu_navbar);
        }

        $tambahPertanyaan->save();
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $pertanyaan = Qna::findOrFail($id);
        $menuNavbar = MenuNavbar::where('id', $pertanyaan->id_menu_navbar)->first();
        $subMenuNavbar = SubMenuNavbar::where('id', $pertanyaan->id_submenu_navbar)->first();
        return view('admin.module.qna.edit', compact('pertanyaan', 'menuNavbar', 'subMenuNavbar'));
    }

    public function update(Request $request, $id)
    {
        $pertanyaan = Qna::findOrFail($id);
        $pertanyaan->update($request->except('menu_navbar', 'submenu_navbar'));
        return redirect('/admin/qna');
    }

    public function destroy($id)
    {
        $pertanyaan = Qna::findOrFail($id);
        $pertanyaan->deleteGambar();
        $pertanyaan->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('qna.index');
    }

}
