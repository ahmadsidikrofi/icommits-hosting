<?php

namespace App\Http\Controllers;

use App\Models\ModuleHostingUnlimited;
use Illuminate\Http\Request;

class ModuleHostingUnlimitedController extends Controller
{
    function viewPageHostingUnlimited()
    {
        $webHostingUnlimited = ModuleHostingUnlimited::all();
        return view('admin.module.paket_unlimited.show', compact('webHostingUnlimited'));
    }
    function viewPageAddPaketHostingUnlimited()
    {
        return view('admin.module.paket_unlimited.create');
    }

    function addPaketHostingUnlimited( Request $request )
    {
        $validate = $request->validate([
            'nama_paket' => 'required|max:100',
        ]);
        $tambahPaketHosting = ModuleHostingUnlimited::create($request->all());
        return redirect('/admin/paket-unlimited');
    }

    // public function upload(Request $request)
    // {
    //     if ($request->hasFile('upload')) {
    //         $originName = $request->file('upload')->getClientOriginalName();
    //         $fileName = pathinfo($originName, PATHINFO_FILENAME);
    //         $extension = $request->file('upload')->getClientOriginalExtension();
    //         $fileName = $fileName . '_' . time() . '.' . $extension;

    //         $request->file('upload')->move(public_path('images/artikel'), $fileName);

    //         $CKEditorFuncNum = $request->input('CKEditorFuncNum');
    //         $url = asset('images/artikel/' . $fileName);
    //         $msg = 'Image uploaded successfully';
    //         $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

    //         @header('Content-type: text/html; charset=utf-8');
    //         echo $response;
    //     }
    // }
}
