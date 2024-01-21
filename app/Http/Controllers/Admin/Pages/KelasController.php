<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Jadwal Kelas & Cara Registrasi',
            'data' => Pages::findOrFail(8),
        ];
        return view('admin.pages.kelas.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Jadwal Kelas & Cara Registrasi',
            'data' => Pages::findOrFail(8),
        ];
        return view('admin.pages.kelas.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(8)->update($inputValues);
        return redirect(route('admin.pages.kelas.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "kelas-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(8)->update($inputValues);
        return redirect(route('admin.pages.kelas.index'));
    }
}
