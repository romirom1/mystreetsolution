@extends('layouts.master')
@section('content')
        <div id="bungkus-nav">
            <div class="nav-pertama">
                <nav class="navbar navbar-inverse nav-atas">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand navbar-link" href="#">
                                <span id="openNav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><img src="{{ asset('assets/img/logo.png') }}" id="img-logo"></a>
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"></button>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav akun-dropdown">
                                <li class="dropdown akun-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Akun saya <i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
                                    <ul class="dropdown-menu akun-dropdown" role="menu">
                                        <li role="presentation"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        <li role="presentation"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
<div id="main">
        <div id="bungkus-nav">
            <div class="nav-ketiga">
                <h2><center>DASHBOARD ADMIN</center></h2></div>
            <div id="mySidenav" class="nav-kedua sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="row row-sidebar">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-sidebar">
                        <ul class="navsidebar">
                            <li class="list-navsidebar"><a href="{{ route('admin.dashboard') }}" class="list-sidebar"><i class="glyphicon glyphicon-dashboard icon-sidebar"></i><span>Beranda </span> </a> </li>
                            <li class="list-navsidebar"><a href="{{ route('admin.kelola.laporan') }}" class="list-sidebar"><i class="glyphicon glyphicon-screenshot icon-sidebar"></i><span>Kelola Laporan</span></a> </li>
                            <li class="list-navsidebar"><a href="{{ route('admin.kelola.member') }}" class="list-sidebar"><i class="glyphicon glyphicon-list-alt icon-sidebar"></i><span>Kelola Member</span></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="row row-sidebar">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-sidebar">
                        <ul class="navsidebar sidebar-back">
                            <li class="list-navsidebar"><a href="{{ route('beranda') }}" class="list-sidebar"><i class="glyphicon glyphicon-circle-arrow-left icon-sidebar"></i><span>Kembali Ke Web </span> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content main">
            <div id="content2">
                <div class="content-member">
                    <div class="row Admin-name">
                        <div class="col-md-12 col-adminName">
                            <h3>{{ Auth()->user()->name }}</h3>
                            <p>{{ Auth()->user()->email }}</p>
                        </div>
                    </div>
                    <div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-6">
                                <h2>Kelola Laporan</h2></div>
                            <div class="col-md-6 col-sm-6 col-statistik"><a class="btn btn-default btn-refresh-statistik" role="button" href=""><i class="glyphicon glyphicon-refresh"></i></a></div>
                        </div>
                        <br>
                        <div class="table-responsive tabel-komentar">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 17%">Judul Laporan </th>
                                        <th>Kategori </th>
                                        <th style="width: 10%">Waktu Masuk </th>
                                        <th style="width: 40%">Lokasi Laporan </th>
                                        <th>Status </th>
                                        <th>Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $laporans)
                                    <tr>
                                        <td><a href="{{ route('isi.laporan',['id'=> $laporans->id]) }}" class="member-laporan-isi">{{ $laporans->title }}</a></td>
                                        <td>{{ App\Category::find($laporans->categories_id)->name }}</td>
                                        <td>{{ $laporans->created_at }}</td>
                                        <td>{{ $laporans->location }}</td>
                                        <td>{{ $laporans->status }}</td>
                                        <td>
                                        <form class="form-ok" method="post" action="{{ route('admin.kelola.laporan.submit') }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $laporans->id }}">
                                            <select class="form-control opsi-laporan" name="status">
                                                <option disabled selected hidden> Pilih Aksi </option>
                                                @if ($laporans->status==='tolak')
                                                    <option value="hapus">Hapus</option>
                                                @elseif($laporans->status==='terima')
                                                    <option value="lanjut">Ditindak Lanjuti</option>
                                                    <option value="tuntas">Tuntas</option>
                                                @elseif($laporans->status==='lanjut')
                                                    <option value="tuntas">Tuntas</option>
                                                @else
                                                    <option value="hapus">Hapus</option>
                                                @endif                                                
                                            </select>
                                            <button class="btn btn-primary member-laporan-isi btn-aksi" type="submit">OK </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        
                                        <td colspan="6">
                                            @if($count1===0)
                                            Oooops ..!!! Anda belum membuat laporan.
                                            @else
                                            {!! $data->links() !!}
                                            @endif</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <div class="statistik-laporan-member">
                        <div class="row heading-statistik-member">
                            <div class="col-md-6 col-sm-6 col-statistik">
                                <h3>Statistik </h3></div>
                        </div>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <br>
                                <h3>{{ $count1 }} </h3>
                                <p>Total Laporan</p>
                            </div>
                            <div class="col-md-9 col-sm-3 isi-statistik">
                                <div id="laporantotal" class="ct-chart .ct-double-octave">
                                    
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    series: [
    [@for ($i = 0; $i < 12; $i++)
                                    {{ $data1[$i] }},
                                    @endfor]
  ]
};

