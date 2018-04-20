@extends('layouts.master')
@section('content')
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
                            <div class="col-lg-4 col-md-4 col-sm-4 admin-isi-laporan"><a class="btn btn-default member-laporan-isi btn-terima" role="button" href="#">TERIMA </a>
                                <button class="btn btn-default member-laporan-isi btn-tolak" data-toggle="modal" data-target="#modalForm">TOLAK </button>
                            </div>
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
                            <div class="col-lg-4 col-md-4 col-sm-4 admin-isi-laporan"><a class="btn btn-default member-laporan-isi btn-terima" role="button" href="#">TERIMA </a>
                                <button class="btn btn-default member-laporan-isi btn-tolak" data-toggle="modal" data-target="#modalForm">TOLAK </button>
                            </div>
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
                            <div class="col-lg-4 col-md-4 col-sm-4 admin-isi-laporan"><a class="btn btn-default member-laporan-isi btn-terima" role="button" href="#">TERIMA </a>
                                <button class="btn btn-default member-laporan-isi btn-tolak" data-toggle="modal" data-target="#modalForm">TOLAK </button>
                            </div>
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
                    <!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Tolak Laporan</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="masukkanPesan">Pesan</label>
                        <textarea class="form-control" id="masukkanPesan" placeholder="Masukkan pesan Anda"></textarea>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimContactForm()">KIRIM</button>
            </div>
        </div>
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
                            <div class="col-lg-5 col-md-6 isi-statistik">
                                    <div class="bungkuse-statistik">
        <canvas id="Statistik"></canvas>
    </div>
<script src="assets/js/statistik.js"> </script>
                            </div>
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
        </div>
@endsection