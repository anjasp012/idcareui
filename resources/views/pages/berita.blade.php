@extends('layouts.app')

@section('title', 'Berita | IdCARE.UI')

@section('content')
    <div class="pages-content pages-berita">
        <div class="section-header"
            style="background: url('{{ $data->bg_header != null ? 'storage/images/bg_page/' . $data->bg_header : asset('idcare/images/bg/berita.jpg') }}');">
            <div class="bg-overlay"></div>
            <div class="container">
                <h1 class="pages-title">Daftar Berita</h1>
            </div>
        </div>
        <div class="idcare-breadcrumbs">
            <div class="container">
                <div class="idcare-breadcrumbs-item">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to idCARE." href="{{ route('beranda') }}"
                            class="home">idCARE</a>
                    </span>
                    <span>
                        &gt;
                    </span>
                    <span property="itemListElement" typeof="ListItem" class="current-item">
                        Daftar Berita
                    </span>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach ($berita as $item)
                            <div class="berita-wrapper">
                                @if ($item->thumbnail)
                                    <div class="berita-image-wrapper">
                                        <a href="{{ route('detailBerita', $item->slug) }}">
                                            <img src="{{ asset('storage/images/berita/' . $item->thumbnail) }}"
                                                class="w-100" alt="idCARE.UI">
                                        </a>
                                    </div>
                                @endif
                                <div class="berita-head">
                                    <span class="berita-date">
                                        <a href="#">{{ date('d/m/Y', strtotime($item->created_at)) }}</a>
                                    </span>
                                    <h3 class="berita-title">
                                        <a href="{{ route('detailBerita', $item->slug) }}">{{ $item->title }}</a>
                                    </h3>
                                </div>
                                <div class="berita-content">
                                    {!! Str::limit(strip_tags($item->body), 200) !!}


                                    <div class="clear"></div>
                                    <a href="{{ route('detailBerita', $item->slug) }}"
                                        class="btn btn-lg btn-dark rounded-0 btn-berita-readmore">Read
                                        More</a>
                                </div>
                            </div>
                        @endforeach

                        <div class="d-flex justify-content-end">
                            {{ $berita->links('vendor.pagination.bootstrap-4') }}
                        </div>

                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    </div>
@endsection
