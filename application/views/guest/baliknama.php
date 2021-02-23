<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>PDAM TIRTA BALURAN SITUBONDO</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/') ?>guest/img/logo_pdam_new.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/magnific-popup.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/normalize.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>guest/css/responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Balik Nama</h2>
                </div>
            </div>
        </div>
        <!-- @if(session('sukses'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Petugas akan menghubungi dalam 1x24 jam
        </div>
        @endif -->
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form role="form" class="form" method='post' action='<?php echo site_url('Baliknama/proses_add') ?>' enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Nama Sebelumnya :</label>
                                <input name="nama_sebelumnya" type="text" placeholder="Isi dengan nama lengkap anda" value="" required="">
                                <!-- @if($errors->has('nama_sebelumnya'))
                                <span class="help-block text-danger">{{$errors->first('nama_sebelumnya')}}</span>
                                @endif -->
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group ">
                                <label class="form-group" for="">Nama Pengaju :</label>
                                <input name="nama_pengaju" type="text" placeholder="Isi dengan nama lengkap anda" value="" required="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. KTP :</label>
                                <input name="no_ktp" type="number" placeholder="Nomer KTP" value="" required="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">Alamat :</label>
                                <input name="alamat" type="text" placeholder="Alamat Lengkap" value="" required="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-group" for="">No. Handphone :</label>
                                <input name="no_hp" type="number" placeholder="Nomer Handphone" value="" required="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <p>Foto KTP :</p>
                                <input name="gambar_ktp" type="file" class="form-control-file" value="" required="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group ">
                                <p>Foto rekening Air :</p>
                                <input name="gambar_rekening" type="file" class="form-control-file" value="" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="<?= base_url('assets/') ?>guest/img/balik_nama.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Tentang Kami</h2>
                        <p>Kami adalah Perusahaan Daerah yang mengelola penyediaan air bersih untuk wilayah Kabupaten Situbondo. Berdiri sejak tahun 1991 hingga kini kami terus berusaha memberikan pelayanan optimal bagi masyarakat pelanggan maupun non-pelanggan.</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="{{url('https://m.facebook.com/funbike.tirtabaluran.3?tsid=0.9136297381321135&source=result')}}"><i class="icofont-facebook"></i></a></li>
                            <li><a href="{{url('https://www.instagram.com/pdamtirtabaluran/')}}"><i class="icofont-instagram"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Link Cepat</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i>Beranda</a></li>
                                    <li><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i>Pendaftaran</a></li>
                                    <li><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i>Balik Nama</a></li>
                                    <li><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i>Pengaduan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Jam Buka</h2>
                        <p>Jam Buka Layanan Pembayaran</p>
                        <ul class="time-sidual">
                            <li class="day">Senin-Kamis<span>07.15 - 13.15</span></li>
                            <li class="day">Jumat<span>07.15 - 10.45</span></li>
                            <li class="day">Sabtu<span>07.15 - 12.15</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Kritik dan saran</h2>
                        <p>Kami menerima segala kritik dan saran untuk pelayanan yang lebih baik lagi</p>
                        <!-- @if(session('sukses'))
                            <div class="alert alert-primary alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="fa fa-check-circle"></i> Data berhasil di input...
                            </div>
                            @else
                            <p></p>
                            @endif
                            <form action="{{url('saran/add')}}" method="post" class="newsletter-inner {{$errors->has('isi_saran') ? 'has-error' : ''}}">
                                @method('post')
                                @csrf
                                <input name="isi_saran" type="text" placeholder="Kritik dan Saran">
                                <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                                @if($errors->has('isi_saran'))
                                <span class="help-block">{{$errors->first('isi_saran')}}</span>
                                @endif
                            </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2021 | Dibuat Oleh <a href="#" target="_blank">Tim IT PDAM</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
</body>

</html>