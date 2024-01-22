@extends('layouts.app')

@section('title', 'Kontak | IdCARE.UI')

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
                        <a property="item" typeof="WebPage" title="Go to idCARE." href="{{ route('beranda') }}"
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
                        <div class="mb-4">
                            <div class="ckeditor">
                                {!! $data->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('script')
        <script>
            $('.ckeditor ul').addClass('list-unstyled ms-3');
            $('.ckeditor ul li p').addClass('mb-2')
            $('.ckeditor ul a').addClass('text-decoration-none text-black')
            $('.ckeditor ul img').addClass('me-2')
        </script>
    @endpush
