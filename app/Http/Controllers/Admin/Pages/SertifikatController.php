<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SertifikatController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sertifikat',
            'data' => Pages::findOrFail(7),
        ];
        return view('admin.pages.sertifikat.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Sertifikat',
            'data' => Pages::findOrFail(7),
        ];
        return view('admin.pages.sertifikat.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(7)->update($inputValues);
        return redirect(route('admin.pages.sertifikat.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "sertifikat-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(7)->update($inputValues);
        return redirect(route('admin.pages.sertifikat.index'));
    }
}
