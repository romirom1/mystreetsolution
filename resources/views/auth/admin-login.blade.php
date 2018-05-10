@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="bungkus-login">
                <div class="row row-register">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <img src="{{ asset('assets/img/logo.png') }}"> 
                    </div>
                </div>
                <div class="row row-info">
                    <div class="col-md-12"><i class="fa fa-lock icone"></i>
                        <p class="text-left">Halaman Login Admin</p>
                    </div>
                </div>
                <div class="row row-isiform">
                    <div class="col-md-12 heading-form">
                        <h1 class="text-center">Selamat Datang !</h1></div>
                </div>
                <!-- Login Form -->
                <form id="formulir-register" class="bootstrap-form-with-validation" method="POST" action="{{ route('admin.login.submit') }}">
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