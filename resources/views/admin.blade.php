@extends('layouts.master')
@section('content')
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
                                        <li role="presentation"><a href="{{ route('admin.dashboard') }}">{{ Auth()->user()->name }} </a></li>
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
                <h2>DASHBOARD ADMIN</h2></div>
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
                            <h3>{{ Auth()->user()->name }}</h3>
                            <p>{{ Auth()->user()->email }}</p>
                            <p>08100000000000 </p>
                        </div>
                    </div>
                    <div class="row row-laporan">
                        <div class="col-md-2 col-sm-3 col-xs-5 col-btn-member kiri"><a class="btn btn-default btn-member" role="button" href="#">LAPORAN MASUK</a></div>
                        <div class="col-md-2 col-sm-3 col-xs-6 col-btn-member"><a class="btn btn-default btn-member" role="button" href="#">KOMENTAR MASUK</a></div>
                    </div>
                    <div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-12">
                                <h2>Laporan Masuk</h2></div>
                        </div>
                        <div class="row row-header-search">
                            <div class="col-md-12">
                                <button class="btn btn-default search-laporan-member" type="button"><i class="glyphicon glyphicon-search"></i></button>
                                <input type="search" class="search-laporan-member">
                            </div>
                        </div>
                        <div class="row admin-laporan-judul">
                            <div class="col-md-2 col-sm-2 col-laporan-admin col-judul">
                                <h4>JUDUL LAPORAN</h4></div>
                            <div class="col-md-2 col-sm-2 col-laporan-admin col-kategori">
                                <h4>KATEGORI </h4></div>
                            <div class="col-md-2 col-sm-2 col-laporan-admin col-tanggal">
                                <h4>TANGGAL MASUK</h4></div>
                            <div class="col-md-2 col-sm-2 col-laporan-admin col-lokasi">
                                <h4>LOKASI LAPORAN</h4></div>
                            <div class="col-md-4 col-sm-4 col-laporan-admin">
                                <h4>AKSI </h4></div>
                        </div>
                        <div class="row admin-laporan-isi">
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-judul"><a href="#" class="member-laporan-isi">Trotoar Tidak Tersedia..</a></div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-kategori">
                                <p class="member-laporan-isi">Trotoar </p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-tanggal">
                                <p class="member-laporan-isi">13/04/2018 </p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-lokasi">
                                <p class="member-laporan-isi">Manukan </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 admin-isi-laporan"><a class="btn btn-default member-laporan-isi btn-terima" role="button" href="#">TERIMA </a><a class="btn btn-default member-laporan-isi btn-tolak" role="button" href="#">TOLAK </a></div>
                        </div>
                        <div class="row admin-laporan-isi">
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-judul"><a href="#" class="member-laporan-isi">Lubang Besar di daerah,,,</a></div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-kategori">
                                <p class="member-laporan-isi">Jalan Rusak</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-tanggal">
                                <p class="member-laporan-isi">13/04/2018 </p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-lokasi">
                                <p class="member-laporan-isi">Jambangan Timur</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 admin-isi-laporan"><a class="btn btn-default member-laporan-isi btn-terima" role="button" href="#">TERIMA </a><a class="btn btn-default member-laporan-isi btn-tolak" role="button" href="#">TOLAK </a></div>
                        </div>
                        <div class="row admin-laporan-isi">
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-judul"><a href="#" class="member-laporan-isi">Tolong perbanyak penerangan</a></div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-kategori">
                                <p class="member-laporan-isi">Lampu penerangan Jalan</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-tanggal">
                                <p class="member-laporan-isi">13/04/2018 </p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 admin-isi-laporan col-isi-lokasi">
                                <p class="member-laporan-isi">Golf Marinir</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 admin-isi-laporan"><a class="btn btn-default member-laporan-isi btn-terima" role="button" href="#">TERIMA </a><a class="btn btn-default member-laporan-isi btn-tolak" role="button" href="#">TOLAK </a></div>
                        </div>
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-12 col-md-12 col-isi-laporan link-bawahlaporan"><a href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi">PREV </a><a href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi">1 </a><a href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi">2 </a>
                                <a
                                href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi khusus">. </a><a href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi khusus">. </a><a href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi khusus">. </a><a href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi">10 </a>
                                    <a
                                    href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi">NEXT </a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-isi-laporan link-bawahlaporan"><a href="#" class="member-laporan-isi link-bawahlaporan link-admin-isi">TAMPILKAN SEMUA</a></div>
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
                                <h3>30 </h3>
                                <p>Total Laporan Masuk</p>
                            </div>
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>30 days</h3></div>
                            <div class="col-md-6 col-sm-3 isi-statistik">
                                <h3>Statistike </h3></div>
                        </div>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>10 </h3>
                                <p>Total Laporan ditindak lanjuti</p>
                            </div>
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>30 days</h3></div>
                            <div class="col-md-6 col-sm-3 isi-statistik">
                                <h3>Statistike </h3></div>
                        </div>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>20 </h3>
                                <p>Total Laporan Tuntas</p>
                            </div>
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>30 days</h3></div>
                            <div class="col-md-6 col-sm-3 isi-statistik">
                                <h3>Statistike </h3></div>
                        </div>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>15 </h3>
                                <p>Total Komentar</p>
                            </div>
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <h3>30 days</h3></div>
                            <div class="col-md-6 col-sm-3 isi-statistik">
                                <h3>Statistike </h3></div>
                        </div>
                    </div>
                </div>
            </div>
@endsection