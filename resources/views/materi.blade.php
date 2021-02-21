<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
       <title>Materi</title>  
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
					<img src="images/logo.jpg" alt="" height="90px" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{URL('/')}}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL('/pegawai')}}">Pegawai</a></li>
                        <li class="nav-item dropdown active">
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
		</nav>
	</header>
	<!-- End header -->
	
	<div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Vidoe Penyuluhan</h3>
            </div><!-- end title -->           
        </div><!-- end container -->
    </div><!-- end section -->	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Fitur Materi penyuluhan ini berisi tentang video - video rekapan hasil penyuluhan yang telah dilaksanakan. Sasaran penyuluhan kesehatan yaitu mencakup individu, keluarga, kelompok dan masyarakat. </p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                @foreach($materis as $materi)
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog" heigth="100px" >
                        <img src="{{URL::to('/')}}/foto/{{$materi->foto}}" class="fa-image" width="100px" href="URL::to('/')}}/foto/{{$materi->foto}}">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="video" data-toggle="modal" data-target="#video{{$materi->id_materi}}">{{$materi->judul}}</a></h2>
							</div>
							<div class="course-desc">
								<p>{{$materi->deskripsi}}</p>
							</div>
						</div>
					</div>
                </div>
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
@foreach ($materis as $materi)
<!-- Modal Ubah Data  -->
<div id="video{{$materi->id_materi}}" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg" role="document">

<!--Content-->
<div class="modal-content">

  <!--Body-->
  <div class="modal-body mb-0 p-0">

    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
    <video controls>
      <source src="{{URL::to('/')}}/video/{{$materi->video}}" type="video/mp4">
</video>
    </div>

  </div>

  <!--Footer-->
  <div class="modal-footer justify-content-center flex-column flex-md-row">
    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
      data-dismiss="modal">Close</button>


  </div>

</div>
<!--/.Content-->

</div>
   </div>
@endforeach
</body>
</html>