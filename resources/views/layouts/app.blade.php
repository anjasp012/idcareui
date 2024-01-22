<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('idcare/style/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('idcare/style/hamburgers.css') }}" rel="stylesheet">
    @stack('style')
    <style>
        .fixed-navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: black;
            /* Ganti dengan warna latar belakang navbar tetap */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Ganti dengan efek bayangan yang diinginkan */
            display: none;
            /* Membuat navbar tidak terlihat pada awalnya */
        }
    </style>

</head>

<body class="overflow-x-hidden">
    @include('includes.guest.navbar')
    @yield('content')
    <footer>
        <div class="idcare-footer-wrapper">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-4" style="border-right: 1px #363636 solid;">
                        <img src="{{ asset('idcare/images/logo-footer.png') }}" class="w-100" alt="">
                    </div>
                    <div class="col-md-4" style="border-right: 1px #363636 solid;">
                        <p>
                            <strong>Kampus Baru UI Depok </strong>
                            <br>
                            Jawa Barat – 16424, Indonesia
                        </p>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li class="mt-1"><a class="text-decoration-none text-white"
                                    href="https://wa.me/082122112882">
                                    <div class="d-flex gap-2">
                                        <img width="25px" src="{{ asset('idcare/images/icons/whatsapp.png') }}"
                                            alt="">
                                        0821-2211-2882 (Office)
                                    </div>
                                </a>
                            </li>
                            <li class="mt-1"><a class="text-decoration-none text-white">
                                    <div class="d-flex gap-2">
                                        <img width="25px" src="{{ asset('idcare/images/icons/instagram.png') }}"
                                            alt="">
                                        idcare.ui
                                    </div>
                                </a></li>
                            <li class="mt-1"><a class="text-decoration-none text-white">
                                    <div class="d-flex gap-2">
                                        <img width="25px" src="{{ asset('idcare/images/icons/linkedin.png') }}"
                                            alt="">
                                        idcare.ui
                                    </div>
                                </a></li>
                            <li class="mt-1"><a class="text-decoration-none text-white">
                                    <div class="d-flex gap-2">
                                        <img width="25px" src="{{ asset('idcare/images/icons/facebook.png') }}"
                                            alt="">
                                        idcare.ui
                                    </div>
                                </a></li>
                            <li class="mt-1"><a class="text-decoration-none text-white">
                                    <div class="d-flex gap-2">
                                        <img width="25px" src="{{ asset('idcare/images/icons/mail.png') }}"
                                            alt="">
                                        idcare.ui
                                    </div>
                                </a></li>
                            <li class="mt-1"><a class="text-decoration-none text-white" href="{{ route('kelas') }}">
                                    <div class="d-flex gap-2">
                                        <img width="25px" src="{{ asset('idcare/images/icons/www.png') }}"
                                            alt="">
                                        {{ route('kelas') }}
                                    </div>
                                </a></li>
                            <li class="mt-1"><a class="text-decoration-none text-white">
                                    <div class="d-flex gap-2">
                                        <img width="25px" height="25px"
                                            src="{{ asset('idcare/images/icons/placeholder.png') }}" alt="">
                                        idCARE.UI,
                                        Fakultas Teknik, Universitas Indonesia
                                        Kampus Baru UI Depok 16424
                                    </div>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="idcare-copyright-wrapper">
            <div class="container">
                <div class="text-center">
                    &copy; Copyright 2020-2021 IdCARE.UI, Fakultas Teknik, Universitas Indonesia
                </div>
            </div>
        </div>
    </footer>
    <button id="toTopBtn" class="btn btn-primary d-block py-2" data-abc="true"><i class="bi bi-arrow-up"></i></button>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('idcare/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('idcare/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('idcare/script/navbar.js') }}"></script>
    <script src="{{ asset('idcare/script/backToTop.js') }}"></script>
    @stack('script')
</body>

</html>