var options = {
  seriesBarDistance: 15
};

var responsiveOptions = [
  ['screen and (min-width: 641px) and (max-width: 1024px)', {
    seriesBarDistance: 10,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value;
      }
    }
  }],
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('#laporantotal', data, options, responsiveOptions);
                        </script>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <br>
                                <h3>{{ $count2 }} </h3>
                                <p>Laporan Diterima</p>
                            </div>
                            <div class="col-md-9 col-sm-3 isi-statistik">
                                <div id="laporanterima" class="ct-chart .ct-double-octave">
                                    
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    series: [
    [@for ($i = 0; $i < 12; $i++)
                                    {{ $data2[$i] }},
                                    @endfor]
  ]
};

var options = {
  seriesBarDistance: 15
};

var responsiveOptions = [
  ['screen and (min-width: 641px) and (max-width: 1024px)', {
    seriesBarDistance: 10,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value;
      }
    }
  }],
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('#laporanterima', data, options, responsiveOptions);
                        </script>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <br>
                                <h3>{{ $count5 }} </h3>
                                <p>Laporan Ditolak</p>
                            </div>
                            <div class="col-md-9 col-sm-3 isi-statistik">
                                <div id="laporantolak" class="ct-chart .ct-double-octave">
                                    
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    series: [
    [@for ($i = 0; $i < 12; $i++)
                                    {{ $data5[$i] }},
                                    @endfor]
  ]
};

var options = {
  seriesBarDistance: 15
};

var responsiveOptions = [
  ['screen and (min-width: 641px) and (max-width: 1024px)', {
    seriesBarDistance: 10,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value;
      }
    }
  }],
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('#laporantolak', data, options, responsiveOptions);
                        </script>
                        <div class="row isi-statistik-member">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <br>
                                <h3>{{ $count3 }} </h3>
                                <p>Laporan Ditindaklanjuti</p>
                            </div>
                            <div class="col-md-9 col-sm-3 isi-statistik">
                                <div id="laporanlanjut" class="ct-chart .ct-double-octave">
                                    
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    series: [
    [@for ($i = 0; $i < 12; $i++)
                                    {{ $data3[$i] }},
                                    @endfor]
  ]
};

var options = {
  seriesBarDistance: 15
};

var responsiveOptions = [
  ['screen and (min-width: 641px) and (max-width: 1024px)', {
    seriesBarDistance: 10,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value;
      }
    }
  }],
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('#laporanlanjut', data, options, responsiveOptions);
                        </script>
                        <div class="row isi-statistik-member row-ke2">
                            <div class="col-md-3 col-sm-3 isi-statistik">
                                <br>
                                <h3>{{ $count4 }}</h3>
                                <p>Laporan Tuntas</p>
                            </div>
                            <div class="col-md-9 col-sm-3 isi-statistik">
                                <div id="laporantuntas" class="ct-chart .ct-double-octave" style="stroke:green"
                                </div>
                        </div>
                        <script type="text/javascript">
                        var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    series: [
    [@for ($i = 0; $i < 12; $i++)
                                    {{ $data4[$i] }},
                                    @endfor]
  ]
};

var options = {
  seriesBarDistance: 15
};

var responsiveOptions = [
  ['screen and (min-width: 641px) and (max-width: 1024px)', {
    seriesBarDistance: 10,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value;
      }
    }
  }],
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('#laporantuntas', data, options, responsiveOptions);
                        </script>
                    </div>
                </div>
            </div>
                </div>
            </div>
@endsection