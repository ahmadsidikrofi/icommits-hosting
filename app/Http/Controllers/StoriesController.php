<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Stories;
use App\Models\MenuNavbar;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\StoriesSection;
use App\Models\KategoriStories;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

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
            $image = $request -> file("image")->move("image/blog", $request->file("image")->getClientOriginalName());
            $createStories -> image = $request -> file("image")->getClientOriginalName();
            $createStories -> save();
            $createStories = Image::make($image)->resize(680, 450);
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
        $editStories = StoriesSection::where('slug', $slug)->first();
        $editStories->update($request->except('kategori'));
        if ($request->kategori) {
            $editStories->kategori()->sync($request->kategori);
        }
        if ( $request -> hasFile("image") ) {
            $image = $request -> file("image")->move("image/blog", $request->file("image")->getClientOriginalName());
            $editStories -> image = $request -> file("image")->getClientOriginalName();
            $editStories -> save();
            $editStories = Image::make($image)->resize(680, 450);
            $editStories -> save();
        }
        return redirect('/admin/stories-section');
    }

    public function DestroyStories( $slug )
    {
        $destroyStories = StoriesSection::where('slug', $slug)->first()->delete();
        return redirect('/admin/stories-section');
    }

    public function showStories( Request $request )
    {
        $kategori = KategoriStories::all()->take(4);
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $stories = StoriesSection::latest()->get();
        if ( $request->has('kategori') ) {
            $stories = StoriesSection::whereHas('kategori', function($query) use ($request) {
                $query->where('kategori.slug', $request->kategori);
            })->get();
        } else {
            $stories = StoriesSection::latest()->get();
        }
        Carbon::setLocale('id');
        foreach ($stories as $story) {
            $story->formatted_created_at = Carbon::parse($story->created_at)->isoFormat('MMMM DD, YYYY');
        }
        return view('stories', compact(['menuNavbar', 'subMenuNavbar', 'stories', 'kategori']));
    }

    function showDetailStories( $slug )
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $storiesDetail = StoriesSection::where('slug', $slug)->first();
        $related_category = $storiesDetail->kategori()->get();
        $related_stories = StoriesSection::whereHas('kategori', function($query) use ($related_category) {
            $query->whereIn('kategori.id', $related_category->pluck('id'));
        })
        ->where('tb_stories.id', '!=', $storiesDetail->id)
        ->get();
        return view('detailStories', compact(['menuNavbar', 'subMenuNavbar', 'storiesDetail', 'related_category', 'related_stories']));
    }

}
