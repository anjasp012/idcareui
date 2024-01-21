<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lampiran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Acara',
            'data' => Post::where('category', 'articles')->get(),
        ];

        return view('admin.pages.acara.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Acara',
        ];

        return view('admin.pages.acara.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'thumbnail' => 'required',
            'status' => 'required',
        ]);

        $foto = "acara-" . Str::random(10) . '.' . $request->file('thumbnail')->extension();
        $request->file('thumbnail')->storeAs('public/images/acara/', $foto);
        $inputValues['thumbnail'] = $foto;
        $inputValues['slug'] = Str::slug($request->title);
        $inputValues['category'] = 'articles';

        Post::create($inputValues);

        return redirect(route('admin.pages.acara.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Acara',
            'data' => Post::find($id),
        ];

        return view('admin.pages.acara.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $acara = Post::find($id);
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $foto = "acara-" . Str::random(10) . '.' . $request->file('thumbnail')->extension();
            $request->file('thumbnail')->storeAs('public/images/acara/', $foto);
            $inputValues['thumbnail'] = $foto;
            $inputValues['slug'] = Str::slug($request->title);
        }



        $acara->update($inputValues);

        return redirect(route('admin.pages.acara.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $acara  = Post::findOrFail($id);
        Storage::delete('public/images/acara/' . $acara->thumbnail);
        $acara->delete();
        return redirect(route('admin.pages.acara.index'));
    }
}
