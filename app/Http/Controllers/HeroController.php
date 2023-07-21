<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Hero;
use App\Models\Konten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::all();
        $kategoriHero = Kategori::all();
        // $hero = Hero::find(1);
        // $kategoriHero = $hero->kategori;
        return view('admin.module.hero.index', compact('hero', 'kategoriHero'));
    }

    public function create()
    {
        $kategoriHero = Kategori::all();
        return view('admin.module.hero.create', compact('kategoriHero'));
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required|unique:tb_hero',
            'id_kategori_artikel' => 'required',
            'teks' => 'required|min:50',
            'gambar' => 'nullable|image|max:2048',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
            'unique' => 'Data sudah ada!',
            'min' => 'Teks minimal :min karakter'
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            session()->put('danger', 'Data yang anda input tidak valid, silahkan di ulang');
            return back()->withErrors($validation)->withInput();
        }
        $hero = new Hero();
        $hero->id_kategori_hero = $request->id_kategori_hero;
        $hero->judul = $request->judul;
        $hero->slug = Str::slug($request->judul);
        $hero->teks = $request->teks;
        if ($request->hasFile('gambar')) {
            $image = $request->gambar;
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/hero/', $name);
            $hero->gambar = $name;
        }
        $hero->save();

        $konten = new Konten();
        $konten->id_hero = $hero->id;
        $konten->save();
        session()->put('success', 'Data Berhasil ditambahkan');
        return redirect()->route('hero.index');
    }


    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        $kategoriHero = Kategori::all();
        return view('admin.module.hero.edit', compact('hero', 'kategoriHero'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'judul' => 'required',
            'id_kategori_artikel' => 'required',
            'teks' => 'required|min:50',
            'gambar' => 'nullable|image|max:2048',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
            'min' => 'Teks minimal :min karakter'
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            session()->put('danger', 'Data yang anda input tidak valid, silahkan di ulang');
            return back()->withErrors($validation)->withInput();
        }
        $hero = Hero::findOrFail($id);
        $hero->id_kategori_hero = $request->id_kategori_hero;
        $hero->judul = $request->judul;
        $hero->slug = Str::slug($request->judul);
        $hero->teks = $request->teks;
        if ($request->hasFile('gambar')) {
            $hero->deleteGambar();
            $image = $request->gambar;
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/hero/', $name);
            $hero->gambar = $name;
        }
        $hero->save();
        session()->put('success', 'Data Berhasil diedit');
        return redirect()->route('hero.index');
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
