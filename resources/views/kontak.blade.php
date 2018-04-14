@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div id="bungkus-form">
                <div class="row">
                    <div class="col-md-12" id="text-keterangan">
                        <h1><strong>HUBUNGI TIM MYSTREET SOLUTION</strong></h1>
                        <p><em>Lorem ipsum</em>, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat
                            tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen </p>
                    </div>
                </div>
                <form id="formulir" class="bootstrap-form-with-validation">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-nama">
                            <label class="nama"><strong>Nama</strong></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-nama">
                            <input class="form-control text-nama" type="text" placeholder="Nama">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-email">
                            <label class="email">Email</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-email">
                            <input class="form-control text-email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-judul">
                            <label class="judul">Judul Pesan</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-judul">
                            <input class="form-control text-judul" type="text" placeholder="Judul Pesan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-pesan">
                            <label class="isipesan">Isi Pesan</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-pesan">
                            <textarea class="form-control text-isipesan" placeholder="Isi Pesan"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-button">
                            <button class="btn btn-primary submit-form" type="submit">KIRIM PESAN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection