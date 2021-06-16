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
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!--Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

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
                    <li><a class="active" href="index.html">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="tugasfungsi.html">Tugas dan Fungsi</a></li>
                            <li><a href="visimisi.html">Visi dan Misi</a></li>
                            <li><a href="struktur.html">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li><a href="berita.html">Berita</a></li>
                    <li><a href="agenda.html">Agenda</a></li>
                    <li><a href="https://ppid.bolmongkab.go.id">PPID</a></li>
                    <li><a href="galeri.html">Galeri</a></li>
                    <li><a href="kontak.html">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Agenda</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Agenda</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= agenda Section ======= -->
        <section id="agenda" class="agenda">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="agenda-detail table-responsive">
                            <h3 class="agenda-title">DETAIL AGENDA :</h3>
                            <div class="agenda-item recent-posts">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">Acara:</th>
                                            <th scope="col">Tempat:</th>
                                            <th scope="col">Tanggal:</th>
                                            <th scope="col">Mulai:</th>
                                            <th scope="col">Selesai:</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $agenda->acara }}</td>
                                            <td>{{ $agenda->tempat }}</td>
                                            <td>{{ $agenda->tanggal }}</td>
                                            <td>{{ $agenda->mulai }}</td>
                                            <td>{{ $agenda->selesai }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div><!-- End agenda recent posts-->

                        </div><!-- End agenda -->
                    </div><!-- End agenda agenda -->
                </div>
            </div>
        </section><!-- End berita detail Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section id="footer" className="text-center">


        <div className="container">
            <div className="row">
                <div className="col-md-12 col-sm-6 col-xs-12">
                    <p>Dinas Perumahan Rakyat dan Kawasan Permukiman Kabupaten Bolaang Mongondow</p>
                    <p className="copyright-text">Copyright &copy; 2021 by <a href="#"> E-Government</a> Diskominfo</p>
                </div>
            </div>
        </div>

    </section>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

    <script src="../assets/js/main.js"></script>

</body>

</html>
