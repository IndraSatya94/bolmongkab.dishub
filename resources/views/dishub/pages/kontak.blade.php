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

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Kontak</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

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
