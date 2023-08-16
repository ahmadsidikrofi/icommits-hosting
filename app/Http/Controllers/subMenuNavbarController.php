<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Promo;
use App\Models\MenuNavbar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubMenuNavbar;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class subMenuNavbarController extends Controller
{
    public function viewPageSubMenu( $slug, MenuNavbar $menuNavbar )
    {
        $submenu = SubMenuNavbar::orderBy('urutan', 'asc')->where('id_menu_navbar', $menuNavbar->id)->get();
        $submenuCount = SubMenuNavbar::where('id_menu_navbar', $menuNavbar->id)->count();
        $menuNavbar = MenuNavbar::where('slug', $slug)->first();
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
        $submenu->slug = Str::slug($request->nama_sub_menu);
        $submenu->link = $request->link ."/". $submenu->slug;
        $submenu->deskripsi = $request->deskripsi;
        $submenu->urutan = $submenuCount + 1;
        $submenu->save();
        DB::commit();

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/", $request->file("image")->getClientOriginalName());
            $submenu -> image = $request -> file("image")->getClientOriginalName();
            $submenu -> save();
        }

        session()->put('success', 'Data Berhasil ditambahkan');
        return redirect()->back()->with('addSubMenu', 'SubMenu berhasil ditambah');
    }

    public function viewPageEditSubMenu($slug)
    {
        $subMenu = SubMenuNavbar::where('slug', $slug)->first();
        return view('admin.subMenuNavbar.editSubMenu', compact('subMenu'));
    }

    public function editSubMenuStore( $slug, Request $request )
    {
        $editSubMenu = SubMenuNavbar::where('slug', $slug)->first();
        if (!$editSubMenu) {
            return redirect()->back()->with('error', 'Data sub menu tidak ditemukan.');
        }
        $request->validate([
            'nama_sub_menu' => [
                'required',
                'string',
                'regex:/^\w+( +\w+)+$/', // Regex untuk minimal 2 kata
                Rule::unique('tb_menu_submenu')->ignore($editSubMenu->id), // Pastikan nama_sub_menu unik kecuali untuk data saat ini
            ],
        ]);

        $editSubMenu->nama_sub_menu = $request->nama_sub_menu;
        $editSubMenu->slug = Str::slug($request->nama_sub_menu);
        $editSubMenu->link = $request->link ."/". $editSubMenu->slug;
        $editSubMenu->deskripsi = $request->deskripsi;
        $editSubMenu->image = $request->image;
        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/", $request->file("image")->getClientOriginalName());
            $editSubMenu -> image = $request -> file("image")->getClientOriginalName();
        }
        $editSubMenu->save();
        return redirect('/admin/edit/submenu/' . $editSubMenu->slug)->with('editSubMenu', 'Sub menu berhasil diubah');
    }

    public function hapusSubMenu ($id){
        $subMenu = SubMenuNavbar::where('id', $id)->first()->delete();
        return redirect('/admin/menu-navbar');
    }

    public function deleteSubMenuStore( $slug )
    {
        $subMenu = SubMenuNavbar::where('slug', $slug)->first();
        $subMenu->delete();
        $hapusPromo = Promo::where('id_submenu_navbar', $subMenu->id)->delete();
        $hapusHero = Hero::where('id_submenu_navbar', $subMenu->id)->delete();
        return redirect()->back();
    }
}
