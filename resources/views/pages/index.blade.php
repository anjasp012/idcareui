@extends('layouts.app')

@section('title', 'IdCARE.UI')

@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <div class="pages-content pages-beranda">
        <div class="section-header" style="z-index: -10">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('idcare/images/slide/Slide_01.jpg') }}" alt="idCARE.UI slide 1"
                            class="slider-item w-100" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('idcare/images/slide/Slide_02.jpg') }}" alt="idCARE.UI slide 2"
                            class="slider-item w-100" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-facility">
            <div class="container-xl">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-12">
                                <div class="card card-facility">
                                    <div class="card-header" style="background-color: #ffdd00;">
                                        <div class="d-flex gap-4 align-items-center">
                                            <img src="{{ asset('idcare/images/card-logo-1.png') }}" height="60"
                                                width="60" alt="idCARE.UI">
                                            <div>
                                                <div class="card-header-title">
                                                    <h3>
                                                        Sekilas idCARE.UI
                                                    </h3>
                                                </div>
                                                <div class="card-header-implicit">
                                                    <a href="{{ route('sekilas') }}">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('idcare/images/facility/1.jpg') }}" alt="idCARE.UI"
                                        class="card-img-top rounded-0">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="card-text">{!! Str::limit(strip_tags($sekilas->content), 345) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <a href="{{ route('sekilas') }}">
                                            <span>Selengkapnya</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-12">
                                <div class="card card-facility">
                                    <div class="card-header" style="background-color: #e5c80d;">
                                        <div class="d-flex gap-4 align-items-center">
                                            <img src="{{ asset('idcare/images/card-logo-2.png') }}" height="60"
                                                width="60" alt="idCARE.UI">
                                            <div>
                                                <div class="card-header-title">
                                                    <h3>
                                                        Subjek Pelatihan
                                                    </h3>
                                                </div>
                                                <div class="card-header-implicit">
                                                    <a href="{{ route('mataKuliah') }}">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('idcare/images/facility/2.jpg') }}" alt="idCARE.UI"
                                        class="card-img-top rounded-0">
                                    <div class="card-body">
                                        <div class="card-text">{!! Str::limit(strip_tags($subject->content), 285) !!}
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <a href="{{ route('mataKuliah') }}">
                                            <span>Selengkapnya</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-12">
                                <div class="card card-facility">
                                    <div class="card-header" style="background-color: #d9bd0a;">
                                        <div class="d-flex gap-4 align-items-center">
                                            <img src="{{ asset('idcare/images/card-logo-3.png') }}" height="60"
                                                width="60" alt="idCARE.UI">
                                            <div>
                                                <div class="card-header-title">
                                                    <h3>
                                                        CAMP
                                                    </h3>
                                                </div>
                                                <div class="card-header-implicit">
                                                    <a href="{{ route('camp') }}">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('idcare/images/facility/3.jpg') }}" alt="idCARE.UI"
                                        class="card-img-top rounded-0">
                                    <div class="card-body">
                                        <div class="card-text">{!! Str::limit(strip_tags($camp->content), 345) !!}
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <a href="{{ route('camp') }}">
                                            <span>Selengkapnya</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <h3 class="title-section">Video</h3>
                        <div class="border-section"></div>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/E48WTSkJwKo?si=mzncZPzphOiK7BbP"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="title-section">Berita & Update</h3>
                        <div class="border-section"></div>
                        <div class="row g-3 mb-3">
                            @foreach ($berita as $item)
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-4"><img
                                                src="{{ asset('/storage/images/berita/' . $item->thumbnail) }}"
                                                alt="idCARE.UI" class="w-100"> </div>
                                        <div class="col-8">
                                            <span class="berita-date fw-medium text-secondary">
                                                {{ date('d/m/Y', strtotime($item->created_at)) }}
                                            </span>
                                            <h5 class="berita-title">
                                                <a class="text-decoration-none text-black"
                                                    href="{{ route('detailBerita', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="text-decoration-none text-black fw-bold" href="{{ route('berita') }}">
                            <span>Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-section">Acara</h3>
                        <div class="border-section"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            lazy: true,
            spaceBetween: 0,
            effect: "fade",
            autoplay: {
                delay: 10500,
                disableOnInteraction: false,
            },
        });
    </script>
@endpush
