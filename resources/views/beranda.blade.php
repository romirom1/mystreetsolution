@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="bungkus-beranda">
                <div class="container-fluid">
                <div class="row konten-beranda">
                    <div class="col-md-6 col-sm-6">
                        <div class="col-md-12 col-sm-12">
                        <h3>LAPORAN TERBARU</h3>
                        </div>
                        @foreach ($laporan as $element)
                        <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4 col-kiri"><img src="{{ asset('photo') }}/{{ $element->photo }}" class="img-fluid img-beranda" style="width: 200px; height: 100px;"></div>
                        <div class="col-md-8 col-sm-8" style="word-wrap: break-word;">
                        <h4><a href="{{ route('isi.laporan',['id'=> $element->id]) }}">{{ $element->title }}</a></h4>
                        <p><em>{{ $element->title}}</em>, {{ $element->content }}</p>
                        </div>
                        </div>
                        <div class="col-md-12 col-sm-12"><br></div>
                        @endforeach
                        <div class="col-md-12 col-sm-12"><a class="btn btn-default btn-lihatsemua" role="button" href="{{ route('semua.laporan') }}">LIHAT SEMUA LAPORAN</a> </div>    
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>KATEGORI LAPORAN</h3>
                        <ul class="list-group">
                            <li class="list-group-item nama-list jln-rusak">
                                <a href="{{ route('kategori.laporan',['id'=> 1]) }}"> <span>Jalan Rusak</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=>1]) }}">LIHAT </a></li>
                            <li class="list-group-item nama-list jln-lubang">
                                <a href="{{ route('kategori.laporan',['id'=> 2]) }}"> <span>Jalan Berlubang</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=> 2]) }}">LIHAT </a></li>
                            <li class="list-group-item nama-list marka-jln">
                                <a href="{{ route('kategori.laporan',['id'=> 3]) }}"> <span>Marka Jalan</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=>3]) }}">LIHAT </a></li>
                            <li class="list-group-item nama-list rambu-lalin">
                                <a href="{{ route('kategori.laporan',['id'=> 4]) }}"> <span>Rambu Lalu Lintas</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=> 4]) }}">LIHAT </a></li>
                            <li class="list-group-item nama-list lampu-lalin">
                                <a href="{{ route('kategori.laporan',['id'=> 5]) }}"> <span>Lampu Lalu Lintas</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=> 5]) }}">LIHAT </a></li>
                            <li class="list-group-item pmbts-jln">
                                <a href="{{ route('kategori.laporan',['id'=> 6]) }}"> <span>Pembatas Jalan</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=> 6]) }}">LIHAT </a></li>
                            <li class="list-group-item nama-list trotoar">
                                <a href="{{ route('kategori.laporan',['id'=> 7]) }}"> <span>Trotoar </span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=> 7]) }}">LIHAT </a></li>
                            <li class="list-group-item nama-list terbengkalai">
                                <a href="{{ route('kategori.laporan',['id'=> 8]) }}"> <span>Kendaraan Terbengkalai</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=> 8]) }}">LIHAT </a></li>
                            <li class="list-group-item nama-list lampu-jln">
                                <a href="{{ route('kategori.laporan',['id'=> 9]) }}"> <span>Lampu Penerangan Jalan</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="{{ route('kategori.laporan',['id'=> 9]) }}">LIHAT </a></li>
                        </ul>
                        <h3>STATISTIK LAPORAN</h3>
                        <ul id="list-chart">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-6">
                                    <li class="chart-masuk">{{ $count1 }} </li>
                                    <li class="ket-masuk">LAPORAN MASUK</li>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <li class="chart-keluar">{{ $count2 }}</li>
                                    <li class="ket-tuntas">LAPORAN TUNTAS</li>
                                </div>
                            </div>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection