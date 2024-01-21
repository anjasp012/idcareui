@extends('layouts.app')

@section('title', 'Klaster | IdCARE.UI')

@section('content')
    <div class="pages-content pages-kontak">
        <div class="section-header"
            style="background: url('{{ $data->bg_header != null ? 'storage/images/bg_page/' . $data->bg_header : asset('idcare/images/bg/berita.jpg') }}');">
            <div class="bg-overlay"></div>
            <div class="container">
                <h1 class="pages-title">{{ $data->title }}</h1>
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
                        {{ $data->title }}
                    </span>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-5">
                            <div class="ckeditor">
                                {!! $data->content !!}
                            </div>
                        </div>
                        @foreach ($klaster as $item)
                            <div class="row g-5 mb-5">
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/images/klaster/' . $item->photo) }}" class="w-100 shadow"
                                        alt="">
                                </div>
                                <div class="col-md-9">
                                    <h2><strong>{{ $item->name }}</strong></h2>
                                    <h3>{{ $item->position }}</h3>
                                    <p>
                                        {!! $item->description !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
