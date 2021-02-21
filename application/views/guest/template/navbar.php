<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
            <img src="<?= base_url('assets/') ?>guest/img/logo_pdam.png" alt="">
            <!-- <a href="<?= base_url('assets/') ?>guest/img/logo_pdam.png"></a> -->
        </div>
    </div>
</div>
<header class="header">
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="logo">
                            <a href=""><img src="<?= base_url('assets/') ?>guest/img/logo_pdam2.png" alt="#"></a>
                        </div>
                        <div class="mobile-nav"></div>
                    </div>


                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li><a href="<?php echo site_url('Guest/index') ?>">BERANDA</a></li>
                                    <li><a href="#">LAYANAN</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo site_url('Tagihan/index') ?>">CEK TAGIHAN</a></li>
                                            <li><a href="<?php echo site_url('Pendaftaran/index') ?>">PENDAFTARAN BARU</a></li>
                                            <li><a href="<?php echo site_url('Baliknama/index') ?>">PENGAJUAN BALIK NAMA</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('Guest/struktur') ?>">STRUKTUR</a>
                                    </li>
                                    <li><a href=" <?php echo site_url('Pengaduan/index') ?>">PENGADUAN</a></li>
                                    <li><a href="<?php echo site_url('Guest/about') ?>">TENTANG KAMI</a></li>
                                    <li><a href="#">TAMBAH DATA</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo site_url('Berita/view') ?>">BERITA</a></li>
                                            <li><a href="<?php echo site_url('Kegiatan/view') ?>">KEGIATAN</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>