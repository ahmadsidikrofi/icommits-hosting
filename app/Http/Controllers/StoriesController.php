<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hero;
use App\Models\Stories;
use App\Models\MenuNavbar;
use App\Models\StoriesViews;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use App\Models\StoriesSection;
use App\Models\KategoriStories;
use Intervention\Image\Facades\Image;

class StoriesController extends Controller
{
    public function viewPageStoriesSection()
    {
        $showStories = StoriesSection::latest()->get();
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
        return redirect('/admin/stories-section')->with('addStories', 'Stories berhasil ditambah');
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
        return redirect('/admin/stories-section')->with('editStories', 'Edit stories berhasil dilakukan');
    }

    public function DestroyStories( $slug )
    {
        $destroyStories = StoriesSection::where('slug', $slug)->first()->delete();
        return redirect('/admin/stories-section');
    }

    public function showStories( Request $request )
    {
        $kategori = KategoriStories::all()->take(4);
        $kategories = KategoriStories::all();
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $stories = StoriesSection::latest();
        if ( $request->kategori ) {
            $stories = StoriesSection::whereHas('kategori', function($query) use ($request) {
                $query->where('kategori.slug', $request->kategori);
            });
        } elseif ( $request->search ) {
            $stories = $stories->filter(['search' => $request->search]);
        }
        $stories = $stories->get();
        Carbon::setLocale('id');
        foreach ($stories as $story) {
            $story->formatted_created_at = Carbon::parse($story->created_at)->isoFormat('MMMM DD, YYYY');
        }
        return view('stories', compact(['menuNavbar', 'subMenuNavbar', 'stories', 'kategori', 'kategories']));
    }

    function showDetailStories( $slug )
    {
        $menuNavbar = MenuNavbar::all();
        $subMenuNavbar = SubMenuNavbar::all();
        $kategories = KategoriStories::all();
        $storiesDetail = StoriesSection::where('slug', $slug)->first();
        $storiesDetail->count_stories += 1;
        $storiesDetail->save();
        // $updateCount = StoriesSection::where('slug', $storiesDetail->slug)->update();
        $related_category = $storiesDetail->kategori()->get();
        $latest_stories = StoriesSection::latest()->take(6)->get();
        $related_stories = StoriesSection::whereHas('kategori', function($query) use ($related_category) {
            $query->whereIn('kategori.id', $related_category->pluck('id'));
        })
        ->where('tb_stories.id', '!=', $storiesDetail->id)
        ->get();
        foreach ($latest_stories as $latest) {
            $latest->formatted_created_at = Carbon::parse($latest->created_at)->isoFormat('MMMM DD, YYYY');
        }
        return view('detailStories', compact(['menuNavbar', 'subMenuNavbar', 'storiesDetail', 'related_category', 'related_stories', 'kategories', 'latest_stories']));
    }

}
