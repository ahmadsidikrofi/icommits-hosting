<?php

namespace App\Http\Controllers;

use App\Models\KategoriStories;
use Illuminate\Http\Request;

class KategoriStoriesController extends Controller
{
    public function viewPageKategoriStories( )
    {
        $daftarKategori = KategoriStories::all();
        return view('admin.module.stories.kategori.storiesKategori', compact(['daftarKategori']));
    }

    function CreateKategoriStoriesStore( Request $request )
    {
        $validate = $request->validate([
            'nama_kategori' => 'required|unique:kategori|max:100',
        ]);
        $addKategori = KategoriStories::create($request->all());
        return redirect()->back();
    }

    public function ViewPageEditKategoriStories( $slug )
    {
        $editKategori = KategoriStories::where('slug', $slug)->first();
        return view('admin.module.stories.kategori.editStoriesKategori',compact(['editKategori']));
    }

    public function EditKategoriStoriesStore( $slug, Request $request )
    {
        $validate = $request->validate([
            'nama_kategori' => 'required|unique:kategori|max:100',
        ]);
        $editKategori = KategoriStories::where('slug', $slug)->first();
        $editKategori->slug = NULL;
        $editKategori->update($request->all());
        return redirect('/admin/kategori-stories')->with('berhasilEdit_kategori', 'Genre berhasil diedit');
    }

    public function DestroyKategoriStoriesStore($slug)
    {
        $destroyKategori = KategoriStories::where('slug', $slug)->first()->delete();
        return redirect('/admin/kategori-stories');
    }
}
