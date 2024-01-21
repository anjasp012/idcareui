<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OpenCoursewareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Open Courseware',
            'data' => Post::where('category', 'videos')->get(),
        ];

        return view('admin.pages.opencourseware.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Open Courseware',
        ];

        return view('admin.pages.opencourseware.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);

        $inputValues['slug'] = Str::slug($request->title);
        $inputValues['category'] = 'videos';


        Post::create($inputValues);

        return redirect(route('admin.pages.opencourseware.index'));
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
            'title' => 'Open Courseware',
            'data' => Post::find($id),
        ];

        return view('admin.pages.opencourseware.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $opencourseware = Post::find($id);
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $foto = "opencourseware-" . Str::random(10) . '.' . $request->file('thumbnail')->extension();
            $request->file('thumbnail')->storeAs('public/images/opencourseware/', $foto);
            $inputValues['thumbnail'] = $foto;
            $inputValues['slug'] = Str::slug($request->title);
        }



        $opencourseware->update($inputValues);

        return redirect(route('admin.pages.opencourseware.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $opencourseware  = Post::findOrFail($id);
        Storage::delete('public/images/opencourseware/' . $opencourseware->thumbnail);
        $opencourseware->delete();
        return redirect(route('admin.pages.opencourseware.index'));
    }
}
