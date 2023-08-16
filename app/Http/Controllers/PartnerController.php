<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{

    public function index()
    {
        $partner = Partner::all();
        $total = Partner::all()->count();
        return view('admin.module.partner.index', compact(['partner', 'total']));
    }

    public function create(Request $request)
    {
        $partner = Partner::first();
        $readonlySectionTitle = false;
        if ($partner) {
            $readonlySectionTitle = true;
        }
        return view('admin.module.partner.create', compact(['readonlySectionTitle']));
    }

    public function store( Request $request )
    {
        $tambahPartner = Partner::create($request->all());

        if ( $request -> hasFile("logo") ) {
            $request -> file("logo")->move("image/partner", $request->file("logo")->getClientOriginalName());
            $tambahPartner -> logo = $request -> file("logo")->getClientOriginalName();
            $tambahPartner -> save();
        }

        $tambahPartner->save();
        return redirect('/admin/partner')->with('addPartner', 'Partner berhasil ditambah');
    }

    public function edit($id, Request $request)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.module.partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $updatePartner = Partner::findOrFail($id);
        $updatePartner->update($request->all());

        if ( $request -> hasFile("logo") ) {
            $request -> file("logo")->move("image/partner", $request->file("logo")->getClientOriginalName());
            $updatePartner -> logo = $request -> file("logo")->getClientOriginalName();
            $updatePartner -> save();
        }

        return redirect('/admin/partner')->with('editPartner', 'Edit partner berhasil dilakukan');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->deleteGambar();
        $partner->delete();
        session()->put('success', 'Data Berhasil dihapus');
        return redirect()->route('partner.index');
    }
}
