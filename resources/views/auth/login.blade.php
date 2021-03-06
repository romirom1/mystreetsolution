@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="bungkus-login">
                <div class="row row-register">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <img src="{{ asset('assets/img/logo.png') }}"> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <ul class="navbar-left nav-akun">
                            <a href="#">Belum punya akun? </a>
                        </ul><a class="btn btn-link btn-masuk" role="button" href="{{ route('register') }}">DAFTAR </a>
                    </div>
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
                    <div class="row row-email{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label>Email </label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                            <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>Email atau Password yang anda masukkan, tidak cocok dengan data kami</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-password{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label>Password </label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <ul class="forget-password">
                                <li><a href="{{ route('password.request') }}">Lupa Password?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row row-button">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login-button">
                            <div class="checkbox remember-cekbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Ingat Saya</label>
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