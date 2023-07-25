<?php

namespace App\Http\Controllers;

use App\Models\MenuNavbar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class subMenuNavbarController extends Controller
{
    public function viewPageSubMenu( $id, MenuNavbar $menuNavbar )
    {
        $submenu = SubMenuNavbar::orderBy('urutan', 'asc')->where('id_menu_navbar', $menuNavbar->id)->get();
        $submenuCount = SubMenuNavbar::where('id_menu_navbar', $menuNavbar->id)->count();
        $menuNavbar = MenuNavbar::find($id);
        $ShowSubMenu = SubMenuNavbar::where('id_menu_navbar', $menuNavbar->id)->get();
        return view('admin.subMenuNavbar.showSubMenu', compact(['ShowSubMenu', 'menuNavbar', 'submenu', 'submenuCount']));
        // return view('admin.subMenuNavbar.showSubMenu', compact(['ShowSubMenu']));
    }

    public function tambahSubMenu(Request $request, MenuNavbar $menuNavbar)
    {
        $validator = Validator::make($request->all(), [
            'id_menu_navbar' => 'required',
        ]);

        if ($validator->fails()) {
            // Jika validasi gagal, kembalikan pesan error atau lakukan pengalihan
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        $submenuCount = SubMenuNavbar::where('id_menu_navbar', $request->id_menu_navbar)->count();
        $submenu = new SubMenuNavbar();
        $submenu->id_menu_navbar = $request->id_menu_navbar;
        $submenu->nama_sub_menu = $request->nama_sub_menu;
        $submenu->slug = Str::slug($request->link);
        $submenu->deskripsi = $request->deskripsi;
        $submenu->link = $request->link ."/". $submenu->slug;
        $submenu->urutan = $submenuCount + 1;
        $submenu->save();
        DB::commit();

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/", $request->file("image")->getClientOriginalName());
            $submenu -> image = $request -> file("image")->getClientOriginalName();
            $submenu -> save();
        }

        session()->put('success', 'Data Berhasil ditambahkan');
        return redirect()->back();
    }

    public function viewPageEditSubMenu($slug)
    {
        $subMenu = SubMenuNavbar::where('slug', $slug)->first();
        return view('admin.subMenuNavbar.editSubMenu', compact('subMenu'));
    }

    public function editSubMenuStore( $slug, Request $request )
    {
        $editSubMenu = SubMenuNavbar::where('slug', $slug)->first();
        $editSubMenu->update($request->all());
        return redirect()->back();
    }


    // public function tambahSubMenu(Request $request)
    // {
    //     DB::beginTransaction();
    //     SubMenuNavbar::create($request->all());
    //     DB::commit();
    //     return redirect()->back();
    // }



    // public function tambahSubMenu( Request $request)
    // {
    //     $menuNavbar = new MenuNavbar();
    //     $submenuCount = SubMenuNavbar::where('id_menu_navbar', $menuNavbar->id)->count();
    //     $relatedMenuNavbar = MenuNavbar::find($menuNavbar->id);
    //     $submenu = new SubMenuNavbar();
    //     $submenu->menu()->associate($relatedMenuNavbar);
    //     $submenu->nama_sub_menu = $request->nama_sub_menu;
    //     $submenu->slug = Str::slug($request->nama_sub_menu);
    //     $submenu->deskripsi = $request->deskripsi;
    //     $submenu->link = $request->link;
    //     $submenu->urutan = $submenuCount + 1;
    //     $submenu->save();
    //     session()->put('success', 'Data Berhasil ditambahkan');
    //     return redirect()->back();
    // }
}
