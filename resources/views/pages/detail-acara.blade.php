@extends('layouts.app')

@section('title')
    {{ $data->title }} | IdCARE.UI
@endsection

@section('content')
    <div class="pages-content pages-detail">
        <div class="section-header" style="background: url('{{ asset('idcare/images/bg/berita.jpg') }}');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="pages-title-wrapper">
                    <div class="pages-date">
                        <div class="date-day">{{ $data->created_at->format('d') }}</div>
                        <div class="date-month">{{ $data->created_at->format('M') }}</div>
                    </div>
                    <h1 class="pages-title">{{ $data->title }}</h1>
                </div>
            </div>
        </div>
        <div class="idcare-breadcrumbs">
            <div class="container">
                <div class="idcare-breadcrumbs-item">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to idCARE." href="/" class="home">idCARE</a>
                    </span>
                    <span>
                        &gt;
                    </span>
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to idCARE." href="{{ route('acara') }}"
                            class="home">{{ $title }}</a>
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
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <img src="{{ asset('storage/images/acara/' . $data->thumbnail) }}" class="w-100"
                                alt="idCARE.UI">
                        </div>
                        <div class="ckeditor">
                            {!! $data->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
