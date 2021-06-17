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
    <section id="struktur" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Struktur Organisasi</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="struktur" class="struktur">
    @foreach($strukturs as $struktur)
      <div class="container">

            <h2>STRUKTUR ORGANISASI</h2>
            <img src="image/struktur/{{$struktur->image}}" alt="">
            <p>{{$struktur->body}}</p>

      </div>
      @endforeach
    </section><!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section id="footer" className="text-center">


    <div className="container">
      <div className="row">
        <div className="col-md-12 col-sm-6 col-xs-12">
        <p>Dinas Perhubungan Kabupaten Bolaang Mongondow</p>
          <p className="copyright-text">Copyright &copy; 2021 by  <a href="#"> E-Government</a> Diskominfo Bolmong</p>
        </div>
      </div>
    </div>
    
  </section>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('dishub.pages.layout.script')

</body>

</html>