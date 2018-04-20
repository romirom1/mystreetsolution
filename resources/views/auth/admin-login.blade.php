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
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <ul class="forget-password">
                                <li><a href="#">Lupa Password?</a></li>
                            </ul>
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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
