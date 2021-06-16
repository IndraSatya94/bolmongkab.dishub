<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">

<head>
    <title>AdminLTE 3 | Starter</title>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Kelola Halaman Detail Dinas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="content">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Periksa Kembali Inputan Anda !</strong><br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card card-primary" style="margin-top:10px;">
                    <div class="card-header">
                        Tambah Detail Dinas
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dinasdetail.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-xs-12 col-sm-124 col-md-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Dinas</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="dinas" id="dinas">
                                            <option value="">Pilih Tab</option>
                                            <option value="diskominfo">Diskominfo</option>
                                            <option value="disdik">Dinas Pendidikan</option>
                                            <option value="dinkes">Dinas Kesehatan</option>
                                            <option value="dinsos">Dinas Sosial</option>
                                            <option value="disbun">Dinas Perkebunan</option>
                                            <option value="disdukcapil">Dinas Kependudukan & Catatan Sipil</option>
                                            <option value="dishub">Dinas Perhubungan</option>
                                            <option value="diskopukm">Dinas Koperasi, Usaha Kecil & Menengah</option>
                                            <option value="disnakertrans">Dinas Tenaga Kerja & Transmigrasi</option>
                                            <option value="dispar">Dinas Pariwisata</option>
                                            <option value="disperindag">Dinas Perindustrian & Perdagangan</option>
                                            <option value="dispora">Dinas Pemuda & Olahraga</option>
                                            <option value="dispusip">Dinas Perpustakaan & Kearsipan</option>
                                            <option value="distan">Dinas Pertanian</option>
                                            <option value="dkp">Dinas Ketahanan Pangan</option>
                                            <option value="dlh">Dinas Lingkungan Hidup</option>
                                            <option value="dp3a">Dinas Pemberdayaan Perempuan & Perlindungan Anak
                                            </option>
                                            <option value="dpkp">Dinas Perumahan Rakyat & Kawasan Pemukiman</option>
                                            <option value="dpmd">Dinas Pemberdayaan Masyarakat & Desa</option>
                                            <option value="dpmptsp">Dinas Penanaman Modal & Pelayanan Terpadu Satu Pintu
                                            </option>
                                            <option value="dppkb">Dinas Pengendalian Penduduk & Keluarga Berencana
                                            </option>
                                            <option value="dpupr">Dinas Pekerjaan Umum & Penataan Ruang</option>
                                            <option value="diskan">Dinas Perikanan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Pimpinan:</strong>
                                    <input type="text" value="{{ old('pimpinan') }}" name="pimpinan" class="form-control" placeholder="Pimpinan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jabatan:</strong>
                                    <input type="text" value="{{ old('jabatan') }}" name="jabatan" class="form-control" placeholder="Jabatan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Alamat:</strong>
                                    <textarea class="form-control" style="height:150px" name="alamat"
                                        placeholder="Alamat">{{ old('alamat') }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Telp:</strong>
                                    <input type="text" value="{{ old('telp') }}" name="telp" class="form-control" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Website:</strong>
                                    <input type="text" value="{{ old('website') }}" name="website" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Struktur Organisasi:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <button type="submit" class="btn btn-primary"
                                    onClick="return confirm('Simpan ?')">Simpan</button>
                                <a class="btn btn-light" href="{{ route('dinasdetail.index') }}">Batal</a>
                            </div>

                        </form>
                    </div>
                </div>



            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('Template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
</body>

</html>
