            <!-- Header START -->
            <div class="header-text-dark header-nav layout-vertical">
                <div class="header-nav-wrap">
                    <div class="header-nav-left">
                    </div>
                    <div class="header-nav-right align-items-center">
                        {{-- <h4>Doc v4.0.0</h4> --}}

                    </div>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav vertical-menu nav-menu-light scrollable">
                <div class="nav-logo">
                    <div class="w-100 logo" style="display: flex; align-items: center; justify-content: center;">
                        <img src="img/logoTb.jpg" alt="" style="width: 50px; height: 50px;">
                        <h5 style="margin-left: 10px;">Daftar Ulang</h5>
                    </div>

                    <div class="mobile-close">
                        <i class="icon-arrow-left feather"></i>
                    </div>
                </div>
                <ul class="nav-menu">
                    <li class="nav-menu-item {{ Request::is('/') ? 'router-link-active' : '' }}">
                        <a href="/">
                            <i class="feather icon-message-square"></i>
                            <span class="nav-menu-item-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-menu-item {{ Request::is('siswa') ? 'router-link-active' : '' }}">
                        <a href="/siswa">
                            <i class="la la-rocket"></i>
                            <span class="nav-menu-item-title">Data Siswa</span>
                        </a>
                    </li>
                    <li class="nav-menu-item {{ Request::is('daftar-ulang') ? 'router-link-active' : '' }}">
                        <a href="/daftar-ulang">
                            <i class="la la-html5"></i>
                            <span class="nav-menu-item-title">Daftar Ulang</span>
                        </a>
                    </li>
                    <li class="nav-menu-item {{ Request::is('bukti-pembayaran') ? 'router-link-active' : '' }}">
                        <a href="/bukti-pembayaran">
                            <i class="la la-desktop"></i>
                            <span class="nav-menu-item-title">Bukti Pembayaran</span>
                        </a>
                    </li>
                    <li class="nav-menu-item {{ Request::is('request-nota') ? 'router-link-active' : '' }}">
                        <a href="/request-nota">
                            <i class="la la-folder"></i>
                            <span class="nav-menu-item-title">Request Nota</span>
                        </a>
                    </li>

                    <li class="nav-menu-item {{ Request::is('laporan-respon') ? 'router-link-active' : '' }}">
                        <a href="/laporan-respon">
                            <i class="la la-css3"></i>
                            <span class="nav-menu-item-title">Laporan Respon</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- Side Nav END -->
