<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-info" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <h2 class="text-dark text-uppercase">UKK | PM</h2>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(2) == 'dashboard' ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">
                            <i class="fas fa-tv text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-with-child">
                        <a class="nav-link {{ request()->segment(2) == 'pengaduan' ? 'active' : '' }}" href="#">
                            <i class="fas fa-bullhorn text-orange"></i> Pengaduan
                        </a>
                        <ul class="nav-item-child">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->segment(2) == 'pengaduan/0' ? 'active' : '' }}"
                                    href="{{ route('pengaduan.index', '0') }}">
                                    <i class="fas fa-clipboard-check text-danger"></i>
                                    <h5 class="text-white">Verifikasi & Validasi</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pengaduan.index', 'proses') }}">
                                    <i class="fas fa-sync text-yellow"></i>
                                    <h5 class="text-white">Sedang Diproses</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pengaduan.index', 'selesai') }}">
                                    <i class="fas fa-check text-secondary"></i>
                                    <h5 class="text-white">Selesai</h5>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('masyarakat.index') }}">
                            <i class="fas fa-users text-default"></i>
                            <span class="nav-link-text">
                                <h4 class="text-white">Masyarakat</h4>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('petugas.index') }} ">
                            <i class="fas fa-users-cog text-white"></i>
                            <span class="nav-link-text">
                                <h4 class="text-white">Petugas</h4>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('laporan.index') }}">
                            <i class="fas fa-file-alt text-cyan"></i>
                            <span class="nav-link-text">
                                <h4 class="text-white">Laporan</h4>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
