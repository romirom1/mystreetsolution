@extends('layouts.master')
@section('content')
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
                        @foreach ($laporan as $laporans)
                            <div class="row row-member-laporan-judul">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-judul"><a href="#" class="member-laporan-isi">{{ $laporans->title }}</a></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-komentar">
                                <p class="member-laporan-isi">0 </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-isi-laporan isi-aksi"><a class="btn btn-default member-laporan-isi btn-ubah" role="button" href="#">UBAH </a><a class="btn btn-default member-laporan-isi btn-hapus" role="button" href="{{ route('delete.report',['id'=> $laporans->id]) }}">HAPUS </a></div>
                            </div>
                        @endforeach
                        <div class="row row-member-laporan-judul">
                            <div class="col-lg-12 col-md-12 col-isi-laporan link-bawahlaporan">{!! $laporan->links() !!}</div>
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
                                <h3>{{ $count }} </h3>
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