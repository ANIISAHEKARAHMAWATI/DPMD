<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #daf5e6">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <!-- <img src="{{ asset('img/logoprodamas.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-bold">DPMD JOMBANG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Selamat Datang Admin!</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/admin/list-carousel') }}" class="nav-link @yield('carousel')">
                        <i class="nav-icon fas fa-archway"></i>
                        <p>Carousel Header</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-article" class="nav-link @yield('artikel')">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="/admin/submission" class="nav-link @yield('cerita')">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Tulis Cerita</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="/admin/list-foto" class="nav-link @yield('foto')">
                        <i class="nav-icon far fa-images"></i>
                        <p>Foto</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-video" class="nav-link @yield('video')">
                        <i class="nav-icon fas fa-video"></i>
                        <p>Video</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-prodamas" class="nav-link @yield('prodamas')">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>Visi Misi & Dokumen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/list-bidang" class="nav-link @yield('bidang')">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>Bidang</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>