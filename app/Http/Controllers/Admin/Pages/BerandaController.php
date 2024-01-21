<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaraRegistrasiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Cara Registrasi',
            'data' => Pages::findOrFail(10),
        ];
        return view('admin.pages.cara-registrasi.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Cara Registrasi',
            'data' => Pages::findOrFail(10),
        ];
        return view('admin.pages.cara-registrasi.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(10)->update($inputValues);
        return redirect(route('admin.pages.cara-registrasi.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "cara-registrasi-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(10)->update($inputValues);
        return redirect(route('admin.pages.cara-registrasi.index'));
    }
}
