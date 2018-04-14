<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Street Solution</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Google-Style-Login.css')}}">
</head>

<body>
    <div id="bungkus-nav">
        @if(Auth::check())
        @if (!(Auth::guard('admin')))
            <div class="nav-pertama">
                <nav class="navbar navbar-inverse nav-atas">
                    <div class="container-fluid">
                        @if (Request::url() === url('user'))
                            <div class="navbar-header">
                            <a class="navbar-brand navbar-link" href="#">
                                <span id="openNav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><img src="{{ asset('assets/img/logo.png') }}" id="img-logo"></a>
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"></button>
                        </div>
                        @else
                            <div class="navbar-header">
                            <a class="navbar-brand navbar-link" href="#"> <img src="{{asset('assets/img/logo.png')}}" id="img-logo"></a>
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            </div>
                        @endif
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav akun-dropdown">
                                <li class="dropdown akun-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Akun saya <i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
                                    <ul class="dropdown-menu akun-dropdown" role="menu">
                                        <li role="presentation"><a href="{{ route('user.dashboard') }}">{{ Auth()->user()->name }}</a></li>
                                        <li role="presentation"><a href="#">Edit Profil</a></li>
                                        <li role="presentation"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </div>
        @endif
        @else
        <div id="nav-pertama">
            <nav class="navbar navbar-inverse nav-atas">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="#"> <img src="{{asset('assets/img/logo.png')}}" id="img-logo"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li role="presentation" class="nav-btn btn-regis"><a href="{{ route('register') }}">REGISTER </a></li>
                            <li role="presentation" class="nav-btn btn-login"><a href="{{ route('login') }}">LOGIN </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @endif
        @if (Request::url() === url('/')||Request::url() === url('panduan')||Request::url() === url('kontak')||Request::url() === url('tentang'))
            <div id="nav-kedua">
            <ul class="nav nav-tabs nav-bawah">
                <li><a href="{{ route('beranda') }}">BERANDA </a></li>
                <li><a href="{{ route('panduan') }}">PANDUAN </a></li>
                <li><a href="{{ route('tentang') }}">TENTANG </a></li>
                <li><a href="{{ route('kontak') }}">KONTAK </a></li>
            </ul>
        </div>
            <div class="bungkus-slider">
        <div class="carousel slide slider" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img src="{{asset('assets/img/pengenpart1.jpg')}}" alt="Slide Image"></div>
                <div class="item"><img src="{{asset('assets/img/pengenpart2.jpg')}}" alt="Slide Image"></div>
                <div class="item"><img src="{{asset('assets/img/pengenpart3.jpg')}}" alt="Slide Image"></div>
            </div>
            <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
        <div class="nav-bawahslider">
            <div class="row row-bawahslider">
                <div class="col-md-5 col-sm-5">
                    <h3 class="text-left">CEK STATUS LAPORAN ANDA</h3></div>
                <div class="col-md-5 col-sm-5 col-input">
                    <input class="input-sm input-cekid" type="text" placeholder="Ketik id laporan anda"><a class="btn btn-default btn-cek" role="button" href="#">CEK </a></div>
                <div class="col-md-2 col-sm-2"><a class="btn btn-default btn-laporan" role="button" href="#">BUAT LAPORAN</a></div>
            </div>
        </div>
    </div>
        @endif
    </div>
    @yield('content')
    <footer>
        <p>COPYRIGHT © GARDANESIA TEAM. ALL RIGHT RESERVED.</p>
    </footer>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/opensidenav.js')}}"></script>
    <script src="{{ asset('assets/js/btn-panduan.js') }}"></script>
</body>

</html>