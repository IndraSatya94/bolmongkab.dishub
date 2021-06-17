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
          <h2>Tugas dan Fungsi</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Tugas dan Fungsi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= visimisi Section ======= -->
    <section id="tugasfungsi" class="tugasfungsi">
    @foreach ($tugasfungsi as $tf)
      <div class="container">

            <h2>TUGAS DAN FUNGSI</h2>
            <p>{{$tf->body}}
            </p>

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
          <p className="copyright-text">Copyright &copy; 2021 by  <a href="#"> E-Government</a> Diskominfo Bolmong</p>
        </div>
      </div>
    </div>
    
  </section>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('dishub.pages.layout.script')

</body>

</html>