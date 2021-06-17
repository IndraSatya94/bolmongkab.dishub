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

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Visi dan Misi</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Visi dan Misi</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= visimisi Section ======= -->
        <section id="visimisi" class="visimisi">
            @foreach ($visimisi as $vmisi)
            <div class="container">
                <div class="judul">
                    <h2 class="animate__animated animate__bounceInDown">VISI DAN MISI</h2>
                    <hr>
                    <img class="animate__animated animate__bounceInLeft animate__fast" src="image/statiks/{{ $vmisi->image }}"
                        alt="">
                </div>
                <p class="animate__animated animate__bounceInRight animate__fast">{{ $vmisi->body }}</p>
            </div>
            @endforeach
        </section><!-- End visimisi Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section id="footer" className="text-center">


        <div className="container">
            <div className="row">
                <div className="col-md-12 col-sm-6 col-xs-12">
                    <p>Dinas Perhubungan Kabupaten Bolaang Mongondow</p>
                    <p className="copyright-text">Copyright &copy; 2021 by <a href="#"> E-Government</a> Diskominfo
                        Bolmong</p>
                </div>
            </div>
        </div>

    </section>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    @include('dishub.pages.layout.script')

</body>

</html>
