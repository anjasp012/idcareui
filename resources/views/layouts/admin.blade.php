<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('includes.admin.navbar')
            @include('includes.admin.sidebar')

            <!-- Main Content -->
            @yield('content')
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('stisla/dist/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    @stack('script')

    <!-- Template JS File -->
    <script src="{{ asset('stisla/dist/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/js/custom.js') }}"></script>
</body>

</html>
