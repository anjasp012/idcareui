<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Klaster;
use App\Models\Pages;
use App\Models\Risetlaporan;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $data = [
            'berita' => $berita = Post::whereCategory('news')->orderBy('created_at', 'desc')->take(4)->get(),
            'sekilas' => Pages::findOrFail(16),
            'subject' => Pages::findOrFail(6),
            'camp' => Pages::findOrFail(9),
        ];
        // dd($data);
        SEOMeta::setTitle('beranda');
        SEOMeta::setDescription(strip_tags('Sejak tanggal 20 Februari 2020 dengan dukungan Kerjasama Universitas Indonesia dengan JICA berdasarkan Intergovernmental Agreement antara Indonesia dan Jepang, di Fakultas Teknik Universitas Indonesia, didirikan Indonesia Cyber Awareness and Resilience Center, Universitas Indonesia (idCARE.UI).'));
        SEOMeta::setCanonical(route('beranda'));
        OpenGraph::setDescription(strip_tags('Sejak tanggal 20 Februari 2020 dengan dukungan Kerjasama Universitas Indonesia dengan JICA berdasarkan Intergovernmental Agreement antara Indonesia dan Jepang, di Fakultas Teknik Universitas Indonesia, didirikan Indonesia Cyber Awareness and Resilience Center, Universitas Indonesia (idCARE.UI).'));
        OpenGraph::setTitle('beranda');
        OpenGraph::setUrl(route('beranda'));
        TwitterCard::setTitle('beranda');
        return view('pages.index', $data);
    }

    public function sambutan_pimpinan()
    {
        $data = [
            'data' => Pages::findOrFail(3),
        ];
        SEOMeta::setTitle('sambutan pimpinan');
        SEOMeta::setDescription(strip_tags('sambutan pimpinan'));
        SEOMeta::setCanonical(route('sambutan_pimpinan'));
        OpenGraph::setDescription(strip_tags('sambutan pimpinan'));
        OpenGraph::setTitle('sambutan pimpinan');
        OpenGraph::setUrl(route('sambutan_pimpinan'));
        TwitterCard::setTitle('sambutan pimpinan');
        return view('pages.sambutan-pimpinan', $data);
    }

    public function sekilas()
    {
        $data = [
            'data' => Pages::findOrFail(16),
        ];
        SEOMeta::setTitle('sekilas idcare.ui');
        SEOMeta::setDescription(strip_tags('sekilas idcare.ui'));
        SEOMeta::setCanonical(route('sekilas'));
        OpenGraph::setDescription(strip_tags('sekilas idcare.ui'));
        OpenGraph::setTitle('sekilas idcare.ui');
        OpenGraph::setUrl(route('sekilas'));
        TwitterCard::setTitle('sekilas idcare.ui');
        return view('pages.sekilas', $data);
    }

    public function pendahuluan()
    {
        $data = [
            'data' => Pages::findOrFail(2),
        ];
        SEOMeta::setTitle('pendahuluan');
        SEOMeta::setDescription(strip_tags('pendahuluan'));
        SEOMeta::setCanonical(route('pendahuluan'));
        OpenGraph::setDescription(strip_tags('pendahuluan'));
        OpenGraph::setTitle('pendahuluan');
        OpenGraph::setUrl(route('pendahuluan'));
        TwitterCard::setTitle('pendahuluan');
        return view('pages.pendahuluan', $data);
    }

    public function message_from_jica()
    {
        $data = [
            'data' => Pages::findOrFail(5),
        ];
        SEOMeta::setTitle('message from jica');
        SEOMeta::setDescription(strip_tags('message from jica'));
        SEOMeta::setCanonical(route('message_from_jica'));
        OpenGraph::setDescription(strip_tags('message from jica'));
        OpenGraph::setTitle('message from jica');
        OpenGraph::setUrl(route('message_from_jica'));
        TwitterCard::setTitle('message from jica');
        return view('pages.message-from-jica', $data);
    }

    public function kontak()
    {
        $data = [
            'data' => Pages::findOrFail(15),
        ];
        SEOMeta::setTitle('kontak');
        SEOMeta::setDescription(strip_tags('kontak'));
        SEOMeta::setCanonical(route('kontak'));
        OpenGraph::setDescription(strip_tags('kontak'));
        OpenGraph::setTitle('kontak');
        OpenGraph::setUrl(route('kontak'));
        TwitterCard::setTitle('kontak');
        return view('pages.kontak', $data);
    }

    public function klaster()
    {
        $data = [
            'data' => Pages::findOrFail(4),
            'klaster' => Klaster::get(),
        ];
        SEOMeta::setTitle('klaster');
        SEOMeta::setDescription(strip_tags('klaster'));
        SEOMeta::setCanonical(route('klaster'));
        OpenGraph::setDescription(strip_tags('klaster'));
        OpenGraph::setTitle('klaster');
        OpenGraph::setUrl(route('klaster'));
        OpenGraph::addProperty('type', 'news');
        TwitterCard::setTitle('klaster');
        return view('pages.klaster', $data);
    }

    public function mataKuliah()
    {
        $data = [
            'data' => Pages::findOrFail(6),
        ];
        SEOMeta::setTitle('mata kuliah');
        SEOMeta::setDescription(strip_tags('mata kuliah'));
        SEOMeta::setCanonical(route('mata kuliah'));
        OpenGraph::setDescription(strip_tags('mata kuliah'));
        OpenGraph::setTitle('mata kuliah');
        OpenGraph::setUrl(route('mata kuliah'));
        TwitterCard::setTitle('mata kuliah');
        return view('pages.mata-kuliah', $data);
    }

    public function sertifikat()
    {
        $data = [
            'data' => Pages::findOrFail(7),
        ];
        SEOMeta::setTitle('sertifikat');
        SEOMeta::setDescription(strip_tags('sertifikat'));
        SEOMeta::setCanonical(route('sertifikat'));
        OpenGraph::setDescription(strip_tags('sertifikat'));
        OpenGraph::setTitle('sertifikat');
        OpenGraph::setUrl(route('sertifikat'));
        TwitterCard::setTitle('sertifikat');
        return view('pages.sertifikat', $data);
    }

    public function kelas()
    {
        $data = [
            'data' => Pages::findOrFail(8),
        ];
        SEOMeta::setTitle('jadwal kelas & cara registrasi');
        SEOMeta::setDescription(strip_tags('jadwal kelas & cara registrasi'));
        SEOMeta::setCanonical(route('kelas'));
        OpenGraph::setDescription(strip_tags('jadwal kelas & cara registrasi'));
        OpenGraph::setTitle('jadwal kelas & cara registrasi');
        OpenGraph::setUrl(route('kelas'));
        TwitterCard::setTitle('jadwal kelas & cara registrasi');
        return view('pages.kelas', $data);
    }

    public function camp()
    {
        $data = [
            'data' => Pages::findOrFail(9),
        ];
        SEOMeta::setTitle('camp');
        SEOMeta::setDescription(strip_tags('camp'));
        SEOMeta::setCanonical(route('camp'));
        OpenGraph::setDescription(strip_tags('camp'));
        OpenGraph::setTitle('camp');
        OpenGraph::setUrl(route('camp'));
        TwitterCard::setTitle('camp');
        return view('pages.camp', $data);
    }

    public function caraRegistrasi()
    {
        $data = [
            'data' => Pages::findOrFail(10),
        ];
        SEOMeta::setTitle('cara registrasi');
        SEOMeta::setDescription(strip_tags('cara registrasi'));
        SEOMeta::setCanonical(route('cara-registrasi'));
        OpenGraph::setDescription(strip_tags('cara registrasi'));
        OpenGraph::setTitle('cara registrasi');
        OpenGraph::setUrl(route('cara-registrasi'));
        TwitterCard::setTitle('cara registrasi');
        return view('pages.cara-registrasi', $data);
    }

    public function berita()
    {
        $data = [
            'berita' => Post::where('category', 'news')->orderBy('created_at', 'desc')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(11),
        ];
        SEOMeta::setTitle('berita');
        SEOMeta::setDescription(strip_tags('daftar berita'));
        SEOMeta::setCanonical(route('berita'));
        OpenGraph::setDescription(strip_tags('daftar berita'));
        OpenGraph::setTitle('berita');
        OpenGraph::setUrl(route('berita'));
        TwitterCard::setTitle('berita');
        return view('pages.berita', $data);
    }

    public function riset()
    {
        $data = [
            'riset' => Risetlaporan::paginate(10),
            'data' => Pages::findOrFail(12),
        ];
        SEOMeta::setTitle('riset/laporan');
        SEOMeta::setDescription(strip_tags('riset/laporan'));
        SEOMeta::setCanonical(route('riset'));
        OpenGraph::setDescription(strip_tags('riset/laporan'));
        OpenGraph::setTitle('riset/laporan');
        OpenGraph::setUrl(route('riset'));
        TwitterCard::setTitle('riset/laporan');
        return view('pages.riset', $data);
    }

    public function acara()
    {
        $data = [
            'berita' => Post::where('category', 'articles')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(14),
        ];
        SEOMeta::setTitle('acara');
        SEOMeta::setDescription(strip_tags('daftar acara'));
        SEOMeta::setCanonical(route('acara'));
        OpenGraph::setDescription(strip_tags('daftar acara'));
        OpenGraph::setTitle('acara');
        OpenGraph::setUrl(route('acara'));
        TwitterCard::setTitle('acara');
        return view('pages.acara', $data);
    }

    public function detailRiset($slug)
    {
        $data = [
            'title' => 'Riset/Laporan',
            'data' => $riset = Risetlaporan::whereSlug($slug)->first(),
        ];
        SEOMeta::setTitle($riset->judul);
        SEOMeta::setDescription(strip_tags($riset->judul));
        SEOMeta::setCanonical(route('detailRiset', $riset->slug));
        OpenGraph::setDescription(strip_tags($riset->judul));
        OpenGraph::setTitle($riset->judul);
        OpenGraph::setUrl(route('detailRiset', $riset->slug));
        TwitterCard::setTitle($riset->judul);
        return view('pages.detail-riset', $data);
    }

    public function detailBerita($slug)
    {
        $data = [
            'title' => 'Berita',
            'data' => $berita = Post::whereSlug($slug)->first(),
        ];
        SEOMeta::setTitle($berita->title);
        SEOMeta::setDescription(strip_tags($berita->body));
        SEOMeta::setCanonical(route('detailBerita', $berita->slug));
        OpenGraph::setDescription(strip_tags($berita->body));
        OpenGraph::setTitle($berita->title);
        OpenGraph::setUrl(route('detailBerita', $berita->slug));
        TwitterCard::setTitle($berita->title);
        return view('pages.detail-berita', $data);
    }
    public function detailAcara($slug)
    {
        $data = [
            'title' => 'Acara',
            'data' => $acara = Post::whereSlug($slug)->first(),
        ];
        SEOMeta::setTitle($acara->title);
        SEOMeta::setDescription(strip_tags($acara->body));
        SEOMeta::setCanonical(route('detailAcara', $acara->slug));
        OpenGraph::setDescription(strip_tags($acara->body));
        OpenGraph::setTitle($acara->title);
        OpenGraph::setUrl(route('detailAcara', $acara->slug));
        TwitterCard::setTitle($acara->title);
        return view('pages.detail-acara', $data);
    }

    public function openCourseware()
    {
        $data = [
            'berita' => Post::where('category', 'videos')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(13),
        ];
        SEOMeta::setTitle('open courseware');
        SEOMeta::setDescription(strip_tags('open courseware'));
        SEOMeta::setCanonical(route('openCourseware'));
        OpenGraph::setDescription(strip_tags('open courseware'));
        OpenGraph::setTitle('open courseware');
        OpenGraph::setUrl(route('openCourseware'));
        TwitterCard::setTitle('open courseware');
        return view('pages.courseware', $data);
    }

    public function detailOpenCourseware($slug)
    {
        $data = [
            'title' => 'Open Courseware',
            'data' => $courseware = Post::whereSlug($slug)->first(),
        ];
        SEOMeta::setTitle($courseware->title);
        SEOMeta::setDescription(strip_tags($courseware->body));
        SEOMeta::setCanonical(route('detailOpenCourseware', $courseware->slug));
        OpenGraph::setDescription(strip_tags($courseware->body));
        OpenGraph::setTitle($courseware->title);
        OpenGraph::setUrl(route('detailOpenCourseware', $courseware->slug));
        TwitterCard::setTitle($courseware->title);
        return view('pages.detail-course', $data);
    }

    public function class()
    {
        $data = [
            'class' => Post::where('category', 'class')->whereStatus('publish')->paginate(10),
            'data' => Pages::findOrFail(13),
        ];
        SEOMeta::setTitle('class');
        SEOMeta::setDescription(strip_tags('class'));
        SEOMeta::setCanonical(route('class'));
        OpenGraph::setDescription(strip_tags('class'));
        OpenGraph::setTitle('class');
        OpenGraph::setUrl(route('class'));
        TwitterCard::setTitle('class');
        return view('pages.class', $data);
    }

    public function detailClass($slug)
    {
        $data = [
            'title' => 'Class',
            'data' => $class = Post::whereSlug($slug)->first(),
        ];
        SEOMeta::setTitle($class->title);
        SEOMeta::setDescription(strip_tags($class->body));
        SEOMeta::setCanonical(route('detailClass', $class->slug));
        OpenGraph::setDescription(strip_tags($class->body));
        OpenGraph::setTitle($class->title);
        OpenGraph::setUrl(route('detailClass', $class->slug));
        TwitterCard::setTitle($class->title);
        return view('pages.detail-class', $data);
    }
}
