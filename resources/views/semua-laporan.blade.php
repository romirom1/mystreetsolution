@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="bungkus-beranda">
                <div class="row konten-laporan">
                    <div class="col-lg-12 col-md-12">
                        <h3>DAFTAR LAPORAN</h3></div>
                </div>
                @foreach ($laporan as $value)
                    <div class="row isi-laporan">
                    <div class="col-md-4 col-sm-2 col-kiri"><img src="{{ asset('photo') }}/{{ $value->photo }}" class="img-fluid semua-laporan"></div>
                    <div class="col-md-8 col-sm-4 " style="word-wrap: break-word;">
                        <h4><a href="{{ route('isi.laporan',['id'=> $value->id]) }}">{{ $value->title }}</a></h4>
                            {{ $value->content }}
                    </div>
                    <div class="col-md-12 col-sm-12" style="float:bottom">
                        <ul class="list-daftar-laporan" style="float:right">
                            <li class="laporan-komentar">Waktu : {{ $value->created_at }} </li>
                            <li class="laporan-komentar">{{ App\Comment::all()->where('report_id',$value->id)->count() }} Komentar</li>
                            <li class="laporan-nama">Pelapor : {{ $value->name }} </li>
                        </ul></div>
                </div>
                @endforeach
                <div class="row row-member-laporan-judul" style="text-align:center">
                            <div class="col-lg-12 col-md-12" >{!! $laporan->links() !!}</div>
                        </div>
            </div>
        </div>
    </div>
@endsection