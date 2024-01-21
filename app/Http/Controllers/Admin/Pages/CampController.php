<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Camp',
            'data' => Pages::findOrFail(9),
        ];
        return view('admin.pages.camp.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Camp',
            'data' => Pages::findOrFail(9),
        ];
        return view('admin.pages.camp.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(9)->update($inputValues);
        return redirect(route('admin.pages.camp.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "camp-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(9)->update($inputValues);
        return redirect(route('admin.pages.camp.index'));
    }
}
