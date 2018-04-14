@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="row row-panduan" id="myButton">
                <div class="col-md-12 col-btn-panduan">
                    <ul class="list-tombol">
                        <li class="list-btn-panduan">
                            <button onclick="tutorial()" class="btn-panduan btn-tutorial btn-active-panduan">TUTORIAL </button>
                            <button onclick="faq()" class="btn-panduan btn-faq">F.A.Q </button>
                            <button onclick="syarat()" class="btn-panduan btn-syarat">SYARAT </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bungkus-panduan">
                <div class="row konten-panduan">
                    <div class="col-md-12" id="isine-kontent">
                        <h3>Tutorial Menggunakan Mystreet Solution</h3><p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar</p><p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection