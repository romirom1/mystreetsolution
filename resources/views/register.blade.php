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
                            <li role="presentation" class="nav-btn btn-regis"><a href="#">REGISTER </a></li>
                            <li role="presentation" class="nav-btn btn-login"><a href="#">LOGIN </a></li>
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
    <div class="content">
        <div id="content2">
            <div id="bungkus-register">
                <div class="row row-register">
                    <div class="col-lg-8 col-md-6 col-sm-6"><img src="{{ asset('assets/img/logo.png') }}"></div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <ul class="navbar-left nav-akun">
                            <li> <a href="#">Sudah punya akun? </a></li>
                        </ul>
                        <button class="btn btn-link btn-masuk" type="button">MASUK </button>
                    </div>
                </div>
                <div class="row row-info">
                    <div class="col-md-12"><i class="glyphicon glyphicon-globe icone"></i>
                        <p class="text-left">Halaman Register</p>
                    </div>
                </div>
                <div class="row row-isiform">
                    <div class="col-md-12 heading-form">
                        <h1 class="text-center">Lengkapi Formulir Berikut!</h1></div>
                </div>
                <form id="formulir-register" class="bootstrap-form-with-validation">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-nama">
                            <label class="regis-nama"><strong>Nama</strong></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-nama">
                            <input class="form-control regis-input" type="text" placeholder="Nama">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-nomor">
                            <label class="regis-nomor">Nomor HP</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-nomor">
                            <input class="form-control regis-input" type="text" placeholder="Nomor HP">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-email">
                            <label class="regis-email">Email</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-email">
                            <input class="form-control regis-input" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-password">
                            <label class="regis-password">Password </label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-password">
                            <input class="form-control regis-input" type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-konfirm">
                            <label class="regis-konfirm">Konfirmasi Password</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-email">
                            <input class="form-control regis-input" type="password" placeholder="Konfirmasi Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-tgl">
                            <label class="regis-tgl">Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-tgl">
                            <input class="form-control regis-input" type="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-tgl"></div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-syarat">
                            <h3 class="heading-syarat">Syarat &amp; Ketentuan</h3>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Dengan ini saya menyetujui syarat dan ketentuan yang berlaku di situs ini.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 regis-button">
                            <button class="btn btn-primary regis-button" type="submit">DAFTAR </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection