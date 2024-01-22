<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pages</li>
            <li class=""><a class="nav-link" href="{{ route('admin.pages.sekilas-idcare-ui.index') }}"><i
                        class="fas fa-pencil-ruler"></i>
                    <span>Sekilas idCARE.UI</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i>
                    <span>Profil</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.pages.pendahuluan.index') }}">Pendahuluan</a></li>
                    <li><a href="{{ route('admin.pages.sambutan-pimpinan.index') }}">Sambutan Pimpinan</a></li>
                    <li><a href="{{ route('admin.pages.klaster.index') }}">Klaster</a></li>
                    <li><a href="{{ route('admin.pages.message-from-jica.index') }}">JICA Sebagai Partner</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i>
                    <span>Join Our Training</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.pages.subject-pelatihan.index') }}">Subject
                            Pelatihan</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.pages.sertifikat.index') }}">Sertifikat</a></li>
                    <li><a class="nav-link" href="{{ route('admin.pages.kelas.index') }}">Jadwal & Registrasi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i>
                    <span>Be Our Instructor</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.pages.camp.index') }}">CAMP</a>
                    <li><a class="nav-link" href="{{ route('admin.pages.cara-registrasi.index') }}">Cara Registrasi</a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->routeIs('admin.pages.berita.index') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.pages.berita.index') }}"><i class="fas fa-pencil-ruler"></i>
                    <span>Berita</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i>
                    <span>Publikasi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.pages.riset-laporan.index') }}">Riset/Laporan</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.pages.opencourseware.index') }}">Open Courseware</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.pages.acara.index') }}">Acara</a></li>
                </ul>
            </li>
            <li class="{{ request()->routeIs('admin.pages.kontak.index') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.pages.kontak.index') }}"><i class="fas fa-pencil-ruler"></i>
                    <span>Kontak</span></a></li>
            <li class="menu-header">Components</li>
            <li class="{{ request()->routeIs('admin.klaster.index') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.klaster.index') }}"><i class="fas fa-pencil-ruler"></i>
                    <span>Klaster</span></a></li>
            <li class="{{ request()->routeIs('admin.class.index') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.class.index') }}"><i class="fas fa-pencil-ruler"></i>
                    <span>Kelas</span></a></li>
        </ul>
    </aside>
</div>
