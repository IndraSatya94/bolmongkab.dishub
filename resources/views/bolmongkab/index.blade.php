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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->
  <!-- <link href="assets/vendor/venobox/venobox.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->


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
          <li class="active"><a href="{{ ('/') }}">Beranda</a></li>

          <li class="drop-down"><a href="#">Pemerintah</a>
            <ul>
              <li><a href="{{ ('/visimisitemp') }}">Visi dan Misi</a></li>
              <li class="drop-down"><a href="#">Pimpinan</a>
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
              <li><a href="{{ ('/pengumumantemp') }}">Pengumuman</a></li>
              <li><a href="{{ ('/puskesmastemp') }}">Puskesmas</a></li>
              <!-- <li><a href="{{ ('/rpjmdtemp') }}">RPJMD</a></li> -->
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
     <!-- ======= pimpinan Section ======= -->
     <section id="pimpinan" class="pimpinan">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PIMPINAN</h2>
        </div>

        <div class="row">
          @foreach ($pimpinan as $pimpin)

          <div class="col-lg-4 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <div class="member-img">
                <img src="/image/{{ $pimpin->image }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ $pimpin->jabatan}}</h4>
                <span>{{ $pimpin->nama}}</span>
              </div>
            </div>
          </div>
          
          @endforeach
        </div>
        
      </div>
      
    </section><!-- End pimpinan Section -->
    
    <!-- ======= sekilas Section ======= -->
    <section id="sekilas" class="sekilas">
        <div class="section-title">
          <h2>SEKILAS BOLMONG</h2>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-7" data-aos="fade-right">
            <img src="assets/img/bogani.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-8 col-lg-5 pt-5 pt-lg-0">
            <p data-aos="fade-up">
              Kabupaten Bolaang Mongondow adalah kabupaten di provinsi Sulawesi Utara, Indonesia. Ibu kotanya adalah Lolak[1]. Etnis Mayoritas di kabupaten ini adalah Suku Mongondow. Bahasa ibu penduduk asli di daerah ini adalah Bahasa Mongondow.
              Kabupaten Bolaang Mongondow ditetapkan pada tanggal 23 Maret 1954, terletak pada salah satu daerah Sulawesi Utara yang secara historis geografis adalah bekas danau, serta merupakan daerah subur penghasil utama tambang dan hasil bumi lainnya.
              Wilayah Kabupaten Bolaang Mongondow telah mengalami sejumlah pemekaran. Tahun 2007 dimekarkan menjadi Kota Kotamobagu dan Kabupaten Bolaang Mongondow Utara. Pada tahun 2008 dimekarkan lagi menjadi Kabupaten Bolaang Mongondow Timur dan Kabupaten Bolaang Mongondow Selatan.
            </p>
            <div class="read-more">
              <a href="{{ ('/sejarahtemp') }}">Selengkapnya</a>
            </div>
          </div>
        </div>
    </section><!-- End sekilas Section -->
    

    <section id="blue" class="pelayanan">

      <div class="container" data-aos="fade-up">

        <div class="section-titlebiru">
          <h2>PELAYANAN</h2>
        </div>

        <div class="pelayanan-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            @foreach ($pelayanan1 as $layanan)
            <div class="swiper-slide">
              <div class="layanan-item">
                <div class="profile mt-auto">
                  <img src="/image/pelayanan/{{ $layanan->icon }}" class="img-fluid" alt="">
                  <a href="{{ $layanan->link }}"><h3>{{ $layanan->nama }}</h3></a>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="pelayanan-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            @foreach ($pelayanan2 as $layanan)
            <div class="swiper-slide">
              <div class="layanan-item">
                <div class="profile mt-auto">
                  <img src="/image/pelayanan/{{ $layanan->icon }}" class="layanan-img" alt="">
                  <a href="{{ $layanan->link }}"><h3>{{ $layanan->nama }}</h3></a>
                </div>
              </div>
            </div><!-- End layanan item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End pelayanan Section -->

      <div class="social-media">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>

    <!-- ======= widget Section ======= -->
    <section id="widget" class="widget">
      <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/q29F9Kc0grA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4" data-aos="fade-up">
              <iframe name="fe4824ddba3a1c" width="100%" height="100%" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=604850960329645&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df367608c00b3c88%26domain%3Dbolmongkab.go.id%26origin%3Dhttps%253A%252F%252Fbolmongkab.go.id%252Ff16e32154832d6%26relation%3Dparent.parent&amp;container_width=387&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdiskominfo.bolmong%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 100%; height: 100%;" class=""></iframe>
            </div>
      </div>
      </div>
  </section><!-- End widget Section -->

    <!-- ======= Pengumuman Section ======= -->
    <section id="blue" class="pengumuman">
      <div class="container">
        <div class="row">
          

          
          <div class="col-lg-8  col-md-6" data-aos="fade-up">
            <div class="section-titlebiru">
              <h2>PENGUMUMAN</h2>
            </div>
            @foreach ($pengumuman as $pengumum)
            <article class="entry">

              <h2 class="entry-title">
                <a href="{{ route('pengdet',$pengumum->id) }}" method="POST">{{ $pengumum->judul }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="pengumuman-detail.html">{{ $pengumum->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="pengumuman-detail.html">{{ $pengumum->created_at }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {{ $pengumum->konten }}
                </p>
                <div class="read-more">
                  <a href="{{ route('pengdet',$pengumum->id) }}" method="POST">Selengkapnya...</a>
                </div>
              </div>
              
            </article><!-- End pengumuman entry -->
            @endforeach
          </div>  
          

          <div class="agenda-index col-lg-4" data-aos="fade-up">
            <div class="section-titlebiru">
              <h2>AGENDA</h2>
            </div>
            @foreach ($agenda as $agen)
            <article class="entry">
              <h2 class="entry-title">
                <a href="{{ route('agenda-detail',$agen->id) }}">{{$agen->acara}}</a>
              </h2>

              <div class="entry-meta">
               
                  <h4>Dilaksanakan pada : {{$agen->tanggal}}</h4>

              </div>
            </article><!-- End agenda entry -->
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End pengumuman Section -->

    <!-- ======= widget Section ======= -->
    <!-- <section id="ekliping" class="ekliping">
      <div class="section-title">
        <h2>E-KLIPING</h2>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <a href="e-kliping.bolmongkab.go.id"><img src="assets/img/ekliping/ekliping.jpg" alt=""></a>
        </div>
      </div>
    </section> -->

    <section id="banner" class="banner">
      <div class="section-title">
        <h2>BANNER</h2>
      </div>
          <div class="row">
          @foreach($banner as $ban)
            <div class="col-lg-3">
              <a href="{{$ban->link}}"><img src="/image/banner/{{ $ban->image }}"></a>
            </div>
          @endforeach
            <!-- <div class="col-lg-3">
              <img src="assets/img/widget/pakai-masker.jpg" alt="">
            </div>
            <div class="col-lg-3">
              <a href="e-kliping.bolmongkab.go.id"><img src="assets/img/ekliping/ekliping.jpg" alt=""></a>
            </div> -->
            <div class="col-lg-3">
              <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
              <div id="gpr-kominfo-widget-container"></div>
          </div>
        </div>
     
  </section><!-- End widget Section -->


  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="https://ppid.bolmongkab.go.id/">PPID</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://jdih.bolmongkab.go.id/">JDIH</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://bolmongkab.go.id/sideka/">Sideka Bolmong</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://sicantikui.layanan.go.id/#/login">Sicantik Cloud</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://sinta.bolmongkab.go.id/">Sinta Bolmong</a></li>
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
        Copyright &copy; 2021 by  <a href="#"> E-Government</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> <!--mengatur galeri-->
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/venobox/venobox.min.js"></script> -->
  <!-- <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> -->
  <!-- <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> -->
  <script src="assets/js/main.js"></script>


</body>

</html>