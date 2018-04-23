@extends('layouts.master')
@section('content')
                    <div class="bungkus-login">
                        <div class="row row-info">
                            <div class="col-md-12"><i class="fa fa-book icone"></i>
                                <p class="text-left">Edit Laporan Anda</p>
                            </div>
                        </div>
                        <div class="row row-isiform">
                            <div class="col-md-12 heading-form">
                                <h1 class="text-center">ISI FORM LAPORAN</h1></div>
                        </div>
                        <form id="formulir-register" class="bootstrap-form-with-validation" method="post" enctype="multipart/form-data" action ="{{ route('update.laporan') }}">
                             {{ csrf_field() }}
                            <input class="form-control" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input class="form-control" type="hidden" name="id" value="{{ $laporan->id }}">
                            <div class="row row-email{{ $errors->has('title') ? ' has-error' : '' }}">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Judul Laporan</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input value="{{ $laporan->title }}" class="form-control" type="text" placeholder="Judul" name="title" required autofocus>
                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>error : judul tidak sesuai dengan ketentuan</strong>
                                    </span>
                                @endif
                                </div>
                            </div> 
                            <div class="row row-lokasi{{ $errors->has('categories_id') ? ' has-error' : '' }}">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Kategori</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                <select name="categories_id" class="form-control select-option">
                                    @foreach($kategori as $category)
                                        @if ($laporan->categories_id == $category->id)
                                            <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row row-lokasi">
                                <div id="map" style="height:400px;width:100%"></div>
                            </div>
                            <input id="longlat" type="hidden" name="longlat"> 
                            <div class="row row-lokasi{{ $errors->has('location') ? ' has-error' : '' }}">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Lokasi </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input id="dapatkan-lokasi" class="form-control" type="text" placeholder="Sedang mendapatkan lokasi" name="location" required autofocus>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 login-button">
                                    <button class="btn btn-primary" style="margin-top:5px" onClick=initMap() type="button">Dapatkan Lokasi Saat Ini</button>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 login-button">
                                    <button class="btn btn-primary" style="margin-top:5px" onClick=getLocation() type="button">Cari Lokasi</button>
                                </div>
                            </div>
                            <div class="row row-deskripsi{{ $errors->has('content') ? ' has-error' : '' }}">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Deskripsi </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <textarea class="form-control" placeholder="Deskripsi" name="content" required autofocus>{{ $laporan->content }}</textarea>
                                </div>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>error : deskripsi tidak sesuai ketentuan</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row row-foto{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Unggah Foto</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 foto-input">
                                    <input type="file" name="photo" accept="image/*" autofocus>
                                    @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>error : masukkan file gambar</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="row row-button">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login-button">
                                    <button class="btn btn-primary login-button" type="submit">KIRIM </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var pos;
            function editMap(){
                pos = {
                    lat: {{ $longlat[0] }},
                    lng: {{ $longlat[1] }}
                };
                document.getElementById('longlat').value=position.coords.latitude+','+position.coords.longitude;
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: pos,
                    zoom: 20
                });
            }
            function initMap() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            document.getElementById('longlat').value=position.coords.latitude+','+position.coords.longitude;
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
              document.getElementById('dapatkan-lokasi').value=results[1].formatted_address;
              infoWindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }
      function getLocation(){
        var address=document.getElementById('dapatkan-lokasi').value;

            var geocoder = new google.maps.Geocoder;
        geocoder.geocode( { 'address': address}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();
                    document.getElementById('longlat').value=latitude+','+longitude;
                }
                var myLatLng = {lat: latitude, lng: longitude};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 20,
                    center: myLatLng
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                });

            });
      }
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

</script>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI81mclRbMJe5WGfBZJvwWpxJA18X06po&callback=initMap">
    </script>
@endsection