<!DOCTYPE html>
<html lang="en">

<head>

    @include('dishub.pages.layout.head')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">

        @include('dishub.pages.layout.header')

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

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang</h3>
                            <h2>Dinas Perhubungan</h2>
                            <p>
                                Dinas Perhubungan (DISHUB) merupakan unsur pelaksana Pemerintah Daerah di bidang
                                Perhubungan yang dipimpin oleh Kepala Dinas dan berkedudukan di bawah dan
                                bertanggungjawab kepada Bupati melalui Sekretaris Daerah.
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

                    @foreach($beritas as $berita)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="image/berita/{{$berita->image}}" class="img-fluid" alt="">
                            </div>
                            <span class="post-date">{{$berita->created_at}}</span>
                            <h3 class="post-title">{{$berita->judul}}</h3>
                            <a href="{{ route('v-berita-detail',$berita->id) }}"
                                class="readmore stretched-link mt-auto"><span>Baca..</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="lainnya">
                    <h4><a href="{{ ('v-berita') }}">Berita Lainnya</a></h2>
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
                                <p>kendaraan bermotor, kereta api, gerobak yang ditarik oleh hewan (kuda, sapi,kerbau),
                                    atau manusia. </p>
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
                                <p>Alat transportasi udara dapat menjangkau tempat – tempat yang tidak dapat ditempuh
                                    dengan alat transportasi darat atau alat transportasi laut.Contoh alat transportasi
                                    udara misalnya pesawat terbang, helicopter, balon udara, dll.</p>
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

                    @foreach($tips as $tip)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tips-box blue">
                            <div class="tips-img">
                                <img src="/image/tips/{{ $tip->image }}" class="img-fluid" alt="">
                            </div>
                            <h3>{{ $tip->judul_tips }}</h3>
                            <p>{{ $tip->body }}</p>
                        </div>
                    </div>
                    @endforeach

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

                    @foreach($kontaks as $kontak)
                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>{{$kontak->alamat}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone align-items-center"></i>
                                    <h3>Telepon</h3>
                                    <p>{{$kontak->telepon}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p>{{$kontak->email}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Buka</h3>
                                    <p>Senin - Jum'at<br>{{$kontak->buka}} - {{$kontak->tutup}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

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
                    <p className="copyright-text">Copyright &copy; 2021 by <a href="#"> E-Government</a> Diskominfo</p>
                </div>
            </div>
        </div>

    </section>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('dishub.pages.layout.script')

</body>

</html>
