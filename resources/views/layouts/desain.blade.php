<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Goofle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&family=Poppins:wght@600&display=swap"
        rel="stylesheet" />

    <!-- Icon -->
    <link href="{{ asset('img/icon.png') }}" rel="icon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/desain.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    {{-- Animation --}}
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{asset('css/titleAnimation.css')}}">
    <link rel="stylesheet" href="{{ asset('css/social-color.css') }}">
    @yield('head')
    @hasSection('title')
    <title>DPMD Kabupaten Jombang - @yield('title')</title>
    @else
    <title>DPMD Kabupaten Jombang</title>
    @endif

    <style>
    .login-icon i:hover {
        color: black !important;
    }

    .header {
        max-height: 90vh;
        max-width: 100%;
        object-fit: cover;
        object-position: bottom;
    }

    .header-symbol {
        width: 14px;
        height: 14px;
        background-color: #2c6f4a;
        margin: 0;
        padding: 0;
        margin-top: 7px;
    }

    .header-text span {
        font-family: 'Poppins';
        text-shadow: 2px 2px rgb(209, 201, 209);
    }

    /* .bg-iki {
            background-image: url('{{ url('img/pattern.png') }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        } */

    .bg-iki:after {
        content: "";
        position: fixed;
        /* stretch a fixed position to the whole screen */
        top: 0;
        height: 100vh;
        /* fix for mobile browser address bar appearing disappearing */
        left: 0;
        right: 0;
        z-index: -1;
        /* needed to keep in the background */
        /* background: url('{{ url('img/bg.png') }}');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover; */
    }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" data-bs-method="position">
    <!-- New Nav -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top"
            style="font-family: Inter; background-color: #2c6f4a; ">
            <div class="container-fluid mx-xxl-5">
                <a href=#><img class="logo-footer" src="{{ asset('img/logojombang.png ') }}" width="" height="40"
                        class="d-inline-block align-text-top" alt="logo-footer" /></a>
                <!-- <a href="{{ url('/') }}"><img src="/img/logo.png" alt="" class="d-inline-block align-text-top" /></a> -->
                <a class="navbar-brand ms-2" href="{{ url('/') }}" style="font-family: Inter">DPMD Kabupaten Jombang</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Content -->
                <div class="collapse navbar-collapse justify-content-evenly" id="navbarNavAltMarkup">
                    <!-- Middle -->
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link px-4 @yield('beranda')" aria-current="page" href="{{ url('/') }}">Beranda</a>
                        <a class="nav-link px-4 @yield('artikel')" href="{{ url('/artikel') }}">Artikel</a>

                        <div class="nav-item px-4 dropdown">
                            <a class="nav-link dropdown-toggle @yield('media')" id="navbarDropdownMenuLinkMedia"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkMedia">
                                <li class="w-100"><a class="dropdown-item @yield('foto')"
                                        href="{{ url('/foto') }}">Foto</a></li>
                                <li class="w-100"><a class="dropdown-item @yield('video')"
                                        href="{{ url('/video') }}">Video</a></li>
                                <li class="w-100"><a class="dropdown-item @yield('sosmed')"
                                        href="{{ url('/media') }}">MedSos</a></li>
                            </ul>
                        </div>
                        <div class="nav-item px-4 dropdown">
                            <a class="nav-link dropdown-toggle @yield('main-tentang')" id="navbarDropdownMenuLinkAbout"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Tentang</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkAbout">
                                <li class="w-100"><a class="dropdown-item @yield('prodamas')"
                                        href="{{ url('/prodamas') }}">Visi Misi & Dokumen</a></li>
                                <li class="w-100"><a class="dropdown-item @yield('bidang')"
                                        href="{{ url('/bidang') }}">Bidang</a></li>


                            </ul>
                        </div>
                        <div id="scrollspy px-4">
                            <a class="nav-link" href="#footer">Kontak</a>
                        </div>
                        <!-- <a class="nav-link @yield('cerita')" href="{{ url('/cerita') }}">Masyarakat Bercerita</a> -->
                    </div>

                    {{-- Search --}}
                    {{-- <div class="input-group" style="max-width: 10vw">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Semua</option>
                        <option value="1">Foto</option>
                        <option value="2">Audio</option>
                        <option value="3">Video</option>
                    </select>
                    <button class="btn btn-primary">
                        <i class="fas fa-search link-light"></i>
                    </button>
                </div> --}}
                    {{-- Medsos --}}
                    <div>
                        <div class="d-flex justify-content-evenly">
                            <!-- <a class="align-self-center" href=""><i class="fab fa-youtube mx-2 link-light"></i></a> -->
                            <a class="align-self-center"
                                href="https://www.instagram.com/dpmd_jombang/?igshid=YmMyMTA2M2Y%3D"><i
                                    class="fab fa-instagram mx-2 link-light"></i></a>
                            <!-- <a class="align-self-center" href=""><i class="fab fa-facebook mx-2 link-light"></i></a>
                            <a class="align-self-center" href=""><i class="fab fa-tiktok mx-2 link-light"></i></a> -->
                            @auth
                            {{-- Button Admin --}}
                            <a class="align-self-center btn btn-outline-light login-icon ms-3" href="/admin">Admin<i
                                    class="fas fa-user-shield ms-2"></i></a>
                            {{-- Button Logout --}}
                            <a class="align-self-center btn btn-outline-light login-icon ms-3" href="/signout">Log Out<i
                                    class="fas fa-sign-out-alt ms-2"></i></a>
                            @endauth
                            @guest
                            {{-- Button trigger modal --}}
                            <button class="align-self-center btn btn-outline-light login-icon ms-3" type="button"
                                data-bs-toggle="modal" data-bs-target="#loginModal">Sign In<i
                                    class="fas fa-sign-in-alt ms-2"></i></button>
                            @endguest
                        </div>

                    </div>
                </div>
            </div>
        </nav>

        <div style="min-height: 64vh">
            @yield('content')
        </div>

        <!-- Awal footer -->
        <footer>
            <div class="footer-top" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-lg-2 footer-logo" style="margin-top: 45px">
                            <a href=#><img class="logo-footer" src="{{ asset('img/logojombang.png ') }}" width=""
                                    height="150" alt="logo-footer" /></a>
                            <!-- <div style="margin-top: 12px"> -->
                            <!-- <a href=#><img src="{{ asset('img/prodamas-text.png') }}" alt="logo-prodamas-text"
                                        width="110" height="27" class="d-inline-block" /></a> -->

                            <!-- </div> -->

                        </div>
                        <div class="col-md-5 col-lg-5 offset-lg-2 footer-contact"
                            style="margin-top: 45px; margin-left: 0px; color: white">
                            <h5 style="font-family: Inter, sans-serif">Dinas Pemberdayaan Masyarakat dan Desa Kabupaten
                                Kabupaten Jombang</h5>
                            <p style="font-size: small">
                                Jl. Pattimura No.1 A, Sengon, Jombatan, <br />
                                Kec. Jombang, Kabupaten Jombang, Jawa Timur 61419
                            </p>
                            <p style="font-family: 'Font Awesome 5 Free'; font-weight: 600">&#xf0e0;
                                dpmd@jombangkab.go.id</p>
                            <p style="font-family: 'Font Awesome 5 Free'; font-weight: 600">&#xf095; (0321) 8611775</p>
                        </div>
                        <div class="col-md-6 col-lg-5 footer-links" style="margin-top: 40px; color: white">
                            <div class="row">
                                <div class="col-md-6">
                                    <p
                                        style="font-family: Inter, sans-serif; font-weight: 600; font-weight: bold; font-size:25px;">
                                        Navigasi</p>
                                    <a class="footer-link" href="{{ url('/') }}">Beranda</a> <br />
                                    <!-- {{-- <a class="footer-link" href="{{ url('tuliscerita') }}">Tulis Cerita</a> <br />
                                    --}}
                                    <a class="footer-link" href="{{ url('kritik') }}">Kritik & Saran</a> <br>
                                    {{-- <a class="footer-link" href="{{ url('grafik') }}">Prodamas Dalam Grafik</a>
                                    <br /> --}}
                                    <a class="footer-link" href="{{ url('peta') }}">Prodamas Dalam Peta</a> <br>
                                    <a class="footer-link" href="{{ url('banksampah') }}">Bank Sampah</a> -->
                                </div>
                                <div class="col-md-6">
                                    <p
                                        style="font-family: Inter, sans-serif; font-weight: 600; font-weight: bold; font-size:25px;">
                                        Tautan Eksternal</p>
                                    <a class="footer-link" target="blank" href="http://www.jombangkab.go.id/">Kabupaten
                                        Jombang</a>
                                    <br />
                                    <a class="footer-link" target="blank"
                                        href="https://sabdopalon.jombangkab.go.id/">Sabdapalon
                                        Jombang</a>
                                    <br>
                                    <a class="footer-link" target="blank"
                                        href="https://sabdopalon.jombangkab.go.id/eebukkades/">EE
                                        Buk Kades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--div row-->
                </div>
                <!--div  container-->
            </div>
            <!--div footer-top-->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 footer-copyright" style="color: white">&copy; 2022 DPMD JOMBANG
                        </div>
                        <div class="col-md-6 footer-social">
                            <!-- <a href=""><i class="fab fa-youtube"></i></a> -->
                            <a href="https://www.instagram.com/dpmd_jombang/?igshid=YmMyMTA2M2Y%3D"><i
                                    class="fab fa-instagram"></i></a>
                            <!-- <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-tiktok"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir footer -->

        <!-- jQuery -->
        <script src="{{asset('/adminlte/plugins/jquery/jquery.min.js')}}"></script>

        <!--Script dropdown-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script>
        $(function() {
            $('.modal').on('hide.bs.modal', function() {
                $audio = $(this).find('audio');
                try {
                    $audio[0].pause();
                } catch (error) {

                }
                $video = $(this).find('video');
                try {
                    $video[0].pause();
                } catch (error) {

                }
            });
        });
        $(function() {
            $('.modal').on('shown.bs.modal', function() {
                $media = $(this).find('.media');
                $img = $(this).find('.click');
                if ($media) {
                    $img.unbind().click(function() {
                        // $media[0].pause();
                        return $media[0].paused ? $media[0].play() : $media[0].pause();
                    });
                }
            });
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        @stack('scripts')
        @yield('table')

        {{-- Modal Login --}}
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign In Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <a class="btn btn-admin w-100 my-2" href="{{ url('loginuser') }}"><i
                                class="fas fa-user-shield"></i>
                            Admin
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>