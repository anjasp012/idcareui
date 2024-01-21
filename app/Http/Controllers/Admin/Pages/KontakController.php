<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kontak',
            'data' => Pages::findOrFail(15),
        ];
        return view('admin.pages.kontak.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Kontak',
            'data' => Pages::findOrFail(15),
        ];
        return view('admin.pages.kontak.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(15)->update($inputValues);
        return redirect(route('admin.pages.kontak.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "kontak-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(15)->update($inputValues);
        return redirect(route('admin.pages.kontak.index'));
    }
}
