<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SekilasIdCareUiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sekilas idCARE.UI',
            'data' => Pages::findOrFail(16),
        ];
        return view('admin.pages.sekilas-idcare-ui.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Sekilas idCARE.UI',
            'data' => Pages::findOrFail(16),
        ];
        return view('admin.pages.sekilas-idcare-ui.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(16)->update($inputValues);
        return redirect(route('admin.pages.sekilas-idcare-ui.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "sekilas-idcareui-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(16)->update($inputValues);
        return redirect(route('admin.pages.sekilas-idcare-ui.index'));
    }
}
