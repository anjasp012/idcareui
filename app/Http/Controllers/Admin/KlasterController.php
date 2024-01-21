<?php

namespace App\Http\Controllers\Admin;

use App\Models\Klaster;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KlasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Klaster',
            'data' => Klaster::all(),
        ];

        return view('admin.klaster.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Klaster',
        ];

        return view('admin.klaster.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputValues = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'position' => 'required',
            'photo' => 'required',
        ]);

        $foto = "klaster-" . Str::random(10) . '.' . $request->file('photo')->extension();
        $request->file('photo')->storeAs('public/images/klaster/', $foto);
        $inputValues['photo'] = $foto;


        Klaster::create($inputValues);

        return redirect(route('admin.klaster.index'));
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
            'title' => 'Klaster',
            'item' => Klaster::find($id),
        ];

        return view('admin.klaster.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $klaster = Klaster::find($id);
        $inputValues = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'position' => 'required',
            // 'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $foto = "klaster-" . Str::random(10) . '.' . $request->file('photo')->extension();
            $request->file('photo')->storeAs('public/images/klaster/', $foto);
            $inputValues['photo'] = $foto;
        }

        $klaster->update($inputValues);

        return redirect(route('admin.klaster.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Klaster::find($id)->delete();
        return back();
    }
}
