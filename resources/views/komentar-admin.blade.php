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
                                        <li role="presentation"><a href="{{ route('admin.dashboard') }}">Dashboard </a></li>
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
<div id="main">
        <div id="bungkus-nav">
            <div class="nav-ketiga">
                <h2><center>DASHBOARD ADMIN</center></h2></div>
            <div id="mySidenav" class="nav-kedua sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="row row-sidebar">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-sidebar">
                        <ul class="navsidebar">
                            <li class="list-navsidebar"><a href="{{ route('admin.dashboard') }}" class="list-sidebar"><i class="glyphicon glyphicon-dashboard icon-sidebar"></i><span>Beranda </span> </a> </li>
                            <li class="list-navsidebar"><a href="{{ route('admin.kelola.laporan') }}" class="list-sidebar"><i class="glyphicon glyphicon-screenshot icon-sidebar"></i><span>Kelola Laporan</span></a> </li>
                            <li class="list-navsidebar"><a href="{{ route('admin.kelola.member') }}" class="list-sidebar"><i class="glyphicon glyphicon-list-alt icon-sidebar"></i><span>Kelola Member</span></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="row row-sidebar">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-sidebar">
                        <ul class="navsidebar sidebar-back">
                            <li class="list-navsidebar"><a href="{{ route('beranda') }}" class="list-sidebar"><i class="glyphicon glyphicon-circle-arrow-left icon-sidebar"></i><span>Kembali Ke Web </span> </a> </li>
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
                        </div>
                    </div>
                    <div class="row row-laporan">
                        <div class="col-md-2 col-sm-3 col-xs-5 col-btn-member kiri"><a class="btn btn-default btn-member" role="button" href="{{ route('admin.dashboard') }}">LAPORAN MASUK</a></div>
                        <div class="col-md-2 col-sm-3 col-xs-6 col-btn-member"><a class="btn btn-default btn-member" role="button" href="">KOMENTAR MASUK</a></div>
                    </div>
                    <div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-6">
                                <h2>Komentar Masuk</h2></div>
                            <div class="col-md-6 col-sm-6 col-statistik"><a class="btn btn-default btn-refresh-statistik" role="button" href=""><i class="glyphicon glyphicon-refresh"></i></a></div>
                        </div>
                        <br>
                        <div class="table-responsive tabel-komentar">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Isi Komentar </th>
                                        <th>Pada Laporan </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($komentar as $element)
                                    <tr>
                                        <td>{{ $element->created_at }}</td>
                                        <td><a target="blank" href="{{ route('isi.laporan',['id'=> $element->report_id]) }}" class="member-laporan-isi">{{ $element->content }}</a></td>
                                        <td><a target="blank" href="{{ route('isi.laporan',['id'=> $element->report_id]) }}" class="member-laporan-isi">{{App\Report::find($element->report_id)->title}}</a></td>
                                        <td>
                                            <form method="post" action="{{ route('admin.komentar.submit') }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $element->id }}">
                                                <button class="btn btn-danger member-laporan-isi btn-hapus" type="submit" >HAPUS </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4">
                                            @if($komentar->items()===[])
                                            Oooops ..!!! Belum ada komentar
                                            @else
                                            {!! $komentar->links() !!}
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
@endsection