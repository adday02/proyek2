<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
     <title>Pegawai</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 
    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{URL('/')}}">
                    <img src="images/logo.jpg" alt="" height="90px"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{URL('/')}}">Beranda</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{URL('/pegawai')}}">Pegawai</a></li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Materi </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{URL('/materi')}}">Video </a>
								<a class="dropdown-item" href="{{URL('/dokumen')}}">Dokumen </a>
							</div>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Jadwal </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{URL('/jadwal')}}">Akan Terlaksana </a>
                                <a class="dropdown-item" href="{{URL('/jadwalterlaksana')}}">Telah Terlaksana </a>
                                <a class="dropdown-item" href="{{URL('/jadwalbatal')}}">Batal Terlaksana </a>    
							</div>
						</li>
                       <li class="nav-item"><a class="nav-link" href="{{URL('/contact')}}">Tentang Kami</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="{{URL('/masuk')}}"><span>Login</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	<!-- End header -->
	<div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Pegawai Puskesmas</h3>
            </div><!-- end title -->           
        </div><!-- end container -->
    </div><!-- end section -->	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
                @foreach ($pegawais as $pegawai)
                @if($pegawai->nip!="kosong")
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{URL::to('/')}}/foto/{{$pegawai->foto}}" class="fa-image" width="100px" href="URL::to('/')}}/foto/{{$pegawai->foto}}">
						</div>
						<div class="team-content">
                        <div class="course-title">
                            <a href="#" title="Detail Pegawai" data-toggle="modal" data-target="#detail{{$pegawai->nip}}">{{$pegawai->nama}}</a>
						</div>	
                            <span class="post">{{$pegawai->jabatan}}</span>
						</div>
					</div>
				</div>
                @endif
                @endforeach
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
	<script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/timeline.min.js"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>

@foreach ($pegawais as $pegawai)
<!-- Modal Ubah Data  -->
<div id="detail{{$pegawai->nip}}" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Detail Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                

                <div class="row form-group">
                    <label class="col-sm-4 control-label">NIP</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{ $pegawai->nip }}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Nama</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{ $pegawai->nama }}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Jabatan</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{ $pegawai->jabatan }}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{ $pegawai->jk }}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Tanggal Lahir</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{ $pegawai->tl}}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">No HP</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{ $pegawai->no_hp }}" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-8">        
                        <input class="form-control" value="{{ $pegawai->alamat }}" readonly>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>             
            </form>
            </div>        
        </div>
    </div>
@endforeach


</body>
</html>