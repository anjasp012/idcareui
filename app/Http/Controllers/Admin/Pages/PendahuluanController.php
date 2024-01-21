<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Pages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendahuluanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pendahuluan',
            'data' => Pages::findOrFail(2),
        ];
        return view('admin.pages.pendahuluan.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Pendahuluan',
            'data' => Pages::findOrFail(2),
        ];
        return view('admin.pages.pendahuluan.edit', $data);
    }

    public function update(Request $request)
    {
        $inputValues = $request->validate([
            'content' => 'required'
        ]);
        Pages::findOrFail(2)->update($inputValues);
        return redirect(route('admin.pages.pendahuluan.index'));
    }

    public function updateBg(Request $request)
    {
        $request->validate([
            'bg_header' => 'required|image'
        ]);

        $foto = "pendahuluan-" . Str::random(10) . '.' . $request->file('bg_header')->extension();
        $request->file('bg_header')->storeAs('public/images/bg_page/', $foto);
        $inputValues['bg_header'] = $foto;


        Pages::findOrFail(2)->update($inputValues);
        return redirect(route('admin.pages.pendahuluan.index'));
    }
}
