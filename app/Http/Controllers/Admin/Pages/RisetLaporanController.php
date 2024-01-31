<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Risetlaporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RisetLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Riset/Laporan',
            'url' => 'riset-laporan',
            'data' => Risetlaporan::all(),
        ];

        return view('admin.pages.riset-laporan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Riset/Laporan',
            'url' => 'riset-laporan',
        ];

        return view('admin.pages.riset-laporan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputValues = $request->validate([
            'penulis' => 'required',
            'judul' => 'required',
            'publikasi' => 'nullable',
            'volume' => 'nullable',
            'nomor' => 'nullable',
            'halaman' => 'nullable',
            'tahun' => 'nullable',
            'penerbit' => 'nullable',
            'file' => 'nullable|mimes:pdf',
        ]);

        // dd($request->file('file')->get);

        if ($request->hasFile('file')) {
            $file = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/riset/', $file);
            $inputValues['file'] = $file;
        }
        $inputValues['slug'] = Str::slug($request->judul);


        Risetlaporan::create($inputValues);

        return redirect(route('admin.pages.riset-laporan.index'));
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
            'title' => 'Riset/Laporan',
            'url' => 'riset-laporan',
            'data' => Risetlaporan::find($id),
        ];

        return view('admin.pages.riset-laporan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $riset = Risetlaporan::find($id);
        $inputValues = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('file')) {
            Storage::delete('public/riset/' . $riset->file);
            $file = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/riset/', $file);
            $inputValues['file'] = $file;
        }



        $riset->update($inputValues);

        return redirect(route('admin.pages.riset-laporan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $riset  = Risetlaporan::findOrFail($id);
        Storage::delete('public/riset/' . $riset->file);
        $riset->delete();
        return redirect(route('admin.pages.riset-laporan.index'));
    }
}
