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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
          <li><a class="active" href="index.html">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="tugasfungsi.html">Tugas dan Fungsi</a></li>
              <li><a href="{{ ('/v-visimisi') }}">Visi dan Misi</a></li>
              <li><a href="{{ ('/v-struktur') }}">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a href="berita.html">Berita</a></li>
          <li><a href="{{ ('/v-agenda') }}">Agenda</a></li>
          <li><a href="https://ppid.bolmongkab.go.id">PPID</a></li>
          <li><a href="galeri.html">Galeri</a></li>
          <li><a href="kontak.html">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        @foreach ($slide1 as $sli)
        <div class="carousel-item active" style="background-image: url(image/slide/{{ $sli->image }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><span>{{ $sli->caption }}</span></h2>
              <p class="animate__animated animate__fadeInUp">{{ $sli->body }}</p>
              <!-- <a href="sejarah.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya...</a> -->
            </div>
          </div>
        </div>
        @endforeach

        <!-- Slide 2 -->
        <!-- @foreach ($slide2 as $sli)
        <div class="carousel-item" style="background-image: url(image/slide/{{ $sli->image }})">
          <div class="carousel-container">
            <div class="container">
              <p class="animate__animated animate__fadeInUp">{{ $sli->caption }}</p>
              <a href="http://bolmongkab.go.id" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya...</a>
            </div>
          </div>
        </div>
        @endforeach -->

      </div>

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Tentang</h3>
              <h2>Dinas Perhubungan</h2>
              <p>
                Dinas Perhubungan (DISHUB) merupakan unsur pelaksana Pemerintah Daerah di bidang Perhubungan yang dipimpin oleh Kepala Dinas dan berkedudukan di bawah dan bertanggungjawab kepada Bupati melalui Sekretaris Daerah.
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/dishub-2.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


        <!-- ======= Recent berita Posts Section ======= -->
        <section id="recent-berita-posts" class="recent-berita-posts">

          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Berita</h2>
              <p>Berita Terbaru</p>
            </header>
    
            <div class="row">
    
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/berita/berita-1.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">8 Juni 2019</span>
                  <h3 class="post-title">Pekan Depan, Penandatanganan Kontrak Pekerjaan Pagar Batas Lahan Bandar Udara Lolak</h3>
                  <a href="berita-detail.html" class="readmore stretched-link mt-auto"><span>Baca..</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/berita/berita-2.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">8 April 2019</span>
                  <h3 class="post-title">Jembatan Timbang Inobonto Kembali Beroperasi</h3>
                  <a href="berita-detail.html" class="readmore stretched-link mt-auto"><span>Baca..</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/berita/berita-3.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">26 Februari 2019</span>
                  <h3 class="post-title">Hebat, Dishub Bolmong Rampungkan Gedung PKB Dulangon</h3>
                  <a href="berita-detail.html" class="readmore stretched-link mt-auto"><span>Baca..</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
    
            </div>
              <div class="lainnya">
                <h4><a href="berita.html">Berita Lainnya</a></h2>
              </div>
          </div>
    
        </section><!-- End Recent berita Posts Section -->

            <!-- ======= transportasi Section ======= -->
    <section id="transportasi" class="transportasi">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Transportasi</h2>
          <p>Jenis Transportasi</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/png/car.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Transportasi Darat</h4>
                <p>kendaraan bermotor, kereta api, gerobak yang ditarik oleh hewan (kuda, sapi,kerbau), atau manusia. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/png/travelling.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Transportasi Udara</h4>
                <p>Alat transportasi udara dapat menjangkau tempat – tempat yang tidak dapat ditempuh dengan alat transportasi darat atau alat transportasi laut.Contoh alat transportasi udara misalnya pesawat terbang, helicopter, balon udara, dll.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/png/boat.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Transportasi Laut</h4>
                <p>kapal,tongkang, perahu, rakit.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- End Transportasi Section -->

    <!-- ======= tips Section ======= -->
    <section id="tips" class="tips">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Tips</h2>
          <p>Mudik</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="tips-box blue">
              <div class="tips-img">
                <img src="assets/img/png/healthcare.png" class="img-fluid" alt="">
              </div>
              <h3>Badan harus dalam kondisi sehat</h3>
              <p>Ini prioritas nomor satu. Jika badan jauh di bawah kondisi kesehatan rata-rata, maka pertimbangkan untuk menunda atau bahkan membatalkan mudik dengan berkendara. Dan ingat, bawa KTP dan Kartu Asuransi/BPJS!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="tips-box orange">
              <div class="tips-img">
                <img src="assets/img/png/car-insurance.png" class="img-fluid" alt="">
              </div>
              <h3>Kendaraan harus dalam kondisi baik</h3>
              <p>Pastikan untuk servis atau melakukan pengecekan kendaraan sebelum dipakai jalan jarak jauh. Sempatkan waktu untuk mengecek BBM, tekanan angin ban, air radiator, oli mesin, dll.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="tips-box green">
              <div class="tips-img">
                <img src="assets/img/png/delivery-box.png" class="img-fluid" alt="">
              </div>
              <h3>Bawa barang muatan seperlunya</h3>
              <p>Hal ini penting demi kestabilan kendaraan kamu, apalagi yang membawa motor. Usahakan agar barang bawaan tidak berlebihan sampai keluar dari sisi-sisi kendaraan. Kalau perlu, kirim barang-barang dulu lewat kurir.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="tips-box red">
              <div class="tips-img">
                <img src="assets/img/png/map.png" class="img-fluid" alt="">
              </div>
              <h3>Rencanakan perjalanan dengan Peta Digital</h3>
              <p>Biar di jalan hemat waktu, cek rutenya di peta digital dulu. Ketahui mana saja yang bisa dilewati dan mana yang patut dihindari. Kalau capek dan mau cari penginapan, ada fitur Hotels di Grab app untuk mencari hotel terdekat dan terjangkau!.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="tips-box purple">
              <div class="tips-img">
                <img src="assets/img/png/lunch-box.png" class="img-fluid" alt="">
              </div>
              <h3>Bawa bekal untuk di jalan</h3>
              <p>Siapkan persediaan, supaya kamu bisa makan atau nyemil di jalan. Jika tidak sempat, pakai GrabFood aja, baik di rumah atau stop dulu di jalan, untuk makanan yang enak dan lengkap!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="tips-box pink">
              <div class="tips-img">
                <img src="assets/img/png/resting.png" class="img-fluid" alt="">
              </div>
              <h3>Rest Area jangan hanya dilewati saja</h3>
              <p>Jangan sepelekan istirahat saat mudik, kamu perlu setidaknya stop 2-3 jam sekali untuk mengisitirahatkan otot-otot di badan, mengisi perut, dan kegiatan relaksasi lainnya. Kalau mau santai, ada fitur video streaming Hooq di aplikasi Grab untuk nonton film-film atau acara TV nasional live!</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End tips Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-12">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Lalow, Lolak, Kabupaten Bolaang Mongondow<br>Sulawesi Utara</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone align-items-center"></i>
                  <h3>Telepon</h3>
                  <p>+62 -</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>Dishub.bolmong@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Buka</h3>
                  <p>Senin - Jum'at<br>07.30 - 16.00</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section id="footer" className="text-center">


    <div className="container">
      <div className="row">
        <div className="col-md-12 col-sm-6 col-xs-12">
        <p>Dinas Perhubungan Kabupaten Bolaang Mongondow</p>
          <p className="copyright-text">Copyright &copy; 2021 by  <a href="#"> E-Government</a> Diskominfo</p>
        </div>
      </div>
    </div>
    
  </section>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!--Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>