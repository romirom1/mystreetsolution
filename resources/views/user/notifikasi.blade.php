@extends('layouts.master')
@section('content')
<div class="row notif-member">
                            <div class="notifikasi-member">
                        <div class="row heading-notifikasi">
                            <div class="col-md-12">
                                <h2>Notifikasi Anda</h2></div>
                        </div>
                        @foreach ($pesan as $element)
                            <div class="row notif-member">
                            <div class="col-md-1"><img src="
                                    @if (Auth::user()->photo===null)
                                        {{ asset('assets/img/avatar_2x.png') }}
                                    @else
                                        {{ asset('photo')}}/{{ Auth::user()->photo }}
                                    @endif" class="foto-notif"></div>
                            <div class="col-md-10 notif-isi">
                                <h3>{{ Auth::user()->name }}</h3>
                                <p class="format-notif">Laporan anda yang berjudul</p>
                                <a href="#"> <span class="judul-laporan-notif">"Jalan Berlubang di jalan depan"</span></a>
                                <p class="format-notif">telah ditolak karena,</p>
                                <div class="notif-alasan-penolakan">
                                    <p>"Sobat pria, apakah Anda sudah pernah ditolak oleh wanita? Anda mungkin bertanya-tanya, “Saya sudah melakukan pendekatan yang begitu intensif dan strategik terhadap si wanita, tapi kenapa saya masih juga ditolak? Saya
                                        kurang apa? Mengapa cinta saya ditolak?” sambil mereka-reka setiap langkah yang sudah Anda ambil.Secara mendasar, kegagalan proses pendekatan bertumbuh dari dua bibit kecil, yaitu takut gagal dan tak mau gagal.
                                        Namun secara umum, berikut adalah beberapa penyebab kegagalan PDKT yang paling banyak masuk ke kotak""Sobat pria, apakah Anda sudah pernah ditolak oleh wanita? Anda mungkin bertanya-tanya, “Saya sudah melakukan
                                        pendekatan yang begitu intensif dan strategik terhadap si wanita, tapi kenapa saya masih juga ditolak? Saya kurang apa? Mengapa cinta saya ditolak?” sambil mereka-reka setiap langkah yang sudah Anda ambil.Secara
                                        mendasar, kegagalan proses pendekatan bertumbuh dari dua bibit kecil, yaitu takut gagal dan tak mau gagal. Namun secara umum, berikut adalah beberapa penyebab kegagalan PDKT yang paling banyak masuk ke kotak" </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
@endsection