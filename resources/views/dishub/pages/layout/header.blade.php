<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

<a href="index.html" class="logo d-flex align-items-center">
  <img src="assets/img/logobolmong.png" alt="">
  <span>DISHUB</span>
</a>
<nav id="navbar" class="navbar">
  <ul>
    <li><a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{ ('/') }}">Beranda</a></li>
    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a class="{{ (request()->is('v-tugasfungsi')) ? 'active' : '' }}" href="{{ ('/v-tugasfungsi') }}">Tugas dan Fungsi</a></li>
        <li><a class="{{ (request()->is('v-visimisi')) ? 'active' : '' }}" href="{{ ('/v-visimisi') }}">Visi dan Misi</a></li>
        <li><a class="{{ (request()->is('v-struktur')) ? 'active' : '' }}" href="{{ ('/v-struktur') }}">Struktur Organisasi</a></li>
      </ul>
    </li>
    <li><a class="{{ (request()->is('v-berita')) ? 'active' : '' }}" href="{{ ('/v-berita') }}">Berita</a></li>
    <li><a class="{{ (request()->is('v-agenda')) ? 'active' : '' }}" href="{{ ('/v-agenda') }}">Agenda</a></li>
    <li><a href="https://ppid.bolmongkab.go.id">PPID</a></li>
    <li><a class="{{ (request()->is('v-galeri')) ? 'active' : '' }}" href="{{ ('/v-galeri') }}">Galeri</a></li>
    <li><a class="{{ (request()->is('v-kontak')) ? 'active' : '' }}" href="{{ ('/v-kontak') }}">Kontak</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>