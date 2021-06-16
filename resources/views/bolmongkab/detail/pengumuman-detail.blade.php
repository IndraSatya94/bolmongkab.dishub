<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kabupaten Bolaang Mongondow</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="navbar d-flex align-items-center justify-content-between">

            <div class="logoheader d-flex align-items-center ">
                <img src="../assets/img/logobolmong.png" alt="">
                <h1 class="logo"><a href="index.html">PEMERINTAH KABUPATEN <br> BOLAANG MONGONDOW</a></h1>
            </div>


            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li><a href="{{ ('/') }}">Beranda</a></li>

                    <li class="drop-down"><a href="#">Pemerintah</a>
                        <ul>
                            <li><a href="{{ ('/visimisitemp') }}">Visi dan Misi</a></li>
                            <li class="drop-down"><a href="{{ ('/pimpinantemp') }}">Pimpinan</a>
                                <ul>
                                    <li><a href="{{ ('/bupatitemp') }}">Bupati</a></li>
                                    <li><a href="{{ ('/wakilbupatitemp') }}">Wakil Bupati</a></li>
                                    <li><a href="{{ ('/sekdatemp') }}">Sekretariat</a></li>
                                </ul>
                            </li>
                            <li class="drop-down"><a href="#">Perangkat Daerah</a>
                                <ul>
                                    <li><a href="https://setda.bolmongkab.go.id/#/">Sekretariat Daerah</a></li>
                                    <li><a href="https://inspektorat.bolmongkab.go.id/">Inspektorat</a></li>
                                    <li><a href="{{ ('/dinastemp') }}">Dinas</a></li>
                                    <li><a href="{{ ('/badandaerahtemp') }}">Badan Daerah</a></li>
                                    <li><a href="{{ ('/kecamatantemp') }}">Kecamatan</a></li>
                                    <li><a href="{{ ('/desatemp') }}">Desa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="drop-down"><a href="#">Mengenal Bolmong</a>
                        <ul>
                            <li><a href="{{ ('/sejarahtemp') }}">Sejarah</a></li>
                            <li><a href="{{ ('/artilambangtemp') }}">Arti Lambang</a></li>
                        </ul>
                    </li>

                    <li class="drop-down"><a href="#">Layanan dan Informasi</a>
                        <ul>
                            <li><a href="{{ ('/agendatemp') }}">Agenda</a></li>
                            <li><a href="{{ ('/puskesmastemp') }}">Puskesmas</a></li>
                            <li class="active"><a href="{{ ('/pengumumantemp') }}">Pengumuman</a></li>
                        </ul>
                    </li>

                    <li class="drop-down"><a href="#">Datang dan Kunjungi</a>
                        <ul>
                            <li><a href="{{ ('/ruangdatatemp') }}">Ruang Data</a></li>
                            <li><a href="{{ ('/wisatatemp') }}">Tempat Wisata</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ ('/downloadtemp') }}">Download</a></li>
                </ul>

            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Pengumuman Detail</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= pengumumandetail detail Section ======= -->
        <section id="pengumumandetail" class="pengumumandetail">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-detail entry animate__animated animate__zoomIn animate_faster">
                            <h2 class="entry-title">
                                <a href="pengumumandetail-detail.html">{{ $pengumuman->judul }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="pengumumandetail-detail.html">{{ $pengumuman->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="pengumumandetail-detail.html">{{ $pengumuman->created_at }}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-detail">
                                <p>
                                    <?php
                  $kalimat = $pengumuman->konten;
                  echo substr($kalimat,1,300);
                  echo "<br>";
                  echo "<br>";
                  echo substr($kalimat,301,600);
                  echo "<br>";
                  echo "<br>";
                  echo substr($kalimat,601,900);
                  echo "<br>";
                  echo "<br>";
                  echo substr($kalimat,601,900);
                  ?>

                                </p>
                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">{{ $pengumuman->kategori->nama }}</a></li>
                                </ul>

                                <!-- <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Umum</a></li>
                </ul> -->
                            </div>

                        </article><!-- End pengumumandetail entry -->

                    </div><!-- End pengumumandetail entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Cari</h3>
                            <div class="sidebar-item search-form">
                                <form action="{{ ('/pengumuman-cari') }}" method="GET">
                                    <input type="search" name="cari" value="{{ request()->get('cari') }}">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                @foreach ($kategori as $kateg)
                                    <li><a href="#">{{ $kateg->nama }} <span>(0)</span></a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Lainnya</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($pengside as $side)
                                <div class="post-item clearfix">
                                    <h4><a href="{{ route('pengdet',$side->id) }}">{{ $side->judul }}</a></h4>
                                    <time datetime="{{ $side->created_at }}">{{ $side->created_at }}</time>
                                </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">-</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End pengumumandetail sidebar -->

                </div>

            </div>
        </section><!-- End pengumumandetail detail Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Pemerintah kabupaten Bolaang Mongondow</h3>
                            <p>
                                Lolak Tambolango, Lolak, Kabupaten Bolaang Mongondow, Sulawesi Utara <br>
                                KODE POS 95761, Bolaang Mongdong<br><br>
                                <strong>Phone:</strong> +62 -<br>
                                <strong>Email:</strong> Pemerintah@bolmongkab.go.id<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Link Terkait</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://ppid.bolmongkab.go.id/">PPID</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://jdih.bolmongkab.go.id/">JDIH</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://bolmongkab.go.id/sideka/">Sideka
                                    Bolmong</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://sicantikui.layanan.go.id/#/login">Sicantik Cloud</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://sinta.bolmongkab.go.id/">Sinta
                                    Bolmong</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Pemerintah Kabupaten Bolaang Mongondow
            </div>
            <div class="credits">
                Copyright &copy; 2021 by <a href="#"> E-Government</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!--back-to-top-->

    <script src="../assets/js/main.js"></script>

</body>

</html>
