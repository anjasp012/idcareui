@extends('layouts.app')

@section('title', 'Reseacrh Paper Srchives | IdCARE.UI')

@section('content')
    <div class="pages-content pages-berita">
        <div class="section-header"
            style="background: url('{{ $data->bg_header != null ? 'storage/images/bg_page/' . $data->bg_header : asset('idcare/images/bg/berita.jpg') }}');">
            <div class="bg-overlay"></div>
            <div class="container">
                <h1 class="pages-title">Riset/Laporan</h1>
            </div>
        </div>
        <div class="idcare-breadcrumbs">
            <div class="container">
                <div class="idcare-breadcrumbs-item">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to idCARE." href="/index.html"
                            class="home">idCARE</a>
                    </span>
                    <span>
                        &gt;
                    </span>
                    <span property="itemListElement" typeof="ListItem" class="current-item">
                        Riset/Laporan
                    </span>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach ($riset as $item)
                            <div class="berita-wrapper">
                                <div class="berita-head">
                                    <span class="berita-date">
                                        <a href="#">21/12/2023</a>
                                    </span>
                                    <h3 class="berita-title">
                                        <a href="{{ route('detailRiset', $item->slug) }}">{{ $item->judul }}</a>
                                    </h3>
                                </div>
                                <div class="berita-content">
                                    Detail Penulis {{ $item->penulis }} Judul {{ $item->judul }} Publikasi
                                    {{ $item->publikasi }} Volume {{ $item->volume }} Halaman {{ $item->halaman }} Tahun
                                    {{ $item->tahun }} Penerbit {{ $item->penerbit }}

                                    <div class="clear"></div>
                                    <a href="{{ route('detailRiset', $item->slug) }}"
                                        class="btn btn-lg btn-dark rounded-0 btn-berita-readmore">Read
                                        More</a>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    </div>
@endsection
