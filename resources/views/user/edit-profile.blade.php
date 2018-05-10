@extends('layouts.master')
@section('content')
<div class="bungkus-login">
                        <div class="row row-register">
                            <div class="col-lg-8 col-md-6 col-sm-6">
                            </div>
                        </div>
                        <div class="row row-info">
                            <div class="col-md-12"><i class="fa fa-edit icone"></i>
                                <p class="text-left">Sunting Profil Anda</p>
                            </div>
                        </div>
                        <div class="row row-isiform">
                            <div class="col-md-12 heading-form">
                                <h1 class="text-center">My Profile </h1></div>
                        </div>
                        <form id="formulir-register" method="post" enctype="multipart/form-data" action ="{{ route('user.update-profile') }}"  class="bootstrap-form-with-validation">
                        	{{ csrf_field() }}
                            <input value="{{ $data->id }}" name="id" class="form-control" type="hidden">
                            <div class="row row-username">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Nama </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input value="{{ $data->name }}" name="name" class="form-control" type="text" placeholder="Username">
                                </div>
                            </div>
                            <div class="row row-lokasi">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">E-mail <span class="bintang">* </span></label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input value="{{ $data->email }}" name="email" class="form-control" type="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="row row-deskripsi">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Tanggal Lahir </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input value="{{ $data->birth }}" name="birth" class="form-control" type="date">
                                </div>
                            </div>
                            <div class="row row-deskripsi">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">No Telpon </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                                    <input value="{{ $data->phone }}" name="phone" class="form-control" type="tel" placeholder="+62">
                                </div>
                            </div>
                            <div class="row row-foto">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                                    <label class="label-laporan">Unggah Foto</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 foto-input">
                                    <input name="photo" type="file">
                                </div>
                            </div>
                            <div class="row row-button">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login-button">
                                    <button class="btn btn-primary login-button" type="submit">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
@endsection