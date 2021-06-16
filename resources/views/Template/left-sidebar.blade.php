<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLte/dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3"
            style="opacity: .8" alt="AdminLTE Logo">
        <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-4 pb-4 mb-4 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                    <a href="{{ route('berita.index') }}"
                        class="nav-link {{ (request()->is('berita')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Berita</p>
                    </a>
                </li>
                
               <li class="nav-item">
                    <a href="{{ route('tips.index') }}"
                        class="nav-link {{ (request()->is('tips')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Tips</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('agenda.index') }}"
                        class="nav-link {{ (request()->is('agenda')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Agenda</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('banner.index') }}"
                        class="nav-link {{ (request()->is('banner')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Banner</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dinasdetail.index') }}"
                        class="nav-link {{ (request()->is('dinasdetail')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Detail Dinas</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('download.index') }}"
                        class="nav-link {{ (request()->is('download')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Download</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kecamatan.index') }}"
                        class="nav-link {{ (request()->is('kecamatan')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Kecamatan</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ (request()->is('pengumuman','kategori')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>
                            Management Pengumuman
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pengumuman.index') }}"
                                class="nav-link {{ (request()->is('pengumuman')) ? 'active' : '' }}">
                                <i class="fas fa-minus"></i>
                                <p>Pengumuman</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('kategori.index') }}"
                                class="nav-link {{ (request()->is('kategori')) ? 'active' : '' }}">
                                <i class="fas fa-minus"></i>
                                <p>Kategori Pengumuman</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ (request()->is('pengumuman','kategori')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>
                            Management Pimpinan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('jabatan.index') }}"
                                class="nav-link {{ (request()->is('jabatan')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right"></i>
                                <p>Jabatan</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('pimpinan.index') }}"
                                class="nav-link {{ (request()->is('pimpinan')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right"></i>
                                <p>Pimpinan</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ (request()->is('sejarah','detailsejarah')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>
                            Management Sejarah
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('sejarah.index') }}"
                                class="nav-link {{ (request()->is('sejarah')) ? 'active' : '' }}">
                                <i class="fas fa-minus"></i>
                                <p>Sejarah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('detailsejarah.index') }}"
                                class="nav-link {{ (request()->is('detailsejarah')) ? 'active' : '' }}">
                                <i class="fas fa-minus"></i>
                                <p>Detail Sejarah</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @if (auth()->user()->level == "admin")
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Management User</p>
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a href="{{ route('pelayanan.index') }}"
                        class="nav-link {{ (request()->is('pelayanan')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Pelayanan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pimpinan.index') }}"
                        class="nav-link {{ (request()->is('pimpinan')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Pimpinan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('puskesmas.index') }}"
                        class="nav-link {{ (request()->is('puskesmas')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Puskesmas</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('slide.index') }}"
                        class="nav-link {{ (request()->is('slide')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Slide</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tags.index') }}" class="nav-link {{ (request()->is('tags')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p>Tags</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('visimisi.index') }}"
                        class="nav-link {{ (request()->is('visimisi')) ? 'active' : '' }}">
                        <i class="fas fa-caret-right"></i>
                        <p> Visi dan Misi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fas fa-caret-right"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
