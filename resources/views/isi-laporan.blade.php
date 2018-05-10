@extends('layouts.master')
@section('content')
    <div class="content">
        <div id="content2">
            <div class="bungkus-beranda">
                <div class="row judul-laporan">
                    <div class="col-lg-12 col-md-12">
                        <h3>{{ $laporan->title }}</h3><span><i class="glyphicon glyphicon-pushpin lokasi"></i> {{ $laporan->location }}</span>
                        <br>
                        <span>
                            @if($laporan->status==="belum")
                            <i class="glyphicon glyphicon-bell notif" style="color:black"></i> Laporan Belum Di Terima</span>
                            @elseif($laporan->status==="terima")
                            <i class="glyphicon glyphicon-bell notif" style="color:yellow"></i> Laporan Sudah Di Terima</span>
                            @elseif($laporan->status==="tolak")
                            <i class="glyphicon glyphicon-bell notif" style="color:red"></i> Laporan di Tolak</span>
                            @elseif($laporan->status==="lanjut")
                            <i class="glyphicon glyphicon-bell notif" style="color:green"></i> Laporan Sedang di Tindak Lanjuti</span>
                            @else
                            <i class="glyphicon glyphicon-bell notif" style="color:blue"></i> Laporan Telah Tuntas</span>
                            @endif
                    </div>
                </div>
                <div class="row isi-laporan">
                    <div class="col-md-8 col-sm-8" style="word-wrap: break-word;">
                        <p>{{ $laporan->content }}</p>
                        
                    </div>
                    <div class="col-md-4 col-sm-4 col-kiri"><img src="{{ asset('photo') }}/{{ $laporan->photo }}" class="img-fluid isi-laporan"></div>
                    <div class="col-md-12 col-sm-12">
                                <div id="map" style="height:400px;width:100%"></div>
                            </div>
                    <div class="bottom-artikel"><span class="kategorine">Kategori : <a href="{{ route('kategori.laporan',['id'=> $laporan->categories_id]) }}">{{ $kategori->name }}</a></span><span class="posted">Diposting oleh {{ $user->name }} pada {{ $laporan->created_at }}</span></div>
                </div>
                <div class="row row-sosmed">
                    
                    <div class="col-md-6 sosial-share">
                        <h3>Bagikan Laporan</h3></div>
                    <div class="col-md-6 sosial-share">
                        <div class="share-icon-wrapper"><a target="_blank" class="btn btn-default btn-social btn-twitter" role="button" href="https://twitter.com/intent/tweet/?text=MyStreetReport&amp;url={{ Request::url() }}"><span class="fa fa-twitter"> </span></a><a target="_blank" class="btn btn-default btn-social btn-facebook" role="button" href="https://facebook.com/sharer/sharer.php?u={{ Request::url() }}"><span class="fa fa-facebook"> </span></a>
                            <a target="_blank"
                            class="btn btn-default btn-social btn-instagram" role="button" href="https://plus.google.com/share?url={{ Request::url() }}"><span class="fa fa-google"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="bungkus-komentar">
                    <div class="bungkus-submit">
                        <div class="row heading-komentar">
                            <div class="col-md-12">
                                <h3>{{ $jumlahkomentar }} komentar</h3></div>
                        </div>
                        <div class="row submit-komentar">
                            <div class="col-md-12">
                                <form class="form-komentar" method="post" action="{{ route('tambah.komentar') }}">
                                    {{ csrf_field() }}
                                    <textarea class="form-control text-komentar" name="content" required></textarea>
                                    <input class="form-control" type="hidden" name="report_id" value="{{ $laporan->id }}">
                                    <button class="btn btn-default btn-komentar" type="submit"> <i class="glyphicon glyphicon-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if($jumlahkomentar!==0)
                        @foreach ($komentar as $key=>$value)
                        <div class="row isine-komentar">
                            <div class="col-md-1"><img src="
                                    @if ($value->photo==="")
                                        {{ asset('assets/img/avatar_2x.png') }}
                                    @else
                                        {{ asset('photo')}}/{{ $value->photo }}
                                    @endif" class="img-fluid img-komentar"></div>
                            <div class="col-md-9" style="word-wrap: break-word;"><span class="nama-member">{{ $value->name }} </span><span class="waktu-komentar">{{ $value->created_at }}</span>
                            <p>{{ $value->content }}</p>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        function isiMap(){
            var pos = {
                    lat: {{ $longlat[0] }},
                    lng: {{ $longlat[1] }}
                };
            var map = new google.maps.Map(document.getElementById('map'), {
                    center: pos,
                    zoom: 20
            });
            var infoWindow = new google.maps.InfoWindow;
            var geocoder = new google.maps.Geocoder;
            geocoder.geocode({'location': pos}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) {
              map.setZoom(20);
              var marker = new google.maps.Marker({
                position: pos,
                map: map
              });
              infoWindow.setContent(results[1].formatted_address);
              infoWindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI81mclRbMJe5WGfBZJvwWpxJA18X06po&callback=initMap">
    </script>
@endsection