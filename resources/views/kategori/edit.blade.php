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
                            <h1 class="m-0 text-dark">Kelola Halaman Kategori Pengumuman</h1>
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
                    <strong>Periksa Kembali Inputan Anda</strong><br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card card-primary" style="margin-top:10px;">
                    <div class="card-header">
                        Edit Kategori Pengumuman
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update',$kategori->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Nama:</strong>
                                    <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control"
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <button type="submit" class="btn btn-primary"
                                    onClick="return confirm('Ubah Data ?')">Submit</button>
                                <a class="btn btn-light" href="{{ route('kategori.index') }}">Cancel</a>
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
