@extends('layouts.admin')

@push('style')
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New Riset</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Posts</a></div>
                    <div class="breadcrumb-item">Create New Post</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Riset</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.pages.' . strtolower($url) . '.update', $data) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penulis</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="penulis" class="form-control"
                                                value="{{ $data->penulis }}">
                                            @error('penulis')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">judul</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="judul" class="form-control"
                                                value="{{ $data->judul }}">
                                            @error('judul')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">publikasi</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="publikasi" class="form-control"
                                                value="{{ $data->publikasi }}">
                                            @error('publikasi')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">volume</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="volume" class="form-control"
                                                value="{{ $data->volume }}">
                                            @error('volume')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">nomor</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="nomor" class="form-control"
                                                value="{{ $data->nomor }}">
                                            @error('nomor')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">halaman</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="halaman" class="form-control"
                                                value="{{ $data->halaman }}">
                                            @error('halaman')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">tahun</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="tahun" class="form-control"
                                                value="{{ $data->tahun }}">
                                            @error('tahun')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">penerbit</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="penerbit" class="form-control"
                                                value="{{ $data->penerbit }}">
                                            @error('penerbit')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="file" name="file" class="form-control">
                                            @error('file')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script src="{{ asset('stisla/dist/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('stisla/dist/assets/js/page/features-post-create.js') }}"></script>
@endpush
