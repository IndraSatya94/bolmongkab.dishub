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
                            @foreach ($sidebar as $side)
                                <div class="post-item clearfix">
                                <img src="image/berita/{{$side->image}}" alt="">
                                    <h4><a href="{{ route('pengdet',$side->id) }}">{{ $side->judul }}</a></h4>
                                    <time datetime="{{ $side->created_at }}">{{ $side->created_at }}</time>
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

            @include('dishub.pages.layout.script')

</body>

</html>
