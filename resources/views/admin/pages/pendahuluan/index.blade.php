@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">{{ $title }}</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between w-100">
                                    <div class="d-flex justify-content-between w-100">
                                        <h4>background Page</h4>
                                        <form action="{{ route('admin.pages.pendahuluan.updateBg') }}" method="POST"
                                            id="bgForm" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="file" name="bg_header" id="bg_header" class="d-none"
                                                onchange="document.getElementById('bgForm').submit()">
                                            <button type="button" class="btn btn-primary"
                                                onclick="document.getElementById('bg_header').click()">Ganti</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <img class="w-100"
                                    src="{{ $data->bg_header != null ? asset('storage/images/bg_page/' . $data->bg_header) : asset('idcare/images/bg/berita.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between w-100">
                                    <div class="d-flex justify-content-between w-100">
                                        <h4>Content</h4>
                                        <a href="{{ route('admin.pages.pendahuluan.edit') }}"
                                            class="btn btn-primary">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                {!! $data->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
