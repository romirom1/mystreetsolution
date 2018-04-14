@extends('layouts.master')
@section('content')
    <div id="bungkus-nav">
        <div id="nav-pertama">
            <nav class="navbar navbar-inverse nav-atas">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="index.html"> <img src="{{ asset('assets/img/logo.png') }}" id="img-logo"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1"></div>
                </div>
            </nav>
        </div>
        <div id="nav-kedua">
            <ul class="nav nav-tabs nav-bawah">
                <li><a href="index.html">BERANDA </a></li>
                <li><a href="#">PANDUAN </a></li>
                <li><a href="#">TENTANG </a></li>
                <li><a href="kontak.html">KONTAK </a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div id="content2">
            <div class="bungkus-login">
                <div class="row row-register">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <a href="index.html"><img src="assets/img/logo.png"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <ul class="navbar-left nav-akun">
                            <li> <a href="#">Belum punya akun? </a></li>
                        </ul><a class="btn btn-link btn-masuk" role="button" href="register.html">DAFTAR </a></div>
                </div>
                <div class="row row-info">
                    <div class="col-md-12"><i class="fa fa-lock icone"></i>
                        <p class="text-left">Halaman Login</p>
                    </div>
                </div>
                <div class="row row-isiform">
                    <div class="col-md-12 heading-form">
                        <h1 class="text-center">Selamat Datang !</h1></div>
                </div>
                <!-- Login Form -->
                <form id="formulir-register" class="bootstrap-form-with-validation" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row row-email">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label>Email </label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row row-password">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label>Password </label>
                            <ul class="forget-password">
                                <li><a href="#">Lupa Password?</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row row-button">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login-button">
                            <div class="checkbox remember-cekbox">
                                <label>
                                    <input type="checkbox">Ingat Saya.</label>
                            </div>
                            <button class="btn btn-primary login-button" type="submit">MASUK </button>
                        </div>
                    </div>
                </form>
                <!-- end login form -->
            </div>
        </div>
    </div>
@endsection