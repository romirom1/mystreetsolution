@extends('layouts.master')
@section('content')
<div class="laporan-anda">
                        <div class="row row-header-member">
                            <div class="col-md-12">
                                <h2>Pantau Laporan</h2></div>
                        </div>
                        <br>
                        <div class="table-responsive tabel-komentar">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Judul Laporan</th>
                                        <th>Kategori Laporan</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Lokasi Laporan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $element)
                                    <tr>
                                        <td><a href="{{ route('isi.laporan',['id'=> $element->id]) }}" class="member-laporan-isi">{{ $element->title }}</a>
                                        </td>
                                        <td>
                                        <p class="member-laporan-isi">{{ $element->name }}</p>
                                        </td>
                                        <td>
                                <p class="member-laporan-isi">{{ $element->created_at }}</p>
                            </td>
                            <td>
                                <p class="member-laporan-isi">{{ $element->location }} </p>
                            </td>
                            <td class="col-lg-3 col-md-3 col-sm-3 admin-isi-laporan"><p class="member-laporan-isi">{{ $element->status }} </p>
                        </td>  
                                    </tr>
                                    @endforeach
                                    <tr><td colspan="5">
                                        @if($data->items()===[])
                                            Oooops ..!!! Anda belum membuat         laporan.
                                        @else
                                            {!! $data->links() !!}
                                        @endif</td></tr>
                                </tbody>
                            </table>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection