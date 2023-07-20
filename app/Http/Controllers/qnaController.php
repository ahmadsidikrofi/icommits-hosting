<?php

namespace App\Http\Controllers;
use App\Models\Qna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class qnaController extends Controller
{
    public function index()
    {
        $pertanyaan = Qna::all();
        return view('admin.qna.index', compact('pertanyaan'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            session()->put('danger', 'Data yang anda input tidak valid, silahkan di ulang');
            return back()->withErrors($validation)->withInput();
        }
        $pertanyan = Qna::findOrFail($id);
        $pertanyan->pertanyaan = $request->pertanyaan;
        $pertanyan->jawaban = $request->jawaban;
        $pertanyan->save();
        session()->put('success', 'Data Berhasil Di Simpan');
        return redirect('admin/qna');
    }
}
