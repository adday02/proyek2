<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tanya</title>
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
          <a href="#" class="d-block">{{auth()->user()->nama}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{URL('pegawai-tanya')}}" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="{{URL('pegawai-profile')}}" class="nav-link ">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Materi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('pegawai-dokumen')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Dokumen
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('pegawai-jadwal')}}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL('pegawai-tanya')}}" class="nav-link active">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Tanya Jawab
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
            <h1>Data Tanya Jawab</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Pegawai</li>
              <li class="breadcrumb-item active"><a href="{{URL('pegawai-tanya')}}">tanya</a></li>
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
                <h3 class="card-title">Tabel Tanya Jawab</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="btnAdd">
                 
              </div>
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Masyarakat</th>
                    <th>Pertanyaan</th>
                    <th>Pegawai</th>
                    <th>Jawaban</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($tanyas as $tanya)
                    <tr>
                    @if(($tanya->nip==auth()->user()->nip)||($tanya->jawaban=="kosong"))
                      <td width="1%">{{++$i}}</td>
                      <td width="15%">{{$tanya->masyarakat->nama}}</td>
                      <td width="22%">{{$tanya->pertanyaan}}</td>
                      <td width="8%">{{$tanya->pegawai->nama}}</td>
                      <td width="12%">{{$tanya->jawaban}}</td>
                      
                      <td width="8%">
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$tanya->id_tanya}}" >Jawab</button>
                       </td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   <th>No</th>
                    <th>Masyarakat</th>
                    <th>Pertanyaan</th>
                    <th>Pegawai</th>
                    <th>Jawaban</th>
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
@foreach ($tanyas as $tanya)
<!-- Modal Ubah Data  -->
<div id="edit{{$tanya->id_tanya}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Ubah Jawaban</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form action="{{route('pegawai-tanya.update', $tanya->id_tanya)}}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                @if($tanya->jawaban!="kosong")
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Jawaban</label>
                    <div class="col-sm-8">        
                        <input type="text" name="jawaban" class="form-control" value="{{$tanya->jawaban}}" required>
                    </div>
                </div>
                @else
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Jawaban</label>
                    <div class="col-sm-8">        
                        <input type="text" name="jawaban" class="form-control" value="" required>
                    </div>
                </div>
                @endif
                <input type="hidden" name=nip value="{{auth()->user()->nip}}">

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
