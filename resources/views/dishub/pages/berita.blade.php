<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dinas perhubungan bolaang mongondow</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logobolmong.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!--Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logobolmong.png" alt="">
                <span>DISHUB</span>
            </a>
            <nav id="navbar" class="navbar nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="tugasfungsi.html">Tugas dan Fungsi</a></li>
                            <li><a href="visimisi.html">Visi dan Misi</a></li>
                            <li><a href="struktur.html">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li><a class="active" href="berita.html">Berita</a></li>
                    <li><a href="agenda.html">Agenda</a></li>
                    <li><a href="https://ppid.bolmongkab.go.id">PPID</a></li>
                    <li><a href="galeri.html">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Berita</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Berita</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= berita Section ======= -->
        <section id="berita" class="berita">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">

                        @foreach($beritas as $berita)
                        <article class="entry">
                            <div class="entry-img">
                                <img src="/image/berita/{{ $berita->image }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="berita-single.html">{{$berita->judul}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="berita-single.html">{{$berita->user->name}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="berita-single.html"><time
                                                datetime="2020-01-01">{{$berita->created_at}}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{$berita->konten}}
                                </p>
                                <div class="read-more">
                                    <a href="berita-single.html">Selengkapnya...</a>
                                </div>
                            </div>
                        </article><!-- End berita entry -->
                        @endforeach

                        <div class="berita-pagination">
                            <ul class="justify-content-center">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                    </div><!-- End berita entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Cari</h3>
                            <div class="sidebar-item search-form">
                                <form action="{{ ('/berita-cari') }}" method="GET">
                                    <input type="search" name="cari" value="{{ request()->get('cari') }}">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">Umum <span>(0)</span></a></li>
                                    <li><a href="#">Khusus <span>(4)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Lainnya</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach($beritas as $berita)
                                <div class="post-item clearfix">
                                    <img src="image/berita/{{$berita->image}}" alt="">
                                    <h4><a href="berita-single.html">{{$berita->judul}}</a>
                                    </h4>
                                    <time datetime="2020-01-01">{{$berita->created_at}}</time>
                                </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">Umum</a></li>
                                    <li><a href="#">Khusus</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End berita sidebar -->

                </div>

            </div>
        </section><!-- End berita Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section id="footer" className="text-center">


        <div className="container">
            <div className="row">
                <div className="col-md-12 col-sm-6 col-xs-12">
                    <p>Dinas Perhubungan Kabupaten Bolaang Mongondow</p>
                    <p className="copyright-text">Copyright &copy; 2021 by <a href="#"> E-Government</a> Diskominfo</p>
                </div>
            </div>
        </div>

    </section>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
