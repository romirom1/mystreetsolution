<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invention</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <div id="bungkus-nav">
        <div id="nav-pertama">
            <nav class="navbar navbar-inverse nav-atas">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="index.html"> <img src="assets/img/logo.png" id="img-logo"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1"></div>
                </div>
            </nav>
        </div>
        <div id="nav-kedua">
            <ul class="nav nav-tabs nav-bawah">
                <li><a href="index.html">BERANDA </a></li>
                <li><a href="#">PANDUAN </a></li>
                <li><a href="#">TENTANG </a></li>
                <li><a href="kontak.html">KONTAK </a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div id="content2">
            <div class="bungkus-login">
                <div class="row row-register">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <a href="index.html"><img src="assets/img/logo.png"></a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <ul class="navbar-left nav-akun">
                            <li> <a href="#">Belum punya akun? </a></li>
                        </ul><a class="btn btn-link btn-masuk" role="button" href="register.html">DAFTAR </a></div>
                </div>
                <div class="row row-info">
                    <div class="col-md-12"><i class="fa fa-book icone"></i>
                        <p class="text-left">Buat Laporan Anda</p>
                    </div>
                </div>
                <div class="row row-isiform">
                    <div class="col-md-12 heading-form">
                        <h1 class="text-center">ISI FORM LAPORAN !</h1></div>
                </div>
                <form id="formulir-register" class="bootstrap-form-with-validation">
                    <div class="row row-email">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label class="label-laporan">Judul Laporan</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                            <input class="form-control" type="text" placeholder="Judul">
                        </div>
                    </div>
                    <div class="row row-lokasi">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label class="label-laporan">Lokasi </label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                            <input class="form-control" type="text" placeholder="Lokasi">
                        </div>
                    </div>
                    <div class="row row-deskripsi">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label class="label-laporan">Deskripsi </label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 login-input">
                            <textarea class="form-control" placeholder="Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row row-foto">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 login-text">
                            <label class="label-laporan">Unggah Foto</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 foto-input">
                            <input type="file">
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
    <footer>
        <p>COPYRIGHT © GARDANESIA TEAM. ALL RIGHT RESERVED.</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/opensidenav.js"></script>
    <script src="assets/js/btn-panduan.js"></script>
</body>

</html>