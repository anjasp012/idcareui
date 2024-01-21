<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KlasterController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Klaster',
            'data' => Pages::findOrFail(4),
        ];
        return view('admin.pages.klaster.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Klaster',
            'data' => Pages::findOrFail(4),
        ];
        return view('admin.pages.klaster.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(4)->update($inputValues);
        return redirect(route('admin.pages.klaster.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "klaster-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(4)->update($inputValues);
        return redirect(route('admin.pages.klaster.index'));
    }
}
