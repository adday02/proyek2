<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dokumen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .btnAdd{
      float:right; 
      margin-top:15px;
      margin-right:15px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Welcome</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="Admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Puskesmas</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-pegawai')}}" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Pegawai
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-masyarakat')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Masyarakat
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-materi')}}" class="nav-link">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Materi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-dokumen')}}" class="nav-link active">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Dokumen
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-jadwal')}}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-tanya')}}" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Tanya Jawab
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('admin-kategori')}}" class="nav-link">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('/keluar')}}" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Materi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active"><a href="{{URL('admin-materi')}}">Materi</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Materi Penyuluhan</h3>
              </div>
              <!-- /.card-header -->
              @if($errors->any())
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert"aria-label="close">
                    <span aria-hidden= "true"></span>
                  </button>
                  <div>
                    @foreach ($errors->all() as $error)
                        {{$error}} <br>
                        @endforeach
                  </div>
                </div>
                @endif
              <div class="card-body">
              <div class="btnAdd">
                  <button type="button" class="btn btn-success" data-toggle="modal" 
                  data-target="#tambah" >Tambah Dokumen</button>
              </div>
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pegawai</th>
                    <th>Dokumen</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($dokumens as $dokumen)
                    <tr>
                      <td width="1%">{{++$i}}</td>
                      <td width="15%">{{$dokumen->judul}}</td>
                      <td width="22%">{{$dokumen->pegawai->nama}}</td>
                      <td width="8%">{{$dokumen->pdf}}</td>
                      <td width="12%">{{$dokumen->kategori}}</td>
                      <td width="8%">
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$dokumen->id_dokumen}}" ><i class="fa fa-pen"></i></button>
                          <div style="float:left;">
                            <form action="{{route('admin-dokumen.destroy', $dokumen->id_dokumen)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </form>
                        </div>
                       </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Judul</th>
                    <th>Pegawai</th>
                    <th>Dokumen</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b>1.0.0
    </div>
    <strong>Copyright &copy;Kelompok 1 <a href="http://adminlte.io">Puskesmas Lohbener</a>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="Admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="Admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<div id="tambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('admin-dokumen.store')}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Judul</label>
                    <div class="col-sm-8">        
                        <input type="text" name="judul" class="form-control" required >
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Pegawai</label>
                    <div class="col-sm-8">
                        <select class="input100" type="text" name="nip" required>
                            <option disabled="" selected="" value="">--Pilih Pegawai--</option>
                            @foreach($pegawais as $pegawai)
                            <option value="<?=$pegawai->nip;?> "><?= $pegawai->nama; ?></option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Dokumen</label>
                    <div class="col-sm-8">        
                        <input type="file" name="pdf" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Kategori</label>
                    <div class="col-sm-8">
                        <select class="input100" type="text" name="kategori" required>
                            <option disabled="" selected="" value="">--Pilih Pegawai--</option>
                            @foreach($kategoris as $kategori)
                            <option value="<?= $kategori->nama; ?> "><?= $kategori->nama; ?></option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>

@foreach ($dokumens as $dokumen)
<!-- Modal Ubah Data  -->
<div id="edit{{$dokumen->id_dokumen}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Ubah Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('admin-dokumen.update', $dokumen->id_dokumen)}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Judul</label>
                    <div class="col-sm-8">        
                        <input type="text" name="judul" class="form-control" value="{{$dokumen->judul}}" required>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Pegawai</label>
                    <div class="col-sm-8">
                    <select class="input100" type="text" name="nip">
                            <option disabled="" selected="" value="">--Pilih Pegawai--</option>
                            @foreach($pegawais as $pegawai)
                            <option value="<?=$pegawai->nip;?> "><?= $pegawai->nama; ?></option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Kategori</label>
                    <div class="col-sm-8">
                    <select class="input100" type="text" name="kategori">
                            <option disabled="" selected="" value="">--Pilih Kategori--</option>
                            @foreach($kategoris as $kategori)
                            <option value="<?=$kategori->nama;?> "><?= $kategori->nama; ?></option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-4 control-label">Dokumen</label>
                    <div class="col-sm-8">        
                        <input type="file" name="pdf" select="{{$kategori->pdf}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
</div>
@endforeach
</body>
</html>
