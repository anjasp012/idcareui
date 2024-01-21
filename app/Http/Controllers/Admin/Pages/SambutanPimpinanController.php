<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SambutanPimpinanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sambuatan Pimpinan',
            'data' => Pages::findOrFail(3),
        ];
        return view('admin.pages.sambutan-pimpinan.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Sambuatan Pimpinan',
            'data' => Pages::findOrFail(3),
        ];
        return view('admin.pages.sambutan-pimpinan.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(3)->update($inputValues);
        return redirect(route('admin.pages.sambutan-pimpinan.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "sambutan-pimpinan-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(3)->update($inputValues);
        return redirect(route('admin.pages.sambutan-pimpinan.index'));
    }
}
