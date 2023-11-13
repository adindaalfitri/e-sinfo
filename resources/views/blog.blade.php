<!DOCTYPE html>
<html lang="">

<head>
    <title>Sistem Informasi Sekolah</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('img/logosekolah2.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- <style>
        #container{
            background-color: black !important;
        }
    </style> --}}

    </head>

<body id="top">
    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
        <div class="wrapper row0">
            <div id="topbar" class="hoc clear">
                <div class="fl_left">
                    <ul class="nospace">
                        <li><i class="fa fa-phone"></i> +00 (123) 456 43623</li>
                        <li><i class="fa fa-envelope-o"></i> sekolahjaya.com</li>
                    </ul>
                </div>
                <div class="fl_right">
                    <ul class="nospace">
                        <li><a href="{{route('login')}}" title="Login"><i class="fa fa-lg fa-sign-in"> Login</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper row1 sticky-top">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="index.html">Sistem Informasi Sekolah</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li class="active"><a href="{{route('blog.index')}}">Home</a></li>
                        <li><a href="#info">Informasi</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="d-flex">
            <div id="pageintro" class="hoc clear" style="padding-left: 13rem">
                <article>
                    <h3 class="heading">Pengumuman Online
                        Informasi Sekolah</h3>
                    <p>Mempermudah dan Mempersingkat waktu Anda dalam menerima Informasi.</p>
                    <footer><a href="#info"><div class="btn btn-primary">Cek Informasi</div></a></footer>
                </article>
            </div>
            <div class="img">
                <img src="{{ asset('img/logocewek.png') }}" alt="anaksekolah.jpg">
            </div>
        </div>
        <div class="" style="background-color: white; color: black">
            <section class="container" id="info" style="padding-top: 50px !important">
                <div class="sectiontitle">
                    <h1>Informasi Terkini</h1>
                    <p>Harap untuk dibaca seksama berita ter update Hari ini!</p>
                </div>

                <div class="row">
                    <div class="group excerpt btmspace-80">
                        <div class="col">
                            @foreach ($datas as $data)
                                <article class="one_third mb-4">
                                    <a class="imgover btmspace-30" href="#"><img class="img-fluid"
                                            style="height: 250px; width: 306px" src="storage/{{ $data->foto }}"
                                            alt=""></a>
                                    <ul class="nospace meta mb-2">

                                        <li>
                                                <div class="btn btn-dark">
                                                <i class="fa fa-user"></i>
                                                <a href="#" class="text-white text-decoration-none"> Kelas {{ $data->kelas }}</a>
                                            </div>
                                        </li>
                                        {{-- <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li> --}}
                                    </ul>
                                    <h6 class="heading">{{ $data->topik }}</h6>
                                    <p>{{ $data->informasi }}</p>
                                    {{-- <footer>
                                        <a href="#">
                                            <div class="btn btn-primary">
                                                Read More
                                            </div>
                                        </a>
                                    </footer> --}}
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x240.png" alt=""></a>
                <ul class="nospace meta">
                    <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                    <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
            </ul>
            <h6 class="heading">Sodales etiam nec</h6>
            <p>Dui consectetur pretium vel quis mauris quisque scelerisque dui justo ut volutpat eros vestibulum accumsan nulla viverra&hellip;</p>
            <footer><a href="#">Read More</a></footer>
        </article>
        <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x240.png" alt=""></a>
            <ul class="nospace meta">
                <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
            </ul>
            <h6 class="heading">Laoreet sollicitudin</h6>
            <p>Dignissim maximus est vel egestas sed efficitur tortor ac eleifend semper leo nisl porttitor orci in malesuada nulla massa&hellip;</p>
            <footer><a href="#">Read More</a></footer>
        </article> --}}

                <footer class="center"><a href="#"><div class="btn btn-primary">Back to Home &raquo;</div></a></footer>
            </section>
        </div>
        <div class="wrapper row4" id="contact">
            <footer style="display: flex; justify-content: space-between; color: #ffffff;" id="footer" class="hoc clear">
                <article class="one_quarter first">
                    <h6 class="heading" style="color: #ffffff;">Pengumuman Informasi Sekolah Online</h6>
                    <p>Memudahkan siswa dalam menerima informasi terkini.</p>
                    <p>Informasi yang tersedia sudah pasti valid dan benar</p>
                </article>
                <div class="one_quarter">
                    <h6 class="heading" style="color: #ffffff;">Location</h6>
                    <ul class="nospace btmspace-30 linklist contact">
                        <li><i class="fa fa-map-marker"></i>
                            <address>
                                Jl.Parawina no 04, Jakarta, 540094
                            </address>
                        </li>
                        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                        <li><i class="fa fa-envelope-o"></i> sekolah@jaya.com</li>
                    </ul>
                </div>
<div class="text-center">
    <img src="{{ asset('img/sekolah.png') }}" alt="sekolah.jpg" style="width: 270px" >

</div>
            </footer>
        </div>
    </div>

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
</body>

</html>
