@extends('layouts.master')
@section('content')
                       <div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-12">
                                <h2>Laporan Anda</h2></div>
                        </div>
                        <br>
                        <div class="table-responsive tabel-komentar">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:10%">Id Laporan</th>
                                        <th>Judul Laporan </th>
                                        <th>Jumlah Komentar </th>
                                        <th>Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $laporans)
                                    <tr>
                                        <td>{{ $laporans->id }}</td>
                                        <td><a href="{{ route('isi.laporan',['id'=> $laporans->id]) }}" class="member-laporan-isi">{{ $laporans->title }}</a></td>
                                        <td>{{ App\Comment::all()->where('report_id',$laporans->id)->count() }}</td>
                                        <td><a class="btn btn-default member-laporan-isi btn-ubah" role="button" href="{{ route('edit.laporan',['id'=> $laporans->id]) }}">UBAH </a><a class="btn btn-default member-laporan-isi btn-hapus" role="button" href="{{ route('delete.report',['id'=> $laporans->id]) }}">HAPUS </a></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        
                                        <td colspan="3">
                                            @if($count1===0)
                                            Oooops ..!!! Anda belum membuat laporan.
                                            @else
                                            {!! $laporan->links() !!}
                                            @endif</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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