<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Subject pelatihan',
            'data' => Pages::findOrFail(6),
        ];
        return view('admin.pages.mata-kuliah.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Subject pelatihan',
            'data' => Pages::findOrFail(6),
        ];
        return view('admin.pages.mata-kuliah.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(6)->update($inputValues);
        return redirect(route('admin.pages.subject-pelatihan.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "mata-kuliah-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(6)->update($inputValues);
        return redirect(route('admin.pages.subject-pelatihan.index'));
    }
}
