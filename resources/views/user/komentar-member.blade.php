@extends('layouts.master')
@section('content')
<div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-12">
                                <h2>Komentar Masuk</h2></div>
                        </div>
                        <br>
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-laporan-member col-judul">
                                <h4>TANGGAL </h4></div>
                            <div class="col-md-4 col-sm-4 col-laporan-member col-komentar">
                                <h4>ISI KOMENTAR</h4></div>
                            <div class="col-md-2 col-sm-2 col-laporan-member col-komentar">
                                <h4>PADA LAPORAN</h4></div>
                            <div class="col-md-4 col-sm-4 col-laporan-member col-aksi">
                                <h4>AKSI </h4></div>
                        </div>
                        @foreach ($komentar as $element)
                        	<div class="row row-member-laporan-judul">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-isi-laporan isi-judul">
                                <p class="member-laporan-isi">{{ $element->created_at }}</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-komentar"><a href="{{ route('isi.laporan',['id'=> $element->report_id]) }}" class="member-laporan-isi">{{ $element->content }}</a></div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-isi-laporan isi-komentar"><a href="{{ route('isi.laporan',['id'=> $element->report_id]) }}" class="member-laporan-isi">Jalan di jalan ...</a></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-aksi"><a class="btn btn-default member-laporan-isi btn-hapus" role="button" href="{{ route('delete.komentar',['id'=> $element->id]) }}">HAPUS </a></div>
                        </div>
                        @endforeach
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-12 col-md-12 col-isi-laporan link-bawahlaporan">{{ $komentar->links() }}
                            </div>
                        </div>
                    </div>
@endsection