<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Berita',
            'data' => Post::where('category', 'news')->get(),
        ];

        return view('admin.pages.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Berita',
        ];

        return view('admin.pages.berita.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            // 'thumbnail' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $foto = "berita-" . Str::random(10) . '.' . $request->file('thumbnail')->extension();
            $request->file('thumbnail')->storeAs('public/images/berita/', $foto);
            $inputValues['thumbnail'] = $foto;
        }
        $inputValues['slug'] = Str::slug($request->title);
        $inputValues['category'] = 'news';


        Post::create($inputValues);

        return redirect(route('admin.pages.berita.index'));
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
            'title' => 'Berita',
            'data' => Post::find($id),
        ];

        return view('admin.pages.berita.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Post::find($id);
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $foto = "berita-" . Str::random(10) . '.' . $request->file('thumbnail')->extension();
            $request->file('thumbnail')->storeAs('public/images/berita/', $foto);
            $inputValues['thumbnail'] = $foto;
            $inputValues['slug'] = Str::slug($request->title);
        }



        $berita->update($inputValues);

        return redirect(route('admin.pages.berita.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita  = Post::findOrFail($id);
        Storage::delete('public/images/berita/' . $berita->thumbnail);
        $berita->delete();
        return redirect(route('admin.pages.berita.index'));
    }
}
