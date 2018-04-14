@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="bungkus-beranda">
                <div class="row konten-laporan">
                    <div class="col-lg-12 col-md-12">
                        <h3>DAFTAR LAPORAN</h3></div>
                </div>
                @foreach ($laporan as $key => $value)
                    <div class="row isi-laporan">
                    <div class="col-md-4 col-sm-2 col-kiri"><img src="assets/img/pengen.jpg" class="img-fluid semua-laporan"></div>
                    <div class="col-md-8 col-sm-4">
                        <h4>{{ $value->title }}</h4>
                        <p>{{ $value->content }}</p>
                        <ul class="list-daftar-laporan">
                            <li class="laporan-tanggal">{{ $value->created_at }} </li>
                            <li class="laporan-komentar">0 Komentar</li>
                            <li class="laporan-nama">Rama </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection