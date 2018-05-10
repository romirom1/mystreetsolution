@extends('layouts.master')
@section('content')
<div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-12">
                                <h2>Komentar Masuk</h2></div>
                        </div>
                        <br>
                        <div class="table-responsive tabel-komentar">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Isi Komentar </th>
                                        <th>Pada Laporan </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($komentar as $element)
                                    <tr>
                                        <td>{{ $element->created_at }}</td>
                                        <td><a href="{{ route('isi.laporan',['id'=> $element->report_id]) }}" class="member-laporan-isi">{{ $element->content }}</a></td>
                                        <td><a href="{{ route('isi.laporan',['id'=> $element->report_id]) }}" class="member-laporan-isi">{{App\Report::find($element->report_id)->title}}</a></td>
                                        <td><a class="btn btn-default member-laporan-isi btn-hapus" role="button" href="{{ route('delete.komentar',['id'=> $element->id]) }}">HAPUS </a></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4">
                                            @if($komentar->items()===[])
                                            Oooops ..!!! Anda belum membuat komentar.
                                            @else
                                            {!! $komentar->links() !!}
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection