@extends('layouts.app')

@section('title')
    {{ $data->judul }} | IdCARE.UI
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
                    <h1 class="pages-title">{{ $data->judul }}</h1>
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
                        <a property="item" typeof="WebPage" title="Go to idCARE." href="{{ route('riset') }}"
                            class="home">{{ $title }}</a>
                    </span>
                    <span>
                        &gt;
                    </span>
                    <span property="itemListElement" typeof="ListItem" class="current-item">
                        {{ $data->judul }}
                    </span>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">{{ $data->judul }}</div>
                        <table class="table table-bordered table-secondary">
                            <tr>
                                <th colspan="2" class="py-3">
                                    Detail
                                </th>
                            </tr>
                            <tr>
                                <th>Penulis</th>
                                <td>{{ $data->penulis ? $data->penulis : '-' }}</td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td>{{ $data->judul ? $data->judul : '-' }}</td>
                            </tr>
                            <tr>
                                <th>Publikasi</th>
                                <td>{{ $data->publikasi ? $data->publikasi : '-' }}</td>
                            </tr>
                            <tr>
                                <th>volume</th>
                                <td>{{ $data->volume ? $data->volume : '-' }}</td>
                            </tr>
                            <tr>
                                <th>nomor</th>
                                <td>{{ $data->nomor ? $data->nomor : '-' }}</td>
                            </tr>
                            <tr>
                                <th>halaman</th>
                                <td>{{ $data->halaman ? $data->halaman : '-' }}</td>
                            </tr>
                            <tr>
                                <th>tahun</th>
                                <td>{{ $data->tahun ? $data->tahun : '-' }}</td>
                            </tr>
                            <tr>
                                <th>penerbit</th>
                                <td>{{ $data->penerbit ? $data->penerbit : '-' }}</td>
                            </tr>
                        </table>
                        @if ($data->file != null)
                            <div class="py-4">
                                <h3 class="text-center fw-bold">PAPER</h3>
                            </div>
                            <iframe src="{{ '/storage/riset/' . $data->file }}" width="100%" height="600px"></iframe>
                        @endif
                        <div class="my-2">
                            <small
                                class="text-secondary">{{ @$data->penulis }}{{ @$data->judul }}{{ @$data->publikasi }}{{ @$data->volume }}{{ @$data->nomor }}{{ @$data->halaman }}{{ @$data->penerbit }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
