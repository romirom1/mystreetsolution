@extends('layouts.master')
@section('content')
        <div class="content main">
            <div id="content2">
                <div class="content-member">
                    <div class="bungkus-profil">
                        <div class="row heading-profil">
                            <div class="col-lg-3 col-md-3 col-heading">
                                <a href="hijab.jpg" data-lightbox="foto" data-title="foto"> <img src="
                                    @if (Auth::user()->photo===null)
                                        {{ asset('assets/img/avatar_2x.png') }}
                                    @else
                                        {{ asset('photo')}}/{{ Auth::user()->photo }}
                                    @endif" class="img-fluid img-profil" /> </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-heading tester">
                                <h3>{{ Auth::user()->name }}</h3>
                                <p>Member Mystreet Solution</p>
                                <p class="info-heading-profil">E-mail </p>
                                <p class="info-akun">: {{ Auth::user()->email }} </p>
                                <p class="info-heading-profil">Dibuat tanggal</p>
                                <p class="info-akun">: {{ Auth::user()->created_at }} </p>
                                <p class="info-heading-profil">Diperbarui tanggal</p>
                                <p class="info-akun">: {{ Auth::user()->updated_at }} </p>
                            </div>
                        </div>
                        <div class="row informasi-profil">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-kiri"><img src="@if (Auth::user()->photo===null)
                                        {{ asset('assets/img/avatar_2x.png') }}
                                    @else
                                        {{ asset('photo')}}/{{ Auth::user()->photo }}
                                    @endif" class="img-fluid img-komentar"></div>
                            <div class="col-lg-11 col-md-11">
                                <h2>Informasi Pribadi</h2><a class="btn btn-default btn-edit-profil" role="button" href="{{ route('user.edit-profile') }}">Edit </a></div>
                        </div>
                        <div class="row isine-profil">
                            <div class="col-lg-3 col-md-3 col-isi-profil">
                                <p>Nama </p>
                                <p>Tanggal Lahir</p>
                                <p>Nomor HP</p>
                                <p>E-mail </p>
                            </div>
                            <div class="col-lg-9 col-md-9 col-isi-data">
                                <p>{{ Auth::user()->name }}</p>
                                <p>{{ Auth::user()->birth }}</p>
                                <p>{{ Auth::user()->phone }}</p>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection