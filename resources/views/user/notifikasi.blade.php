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
                                    @if (App\Admin::find($element->admin_id)->photo==="")
                                        {{ asset('assets/img/avatar_2x.png') }}
                                    @else
                                        {{ asset('photo')}}/{{ App\Admin::find($element->admin_id)->photo }}
                                    @endif" class="foto-notif"></div>
                            <div class="col-md-10 notif-isi">
                                <h3>{{ App\Admin::find($element->admin_id)->name }}</h3>
                                <a href="#"> <span class="judul-laporan-notif">"{{ $element->title }}"</span></a>
                                <div class="notif-alasan-penolakan">
                                    <p>{{ $element->content }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
@endsection