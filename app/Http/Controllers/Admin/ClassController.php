<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Class',
            'data' => Post::where('category', 'class')->get(),
        ];

        return view('admin.class.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Class',
        ];

        return view('admin.class.create', $data);
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

        $foto = "class-" . Str::random(10) . '.' . $request->file('thumbnail')->extension();
        $request->file('thumbnail')->storeAs('public/images/class/', $foto);
        $inputValues['thumbnail'] = $foto;
        $inputValues['slug'] = Str::slug($request->title);
        $inputValues['category'] = 'class';


        Post::create($inputValues);

        return redirect(route('admin.class.index'));
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
            'title' => 'Class',
            'data' => Post::find($id),
        ];

        return view('admin.class.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Post::find($id);
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $foto = "class-" . Str::random(10) . '.' . $request->file('thumbnail')->extension();
            $request->file('thumbnail')->storeAs('public/images/class/', $foto);
            $inputValues['thumbnail'] = $foto;
            $inputValues['slug'] = Str::slug($request->title);
        }



        $class->update($inputValues);

        return redirect(route('admin.class.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class  = Post::findOrFail($id);
        Storage::delete('public/images/class/' . $class->thumbnail);
        $class->delete();
        return redirect(route('admin.class.index'));
    }
}
