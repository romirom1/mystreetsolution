@extends('layouts.master')
@section('content')
    <div id="main">
        <div id="bungkus-nav">
            <div class="nav-pertama">
                <nav class="navbar navbar-inverse nav-atas">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand navbar-link" href="#">
                                <span id="openNav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><img src="{{ asset('assets/img/logo.png') }}" id="img-logo"></a>
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"></button>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav akun-dropdown">
                                <li class="dropdown akun-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Akun saya <i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
                                    <ul class="dropdown-menu akun-dropdown" role="menu">
                                        <li role="presentation"><a href="#">Carlos Coy</a></li>
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
            <div class="nav-ketiga">
                <h2>DASHBOARD MEMBER</h2></div>
            <div id="mySidenav" class="nav-kedua sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="row row-sidebar">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-sidebar">
                        <ul class="navsidebar">
                            <li class="list-navsidebar"><a href="#" class="list-sidebar"><i class="glyphicon glyphicon-dashboard icon-sidebar"></i><span>Beranda </span> </a> </li>
                            <li class="list-navsidebar"><a href="#" class="list-sidebar"><i class="glyphicon glyphicon-list-alt icon-sidebar"></i><span>Buat Laporan</span></a> </li>
                            <li class="list-navsidebar"><a href="#" class="list-sidebar"><i class="glyphicon glyphicon-screenshot icon-sidebar"></i><span>Pantau Laporan</span></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="row row-sidebar">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-sidebar">
                        <ul class="navsidebar sidebar-back">
                            <li class="list-navsidebar"><a href="#" class="list-sidebar"><i class="glyphicon glyphicon-circle-arrow-left icon-sidebar"></i><span>Kembali </span> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content main">
            <div id="content2">
                <div class="content-member">
                    <div class="row Admin-name">
                        <div class="col-md-12 col-adminName">
                            <h3>Carlos coy</h3>
                            <p>carloscoy@gmail.com</p>
                            <p>Bergabung sejak 1 bulan yang lalu</p>
                        </div>
                    </div>
                    <div class="row row-laporan">
                        <div class="col-md-2 col-sm-3 col-xs-5 col-btn-member kiri"><a class="btn btn-default btn-member" role="button" href="#">LAPORAN ANDA</a></div>
                        <div class="col-md-2 col-sm-3 col-xs-6 col-btn-member"><a class="btn btn-default btn-member" role="button" href="#">KOMENTAR ANDA</a></div>
                    </div>
                    <div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-12">
                                <h2>Laporan Anda</h2></div>
                        </div>
                        <div class="row row-header-search">
                            <div class="col-md-12">
                                <button class="btn btn-default search-laporan-member" type="button"><i class="glyphicon glyphicon-search"></i></button>
                                <input type="search" class="search-laporan-member">
                            </div>
                        </div>
                        <div class="row row-member-laporan-judul">
                            <div class="col-md-4 col-sm-4 col-laporan-member col-judul">
                                <h3>JUDUL LAPORAN</h3></div>
                            <div class="col-md-4 col-sm-4 col-laporan-member col-komentar">
                                <h3>JUMLAH KOMENTAR</h3></div>
                            <div class="col-md-4 col-sm-4 col-laporan-member col-aksi">
                                <h3>AKSI </h3></div>
                        </div>
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-judul"><a href="#" class="member-laporan-isi">Trotoar Tidak Tersedia di jalan sikatan</a></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-komentar">
                                <p class="member-laporan-isi">0 </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-aksi"><a class="btn btn-default member-laporan-isi btn-ubah" role="button" href="#">UBAH </a><a class="btn btn-default member-laporan-isi btn-hapus" role="button" href="#">HAPUS </a></div>
                        </div>
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-judul"><a href="#" class="member-laporan-isi">Trotoar Tidak Tersedia di jalan sikatan</a></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-komentar">
                                <p class="member-laporan-isi">0 </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-aksi"><a class="btn btn-default member-laporan-isi btn-ubah" role="button" href="#">UBAH </a><a class="btn btn-default member-laporan-isi btn-hapus" role="button" href="#">HAPUS </a></div>
                        </div>
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-judul"><a href="#" class="member-laporan-isi">Trotoar Tidak Tersedia di jalan sikatan</a></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-komentar">
                                <p class="member-laporan-isi">0 </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-aksi"><a class="btn btn-default member-laporan-isi btn-ubah" role="button" href="#">UBAH </a><a class="btn btn-default member-laporan-isi btn-hapus" role="button" href="#">HAPUS </a></div>
                        </div>
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-12 col-md-12 col-isi-laporan link-bawahlaporan"><a href="#" class="member-laporan-isi link-bawahlaporan">1 </a></div>
                        </div>
                    </div>
                    <div class="statistik-laporan-member">
                        <div class="row heading-statistik-member">
                            <div class="col-md-6 col-sm-6 col-statistik">
                                <h3>Statistik </h3></div>
                            <div class="col-md-6 col-sm-6 col-statistik"><a class="btn btn-default btn-refresh-statistik" role="button" href="#"><i class="glyphicon glyphicon-refresh"></i></a></div>
                        </div>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>3 </h3>
                                <p>Total Laporan</p>
                            </div>
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>30 days</h3></div>
                            <div class="col-md-6 col-sm-3 isi-statistik">
                                <h3>Statiistike </h3></div>
                        </div>
                        <div class="row isi-statistik-member row-ke2">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>3 </h3>
                                <p>Total Laporan</p>
                            </div>
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>30 days</h3></div>
                            <div class="col-md-6 col-sm-3 isi-statistik">
                                <h3>Statistike </h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection