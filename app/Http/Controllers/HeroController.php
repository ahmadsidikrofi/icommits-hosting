<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Konten;
use App\Models\MenuNavbar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::all();
        return view('admin.module.hero.index', compact('hero'));
    }

    public function create()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        return view('admin.module.hero.create', compact([ 'menuNavbar', 'subMenuNavbar']));
    }

    public function store( Request $request )
    {
        // $tambahHero->menu_navbar()->sync($request->menu_navbar);
        // $tambahHero->menu_navbar()->sync($request->menu_submenu);
        $tambahHero = Hero::create($request->except('menu_navbar', 'submenu_navbar'));
        $tambahHero->menu_navbar()->associate($request->menu_navbar);

        // Jika submenu_navbar dipilih, simpan relasinya
        if ($request->submenu_navbar) {
            $tambahHero->submenu_navbar()->associate($request->submenu_navbar);
        }

        if ( $request -> hasFile("image_background") ) {
            $request -> file("image_background")->move("image/hero", $request->file("image_background")->getClientOriginalName());
            $tambahHero -> image_background = $request -> file("image_background")->getClientOriginalName();
            $tambahHero -> save();
        }
        return redirect()->back();
    }

    // public function store(Request $request)
    // {
    //     $rules = [
    //         'judul' => 'required|unique:tb_hero',
    //         'id_kategori_artikel' => 'required',
    //         'teks' => 'required|min:50',
    //         'gambar' => 'nullable|image|max:2048',
    //     ];

    //     $message = [
    //         'required' => 'Data wajib diisi!',
    //         'unique' => 'Data sudah ada!',
    //         'min' => 'Teks minimal :min karakter'
    //     ];

    //     $validation = Validator::make($request->all(), $rules, $message);
    //     if ($validation->fails()) {
    //         session()->put('danger', 'Data yang anda input tidak valid, silahkan di ulang');
    //         return back()->withErrors($validation)->withInput();
    //     }
    //     $hero = new Hero();
    //     // $hero->id_kategori_hero = $request->id_kategori_hero;
    //     $hero->title = $request->judul;
    //     $hero->slug = Str::slug($request->judul);
    //     $hero->teks = $request->teks;
    //     if ($request->hasFile('gambar')) {
    //         $image = $request->gambar;
    //         $name = rand(1000, 9999) . $image->getClientOriginalName();
    //         $image->move('images/hero/', $name);
    //         $hero->gambar = $name;
    //     }
    //     $hero->save();

    //     $konten = new Konten();
    //     $konten->id_hero = $hero->id;
    //     $konten->save();
    //     session()->put('success', 'Data Berhasil ditambahkan');
    //     return redirect()->route('hero.index');
    // }


    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        return view('admin.module.hero.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $updateHero = Hero::findOrFail($id);
        $updateHero->Hero::update($request->except('menu_navbar', 'submenu_navbar'));
        $updateHero->menu_navbar()->associate($request->menu_navbar);

        if ($request->submenu_navbar) {
            $updateHero->submenu_navbar()->associate($request->submenu_navbar);
        }

        if ( $request -> hasFile("image_background") ) {
            $request -> file("image_background")->move("image/hero", $request->file("image_background")->getClientOriginalName());
            $updateHero -> image_background = $request -> file("image_background")->getClientOriginalName();
            $updateHero -> save();
        }
        return view('admin.module.hero.index');
    }

    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->deleteGambar();
        $hero->delete();

        $kontens = Konten::where('id_hero', $hero->id)->get();
        foreach ($kontens as $kontenb) {
            $kontenb;
        }
        $konten = Konten::find($kontenb->id);
        $konten->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('hero.index');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images/artikel'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/artikel/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
