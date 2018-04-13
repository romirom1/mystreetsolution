@extends('layouts.master')
@section('content')
    <div id="bungkus-nav">
        <div id="nav-pertama">
            <nav class="navbar navbar-inverse nav-atas">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="#"> <img src="{{ asset('assets/img/logo.png') }}" id="img-logo"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li role="presentation" class="nav-btn btn-regis"><a href="register.html">REGISTER </a></li>
                            <li role="presentation" class="nav-btn btn-login"><a href="login.html">LOGIN </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="nav-kedua">
            <ul class="nav nav-tabs nav-bawah">
                <li><a href="#">BERANDA </a></li>
                <li><a href="#">PANDUAN </a></li>
                <li><a href="#">TENTANG </a></li>
                <li><a href="#">KONTAK </a></li>
            </ul>
        </div>
    </div>
    <div class="bungkus-slider">
        <div class="carousel slide slider" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img src="{{ asset('assets/img/pengenpart2.jpg') }}" alt="Slide Image"></div>
                <div class="item"><img src="{{ asset('assets/img/pengenpart2.jpg') }}" alt="Slide Image"></div>
                <div class="item"><img src="{{ asset('assets/img/pengenpart2.jpg') }}" alt="Slide Image"></div>
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
                <div class="col-md-6 col-sm-6">
                    <h3 class="text-left">CEK STATUS LAPORAN ANDA</h3></div>
                <div class="col-md-4 col-sm-6 col-input">
                    <input class="input-sm input-cekid" type="text" placeholder="Ketik id laporan anda"><a class="btn btn-default btn-cek" role="button" href="#">CEK </a></div>
                <div class="col-md-2 col-sm-12"><a class="btn btn-default btn-laporan" role="button" href="#">BUAT LAPORAN</a></div>
            </div>
        </div>
    </div>
    <div class="content">
        <div id="content2">
            <div class="bungkus-about">
                <div class="row konten-about">
                    <div class="col-md-12" id="text-keterangan">
                        <h2><strong>TENTANG MYSTREET SOLUTION</strong></h2><img src="{{ asset('assets/img/pengen.jpg') }}" class="img-fluid">
                        <p><em>Lorem ipsum</em>, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat
                            tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen. <em>Lorem ipsum</em>, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi
                            visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen. <em>Lorem ipsum</em>, atau ringkasnya
                            lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat tidak terlalu berkonsentrasi kepada
                            arti harfiah per kalimat, melainkan lebih kepada elemen. <em>Lorem ipsum</em>, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi,
                            dan tata letak. Maksud penggunaan lipsum adalah agar pengamat tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection