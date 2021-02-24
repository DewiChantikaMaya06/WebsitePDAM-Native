<!DOCTYPE html>
<html class="no-js" lang="zxx">

<body>
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('<?= base_url('assets/') ?>guest/img/slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>Selamat Datang <br><span>Website PDAM</span><span> Tirta Baluran Situbondo</span></h1>
                                <h2><span><b> Silahkan Cek Tagihan Anda..</b></span></h2>
                                <form class="form" method="post" action="#">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-16">
                                            <div class="form-group ">
                                                <input name="no_pelanggan" type="number" placeholder="No.Pelanggan...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-12">
                                            <div class="form-group">
                                                <div class="button">
                                                    <button type="submit" class="btn">Cek Tagihan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('<?= base_url('assets/') ?>guest/img/slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>PDAM Tirta Baluran <br><span>Pelayananan</span> adalah<span> KUNCI UTAMA kami</span></h1>
                                <p>Pelayanan kepada masyarakat merupakan kunci utama kami dalam mengembangankan kualitas PDAM Kabupaten Situbondo</p>
                                <br>
                                <form class="form" method="post" action="{{'/cek_tagihan/'}}">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-16">
                                            <div class="form-group ">
                                                <input name="no_pelanggan" type="number" placeholder="No.Pelanggan...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-12">
                                            <div class="form-group">
                                                <div class="button">
                                                    <button type="submit" class="btn">Cek Tagihan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule last">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <div class="single-content">
                                    <span>Jam buka</span>
                                    <h4>Jam buka pelayanan :</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Senin-Kamis<span>07.15 - 13.15</span></li>
                                        <li class="day">Jumat <span>07.15 - 10.45</span></li>
                                        <li class="day">Sabtu <span>07.15 - 12.15</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">9</span>
                            <p>UNIT</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">219</span>
                            <p>PEGAWAI</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">1695</span>
                            <p>PELANGGAN</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">1991</span>
                            <p>TAHUN BERDIRI</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->

    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>TENTANG KAMI</h3>
                        <p>Selamat datang di website resmi PDAM Kabupaten Situbondo yang merupakan wujud kesungguhan kami dalam membangun komunikasi yang interaktif dengan masyarakat Situbondo guna meningkatkan kualitas pelayanan dan penyediaan air minum bersih di daerah Kabupaten Situbondo. Kami adalah Perusahaan Daerah yang mengelola penyediaan air bersih untuk wilayah Kabupaten Situbondo. Berdiri sejak tahun 1991 hingga kini kami terus berusaha memberikan pelayanan optimal bagi masyarakat pelanggan maupun non-pelanggan.
                            Kami menyadari website PDAM Kabupaten Situbondo ini masih banyak kekurangan yang perlu dibenahi, untuk itu kami berharap saran dan kritik dari para pengunjung website. Terima kasih, semoga website PDAM Kabupaten Situbondo ini memberikan manfaat bagi semua.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Sumber Air Bersih dan Dalam</li>
                                    <li><i class="fa fa-caret-right"></i>Air Lebih Sehat Dibanding Sumur Bor Dangkal atau Sumur Resapan</li>
                                    <li><i class="fa fa-caret-right"></i>Pelayanan Optimal dan Fast Response</li>
                                    <li><i class="fa fa-caret-right"></i>Tekanan dan Debit Air yang Sangat Deras</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <iframe width="560" height="560" src="https://www.youtube.com/embed/q-SKcbvL2FM?start=1" class="video video-popup mfp-iframe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen><i class="fa fa-play"></i></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->

    <!-- Start Call to action -->
    <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>Anda butuh bantuan ? <br> Hubungi (0338) 672 022</h2>
                        <p>Apabila anda membutuhkan bantuan terkait PDAM silahkan hubungi nomer diatas atau klik direct WhatsApp dibawah ini.</p>
                        <div class="button">
                            <a href='https://wa.me/628113491444' class="btn">Klik Disini <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call to action -->

    <!-- Start portfolio -->
    <section class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Galeri Kegiatan PDAM</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        <?php foreach ($kegiatan as $kgt) : ?>
                            <div class="single-pf">
                                <img src="<?php echo base_url() . '/gambar/' . $kgt['gambar']; ?>" alt="" style="height: 300px;">
                                <a href="<?php echo base_url() ?>Kegiatan/detail/<?php echo $kgt['id'] ?>" class="btn">View Details</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->

    <!-- Pricing Table -->
    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Klasifikasi Tarif</h2>
                        <p>Berikut adalah daftar tarif minum tahun 2020 PDAM Tirta Baluran. Berdasarkan keputusan Bupati Situbondo Nomor 188/409/P/004.2/2019</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wrap-table100">
                    <div class="table100">
                        <table>
                            <thead>
                                <tr class="table100-head ">
                                    <th class="column1" rowspan="2">Klasifikasi Tarif</th>
                                    <th class="column6" rowspan="2">Kelompok</th>
                                    <th class="column6" colspan="2">Pemakaian</th>
                                    <th class="column6" colspan="3">Biaya</th>
                                </tr>
                                <tr class="table100-head bg-primary">
                                    <th class="column1">0-10 m³</th>
                                    <th class="column2">> 0-10 m³</th>
                                    <th class="column5">Pemeliharaan </th>
                                    <th class="column4">Admin</th>
                                    <th class="column6">Denda</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="column1"></td>
                                    <td class="column6"></td>
                                    <td class="column2"></td>
                                    <td class="column3"></td>
                                    <td class="column4"></td>
                                    <td class="column5"></td>
                                    <td class="column6"></td>
                                </tr>
                            </tbody>
                            <tfoot class="table100-foot">
                                <tr class="table100-head bg-secondary" bgcolor="#979797">
                                    <td class="column1" style="color: rgb(255, 255, 255)">Non Komersial</td>
                                    <td class="column6" style="color: rgb(255, 255, 255)">E1</td>
                                    <td class="column2" rowspan="2" colspan="5" style="color: rgb(255, 255, 255)">
                                        <center> Besaran Tarif Berdasarkan Kesepakatan Bersama antara PDAM dan Pihak Pelanggan </center>
                                    </td>
                                </tr>
                                <tr class="table100-head bg-secondary" bgcolor="#979797">
                                    <td class="column1" style="color: white">Komersial</td>
                                    <td class="column6" style="color: #ffffff">E2</td>
                                </tr>
                                <tr class="table100-head bg-primary">
                                    <td class="column6" colspan="7" style="color: white">ADMINISTRASI/BUKA SEGEL : Rp. 25.000</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->



    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Berita Terkini PDAM</h2>
                        <p>Berita terkini yang dapat anda ikuti mengenai PDAM</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="w3-content w3-display-container">
                                <?php foreach ($berita as $brt) : ?>
                                <div class="mySlides">
                                    <div class="single-news">
                                        <div class="news-head">
                                            <center><img src="<?php echo base_url() . '/gambar/' . $brt['gambar']; ?>" style="width:80%"></center>
                                        </div>
                                        <div class="news-body">
                                            <div class="news-content">
                                                <h1 class="text-black"><strong><?php echo $brt['judul']; ?></strong></h1>
                                                <div class="date"><?php echo $brt['created']; ?></div>
                                                <p><?php echo character_limiter( $brt['isi'],200); ?><a href="<?php echo base_url() ?>Berita/detail/<?php echo $brt['id'] ?>" class="btn-sm bg-primary text-white">Lanjutkan baca >></a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Blog Area -->

    <!-- Footer Area -->
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