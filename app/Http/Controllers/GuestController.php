<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Klaster;
use App\Models\Pages;
use App\Models\Risetlaporan;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $data = [
            'berita' => Post::whereCategory('news')->orderBy('created_at', 'desc')->take(4)->get(),
            'sekilas' => Pages::findOrFail(16),
            'subject' => Pages::findOrFail(6),
            'camp' => Pages::findOrFail(9),
        ];
        // dd($data);
        return view('pages.index', $data);
    }

    public function sambutan_pimpinan()
    {
        $data = [
            'data' => Pages::findOrFail(3),
        ];
        return view('pages.sambutan-pimpinan', $data);
    }

    public function sekilas()
    {
        $data = [
            'data' => Pages::findOrFail(16),
        ];
        return view('pages.sekilas', $data);
    }

    public function pendahuluan()
    {
        $data = [
            'data' => Pages::findOrFail(2),
        ];
        return view('pages.pendahuluan', $data);
    }

    public function message_from_jica()
    {
        $data = [
            'data' => Pages::findOrFail(5),
        ];
        return view('pages.message-from-jica', $data);
    }

    public function kontak()
    {
        $data = [
            'data' => Pages::findOrFail(15),
        ];
        // dd($data);
        return view('pages.kontak', $data);
    }

    public function klaster()
    {
        $data = [
            'data' => Pages::findOrFail(4),
            'klaster' => Klaster::get(),
        ];
        return view('pages.klaster', $data);
    }

    public function mataKuliah()
    {
        $data = [
            'data' => Pages::findOrFail(6),
        ];
        return view('pages.mata-kuliah', $data);
    }

    public function sertifikat()
    {
        $data = [
            'data' => Pages::findOrFail(7),
        ];
        return view('pages.sertifikat', $data);
    }

    public function kelas()
    {
        $data = [
            'data' => Pages::findOrFail(8),
        ];
        return view('pages.kelas', $data);
    }

    public function camp()
    {
        $data = [
            'data' => Pages::findOrFail(9),
        ];
        return view('pages.camp', $data);
    }

    public function caraRegistrasi()
    {
        $data = [
            'data' => Pages::findOrFail(10),
        ];
        return view('pages.cara-registrasi', $data);
    }

    public function berita()
    {
        $data = [
            'berita' => Post::where('category', 'news')->orderBy('created_at', 'desc')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(11),
        ];
        return view('pages.berita', $data);
    }

    public function riset()
    {
        $data = [
            'riset' => Risetlaporan::paginate(10),
            'data' => Pages::findOrFail(12),
        ];
        return view('pages.riset', $data);
    }

    public function acara()
    {
        $data = [
            'berita' => Post::where('category', 'articles')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(14),
        ];
        return view('pages.acara', $data);
    }

    public function detailRiset($slug)
    {
        $data = [
            'title' => 'Riset/Laporan',
            'data' => Risetlaporan::whereSlug($slug)->first(),
        ];
        return view('pages.detail-riset', $data);
    }

    public function detailBerita($slug)
    {
        $data = [
            'title' => 'Berita',
            'data' => Post::whereSlug($slug)->first(),
        ];
        return view('pages.detail-berita', $data);
    }
    public function detailAcara($slug)
    {
        $data = [
            'title' => 'Acara',
            'data' => Post::whereSlug($slug)->first(),
        ];
        return view('pages.detail-acara', $data);
    }

    public function openCourseware()
    {
        $data = [
            'berita' => Post::where('category', 'videos')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(13),
        ];
        return view('pages.courseware', $data);
    }

    public function detailOpenCourseware($slug)
    {
        $data = [
            'title' => 'Open Courseware',
            'data' => Post::whereSlug($slug)->first(),
        ];
        return view('pages.detail-course', $data);
    }

    public function class()
    {
        $data = [
            'class' => Post::where('category', 'class')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(13),
        ];
        return view('pages.class', $data);
    }

    public function detailClass($slug)
    {
        $data = [
            'title' => 'Class',
            'data' => Post::whereSlug($slug)->first(),
        ];
        return view('pages.detail-class', $data);
    }
}
