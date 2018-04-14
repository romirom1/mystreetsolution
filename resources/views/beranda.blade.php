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
                        <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4 col-kiri"><img src="{{asset('assets/img/pengen.jpg')}}" class="img-fluid img-beranda"></div>
                        <div class="col-md-8 col-sm-8">
                        <h4>Laporan Jalan Buntu</h4>
                        <p><em>Lorem ipsum</em>, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat
                            tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen </p>
                        </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4 col-kiri"><img src="{{asset('assets/img/pengen.jpg')}}" class="img-fluid img-beranda"></div>
                        <div class="col-md-8 col-sm-8">
                        <h4>Laporan Jalan Buntu</h4>
                        <p><em>Lorem ipsum</em>, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat
                            tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen </p>
                        </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4 col-kiri"><img src="{{asset('assets/img/pengen.jpg')}}" class="img-fluid img-beranda"></div>
                        <div class="col-md-8 col-sm-8">
                        <h4>Laporan Jalan Buntu</h4>
                        <p><em>Lorem ipsum</em>, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat
                            tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>KATEGORI LAPORAN</h3>
                        <ul class="list-group">
                            <li class="list-group-item nama-list jln-rusak">
                                <a href="#"> <span>Jalan Rusak</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                            <li class="list-group-item nama-list jln-lubang">
                                <a href="#"> <span>Jalan Berlubang</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                            <li class="list-group-item nama-list marka-jln">
                                <a href="#"> <span>Marka Jalan</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                            <li class="list-group-item nama-list rambu-lalin">
                                <a href="#"> <span>Rambu Lalu Lintas</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                            <li class="list-group-item nama-list lampu-lalin">
                                <a href="#"> <span>Lampu Lalu Lintas</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="">LIHAT </a></li>
                            <li class="list-group-item pmbts-jln">
                                <a href="#"> <span>Pembatas Jalan</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                            <li class="list-group-item nama-list trotoar">
                                <a href="#"> <span>Trotoar </span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                            <li class="list-group-item nama-list terbengkalai">
                                <a href="#"> <span>Kendaraan Terbengkalai</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                            <li class="list-group-item nama-list lampu-jln">
                                <a href="#"> <span>Lampu Penerangan Jalan</span></a><a class="btn btn-default btn-lihatlaporan" role="button" href="#">LIHAT </a></li>
                        </ul>
                        <h3>STATISTIK LAPORAN</h3>
                        <ul id="list-chart">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-6">
                                    <li class="chart-masuk">40.XXX </li>
                                    <li class="ket-masuk">LAPORAN MASUK</li>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <li class="chart-keluar">23.XXX </li>
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