@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="row row-panduan" id="myButton">
                <div class="col-md-12 col-btn-panduan">
                    <ul class="list-tombol">
                        <li class="list-btn-panduan">
                            <button onclick="tutorial1()" class="btn-panduan btn-tutorial btn-active-panduan">TUTORIAL </button>
                            <button onclick="faq1()" class="btn-panduan btn-faq">F.A.Q </button>
                            <button onclick="syarat1()" class="btn-panduan btn-syarat">SYARAT </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bungkus-panduan">
                <div class="row konten-panduan">
                    <div class="col-md-12" id="isine-kontent">
                        <h3>Pembuatan Akun</h3><p><ul style=list-style:decimal outside none;><li>Klik tombol Register di sudut kanan atas untuk membuat akun baru.</li><li>Isi formulir berisi data diri Anda dengan lengkap dan benar, meliputi email, nama, nomor telepon, tanggal lahir, dan password.</li><li>Beri tanda centang pada Syarat & Ketentuan. Pastikan Anda sudah membacanya.</li><li>Langkah terakhir yaitu klik tombol Daftar. Anda akan diarahkan pada Dashboard Member yang berisi menu untuk membuat dan memantau laporan.</li></ul></p><br><h3>Pembuatan Laporan</h3><p><ul style=list-style:decimal outside none;><li>Login dan masuk ke dashboard member.</li><li>Di side menu, pilih menu Buat Laporan.</li><li>Isi formulir yang meliputi judul laporan, kategori, lokasi, deskripsi, dan bukti foto kerusakan yang dilaporkan.</li><li>Klik kirim.</li><li>5.	Laporan masih harus menunggu untuk diterima atau pun ditolak oleh admin. Apabila laporan ditolak, akan muncul notifikasi di menu Notifikasi Anda</li></ul></p><br><h3>Pemantauan Laporan</h3><p><ul style=list-style:decimal outside none;><li>Login dan masuk ke dashboard member.</li><li>Di side menu, pilih menu Pantau Laporan</li><li>Cari laporan Anda di tabel yang tersedia. Lihat statusnya, apabila tertera “Ditindaklanjuti” maka laporan sedang diproses dan dikoordinasikan dengan instansi terkait, dan apabila tertera “Tuntas” maka laporan telah selesai dilaksanakan.</li></ul></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection