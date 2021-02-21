<!DOCTYPE html>
<html class="no-js" lang="zxx">

<section class="news-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src='http://47.254.252.101:81/storage/public/berita/z8M21fv82tIBWU3fmxXafOkU0hlwtYVZkVymB0Zi.jpg' style="height: 50%;" alt="#">
                            </div>
                            <!-- News Title -->
                            <div class="news-text">
                                <blockquote class="overlay">
                                    <p>JUDUL</p>
                                </blockquote>
                            </div>
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="author"><a href="#"><img src="<?= base_url('assets/') ?>guest/img/www.png" alt="#">Sumber</a></span>
                                    <span class="date"><i class="fa fa-clock-o"></i>TANGAL</span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text">
                                <p>cbciubicusbkebyvekcyuyehwi</p>
                            </div>
                            <div class="blog-bottom">
                                <!-- Social Share -->
                                <ul class="social-share">
                                    <li class="facebook"><a href='https://m.facebook.com/funbike.tirtabaluran.3?tsid=0.9136297381321135&source=result'><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li class="pinterest"><a href='https://www.instagram.com/pdamtirtabaluran/'><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
                                </ul>
                                <!-- Next Prev -->
                                <ul class="prev-next">
                                    <li class=""><a href="<?php echo site_url('Guest/index') ?>"><i class="fa fa-angle-double-left">Back</i></a></li>
                                </ul>
                                <!--/ End Next Prev -->
                                <!--/ End Single Comments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="main-sidebar">
                    <div class="single-widget recent-post">
                        <h3 class="title">Berita Terbaru Lainnya</h3>
                        @foreach($data_berita as $dt)
                        <div class="single-post">
                            <div class="image">
                                <img src="{{asset('storage/'.$dt->gambar_berita)}}">
                            </div>
                            <div class="content">
                                <h5><a href="{{url('/detailberita/'.$dt->id)}}">{{$dt->judul}}</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$dt->created_at}}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <div class="pull-left">
                            Showing
                            {{ $data_berita->firstItem() }}
                            to
                            {{ $data_berita->lastItem() }}
                            of
                            {{ $data_berita->total() }}
                            entries
                        </div>
                        <div class="pull-up">
                            {{ $data_berita->links() }}
                        </div>
                    </div>
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
                            <li><a href='https://m.facebook.com/funbike.tirtabaluran.3?tsid=0.9136297381321135&source=result'><i class="icofont-facebook"></i></a></li>
                            <li><a href='https://www.instagram.com/pdamtirtabaluran/'><i class="icofont-instagram"></i></a></li>
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