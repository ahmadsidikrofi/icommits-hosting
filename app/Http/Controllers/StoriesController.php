<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Stories;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\StoriesSection;
use App\Models\KategoriStories;

class StoriesController extends Controller
{
    public function viewPageStoriesSection()
    {
        $showStories = StoriesSection::all();
        return view('admin.module.stories.showStories', compact(['showStories']));
    }

    public function viewPageCreateStories()
    {
        $kategori = KategoriStories::all();
        $createStories = StoriesSection::first();
        $readonlySectionTitle = false;
        if ($createStories) {
            $readonlySectionTitle = true;
        }
        return view('admin.module.stories.createStories', compact(['kategori', 'readonlySectionTitle']));
    }

    public function CreateStoriesStore( Request $request )
    {
        $createStories = StoriesSection::create($request->except('kategori'));
        $createStories->kategori()->sync($request->kategori);
        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/blog", $request->file("image")->getClientOriginalName());
            $createStories -> image = $request -> file("image")->getClientOriginalName();
            $createStories -> save();
        }
        return redirect('/admin/stories-section');
    }

    public function viewPageEditStories( $slug )
    {
        $editStories = StoriesSection::where('slug', $slug)->first();
        $kategoriStories = KategoriStories::all();
        return view('admin.module.stories.editStories', compact(['editStories', 'kategoriStories']));
    }

    public function EditStoriesStore( $slug, Request $request )
    {
        $createStories = StoriesSection::where('slug', $slug)->first();
        $createStories->update($request->except('kategori'));
        if ($request->kategori) {
            $createStories->kategori()->sync($request->kategori);
        }
        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/blog", $request->file("image")->getClientOriginalName());
            $createStories -> image = $request -> file("image")->getClientOriginalName();
            $createStories -> save();
        }
        return redirect('/admin/stories-section');
    }

    public function DestroyStories( $slug )
    {
        $createStories = StoriesSection::where('slug', $slug)->first()->delete();
        return redirect('/admin/stories-section');
    }

    public function showStories()
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $stories = StoriesSection::all();
        // $menu = MenuNavbar::where('slug', $slug)->first();
        // if ($menu) {
        //     $hero = Hero::where('id_menu_navbar', $menu->id)->firstOrFail();
        // } else {
        //     // Cari data Hero berdasarkan slug dari SubMenuNavbar
        //     $subMenu = SubMenuNavbar::where('slug', $slug)->firstOrFail();
        //     $hero = Hero::where('id_submenu_navbar', $subMenu->id)->firstOrFail();
        // }
        return view('stories', compact(['menuNavbar', 'subMenuNavbar', 'stories']));
    }

    function showDetailStories( $slug )
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $storiesDetail = StoriesSection::where('slug', $slug)->first();
        return view('detailStories', compact(['menuNavbar', 'subMenuNavbar', 'storiesDetail']));
    }

}
