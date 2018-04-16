@extends('layouts.master')
@section('content')
                    <div class="bungkus-login">
                        <div class="row row-info">
                            <div class="col-md-12"><i class="fa fa-book icone"></i>
                                <p class="text-left">Buat Laporan Anda</p>
                            </div>
                        </div>
                        <div class="row row-isiform">
                            <div class="col-md-12 heading-form">
                                <h1 class="text-center">ISI FORM LAPORAN !</h1></div>
                        </div>
                        <form id="formulir-register" class="bootstrap-form-with-validation" method="post" enctype="multipart/form-data" action ="{{ route('post.report') }}">
                             {{ csrf_field() }}
                            <input class="form-control" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input class="form-control" type="hidden" name="status" value="belum">
                            <div class="row row-email">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Judul Laporan</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input class="form-control" type="text" placeholder="Judul" name="title">
                                </div>
                            </div> 
                            <div class="row row-lokasi">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Kategori</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                <select  name="categories_id" class="form-control select-option">
                                    @foreach($kategori as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row row-lokasi">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Lokasi </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input class="form-control" type="text" placeholder="Lokasi" name="location">
                                </div>
                            </div>
                            <div class="row row-deskripsi">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Deskripsi </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <textarea class="form-control" placeholder="Deskripsi" name="content"></textarea>
                                </div>
                            </div>
                            <div class="row row-foto">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Unggah Foto</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 foto-input">
                                    <input type="file" name="photo">
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
@endsection