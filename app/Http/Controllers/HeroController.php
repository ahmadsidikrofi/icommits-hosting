<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Konten;
use App\Models\MenuNavbar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::latest()->get();
        return view('admin.module.hero.index', compact('hero'));
    }

    public function create(Request $request)
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        return view('admin.module.hero.create', compact([ 'menuNavbar', 'subMenuNavbar']));
    }

    public function store( Request $request )
    {
        $tambahHero = Hero::create($request->except('menu_navbar', 'submenu_navbar', 'slug_navbar'));
        $tambahHero->menu_navbar()->associate($request->menu_navbar);

        // Jika submenu_navbar dipilih dan nilainya valid, simpan relasinya
        if ($request->submenu_navbar && $request->submenu_navbar != -1) {
            $tambahHero->submenu_navbar()->associate($request->submenu_navbar);
        }

        if ( $request -> hasFile("image_background") ) {
            $request -> file("image_background")->move("image/hero", $request->file("image_background")->getClientOriginalName());
            $tambahHero -> image_background = $request -> file("image_background")->getClientOriginalName();
            $tambahHero -> save();
        }

        if ( $request -> hasFile("image_right") ) {
            $request -> file("image_right")->move("image/hero", $request->file("image_right")->getClientOriginalName());
            $tambahHero -> image_right = $request -> file("image_right")->getClientOriginalName();
            $tambahHero -> save();
        }
        $tambahHero->save();
        return redirect()->back();
    }


    public function edit($id, Request $request)
    {
        $hero = Hero::findOrFail($id);
        $menuNavbar = MenuNavbar::where('id', $hero->id_menu_navbar)->first();
        $subMenuNavbar = SubMenuNavbar::where('id', $hero->id_submenu_navbar)->first();
        return view('admin.module.hero.edit', compact('hero','menuNavbar','subMenuNavbar'));
    }

    public function update(Request $request, $id)
    {
        $updateHero = Hero::findOrFail($id);
        $updateHero->update($request->except('menu_navbar', 'submenu_navbar'));

        if ( $request -> hasFile("image_background") ) {
            $request -> file("image_background")->move("image/hero", $request->file("image_background")->getClientOriginalName());
            $updateHero -> image_background = $request -> file("image_background")->getClientOriginalName();
            $updateHero -> save();
        }

        if ( $request -> hasFile("image_right") ) {
            $request -> file("image_right")->move("image/hero", $request->file("image_right")->getClientOriginalName());
            $updateHero -> image_right = $request -> file("image_right")->getClientOriginalName();
            $updateHero -> save();
        }
        return redirect('/admin/hero');
    }

    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->deleteGambar();
        $hero->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('hero.index');
    }

    public function removeHero( $slug )
    {
        $deleteBackground = Hero::where('slug', $slug)->first();
        $img_path = public_path().'/image/hero';

        if (File::exists($img_path)) {
            File::delete($img_path);

            $deleteBackground->update([
                'image_background' => null,
            ]);
        }
        return redirect()->back();
    }

    function removeHeroRight( $slug )
    {
        $deleteImage_right = Hero::where('slug', $slug)->first();
        $img_path = public_path().'/image/hero';

        if (File::exists($img_path)) {
            File::delete($img_path);

            $deleteImage_right->update([
                'image_right' => null,
            ]);
        }
        return redirect()->back();
    }
}
