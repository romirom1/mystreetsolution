@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div id="bungkus-register">
                <div class="row row-register">
                    <div class="col-lg-8 col-md-6 col-sm-6"><img src="{{ asset('assets/img/logo.png') }}"></div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <ul class="navbar-left nav-akun">
                            <a href="#">Sudah punya akun? </a>
                        </ul>
                        <a class="btn btn-link btn-masuk" role="button" href="{{ route('login') }}">LOGIN</a>
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

                <!-- FORM REGRISTRASI -->
                <form id="formulir-register" class="bootstrap-form-with-validation" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="row{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-nama">
                            <label class="regis-nama"><strong>Nama</strong></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-nama">
                            <input class="form-control regis-input" type="text" name="name" placeholder="Nama" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>error : nama maksimal 20 Karakter</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-nomor">
                            <label class="regis-nomor">Nomor HP</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-nomor">
                            <input class="form-control regis-input" type="phone" name="phone" placeholder="Nomor HP" value="{{ old('phone') }}" required autofocus>
                            @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>error : masukkan nomor telepon dengan benar</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-email">
                            <label class="regis-email">Email</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-email">
                            <input class="form-control regis-input" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>error : alamat email sudah terdaftar </strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-password">
                            <label class="regis-password">Password </label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-password">
                            <input class="form-control regis-input" type="password" name="password" placeholder="Password" required autofocus>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>error : password konfirmasi anda tidak cocok</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-konfirm">
                            <label class="regis-konfirm">Konfirmasi Password</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-email">
                            <input id="password-confirm" class="form-control regis-input" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required autofocus>
                        </div>
                    </div>
                    <div class="row{{ $errors->has('birth') ? ' has-error' : '' }}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-tgl">
                            <label class="regis-tgl">Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-tgl">
                            <input class="form-control regis-input" name="birth" type="date" value="{{ old('birth') }}" required autofocus>
                            @if ($errors->has('birth'))
                                    <span class="help-block">
                                        <strong>masukkan tanggal lahir anda dengan benar</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 regis-tgl"></div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 regis-syarat">
                            <h3 class="heading-syarat">Syarat &amp; Ketentuan</h3>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" required autofocus>Dengan ini saya menyetujui syarat dan ketentuan yang berlaku di situs ini.></label>
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