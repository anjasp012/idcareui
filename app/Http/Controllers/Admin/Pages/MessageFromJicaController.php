<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageFromJicaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'JICA Sebagai Partner',
            'data' => Pages::findOrFail(5),
        ];
        return view('admin.pages.message-from-jica.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'JICA Sebagai Partner',
            'data' => Pages::findOrFail(5),
        ];
        return view('admin.pages.message-from-jica.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(5)->update($inputValues);
        return redirect(route('admin.pages.message-from-jica.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "message-from-jica-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(5)->update($inputValues);
        return redirect(route('admin.pages.message-from-jica.index'));
    }
}
