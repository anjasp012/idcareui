<div class="header-wrapper">
    {{-- <div class="topbar-idcare py-4">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="d-flex gap-4">
                    <div>idcare@ui.ac</div>
                    <a target="blank" href="https://wa.me/6282122112882" class="text-decoration-none text-white">+62
                        8212 2112 882</a>
                </div>
            </div>
        </div>
    </div> --}}
    <nav id="navbar" class="navbar navbar-nonscrolled navbar-idcare navbar-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('idcare/images/logo.png') }}" class="w-100" alt="idCARE.UI">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('klaster') || request()->routeIs('message_from_jica') || request()->routeIs('pendahuluan') || request()->routeIs('sambutan_pimpinan') ? 'active' : '' }}"
                            href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('pendahuluan') }}">Pendahuluan</a></li>
                            <li><a class="dropdown-item"href="{{ route('sambutan_pimpinan') }}">Sambutan Pimpinan</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('klaster') }}">Cluster Leader</a></li>
                            <li><a class="dropdown-item" href="{{ route('message_from_jica') }}">JICA sebagai
                                    Partner</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('mataKuliah') || request()->routeIs('sertifikat') || request()->routeIs('kelas') ? 'active' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Join Our Training
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('mataKuliah') }}">Subject Pelatihan</a></li>
                            <li><a class="dropdown-item" href="{{ route('sertifikat') }}">Sertifikat</a></li>
                            <li><a class="dropdown-item" href="{{ route('kelas') }}">Jadwal Kelas & Cara Registrasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('cara-registrasi') || request()->routeIs('camp') ? 'active' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Be Our Instructor
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('camp') }}">CAMP</a></li>
                            <li><a class="dropdown-item" href="{{ route('cara-registrasi') }}">Cara Registrasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('riset') || request()->routeIs('acara') || request()->routeIs('openCourseware') ? 'active' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Publikasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('riset') }}">Riset/Laporan</a></li>
                            <li><a class="dropdown-item" href="{{ route('openCourseware') }}">Open Courseware</a></li>
                            <li><a class="dropdown-item" href="{{ route('acara') }}">Acara</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('kontak') }}">kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-black">
        <nav class="navbar navbar-scrolled navbar-idcare navbar-dark navbar-expand-lg d-none">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('idcare/images/logo.png') }}" class="w-100" alt="idCARE.UI">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ request()->routeIs('klaster') || request()->routeIs('message_from_jica') || request()->routeIs('pendahuluan') || request()->routeIs('sambutan_pimpinan') ? 'active' : '' }}"
                                href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('pendahuluan') }}">Pendahuluan</a></li>
                                <li><a class="dropdown-item"href="{{ route('sambutan_pimpinan') }}">Sambutan
                                        Pimpinan</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('klaster') }}">klaster</a></li>
                                <li><a class="dropdown-item" href="{{ route('message_from_jica') }}">JICA sebagai
                                        Partner</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ request()->routeIs('mataKuliah') || request()->routeIs('sertifikat') || request()->routeIs('kelas') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Join Our Training
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('mataKuliah') }}">Subject Pelatihan</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('sertifikat') }}">Sertifikat</a></li>
                                <li><a class="dropdown-item" href="{{ route('kelas') }}">Jadwal Kelas & Cara
                                        Registrasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ request()->routeIs('cara-registrasi') || request()->routeIs('camp') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Be Our Instructor
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('camp') }}">CAMP</a></li>
                                <li><a class="dropdown-item" href="{{ route('cara-registrasi') }}">Cara
                                        Registrasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('berita') }}">Berita</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ request()->routeIs('riset') || request()->routeIs('acara') || request()->routeIs('openCourseware') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Publikasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('riset') }}">Riset/Laporan</a></li>
                                <li><a class="dropdown-item" href="{{ route('openCourseware') }}">Open Courseware</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('acara') }}">Acara</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('kontak') }}">kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
