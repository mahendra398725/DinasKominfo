<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>eLayanan -  @yield('tittle')</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link href="{{ asset('assetsweb/img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetsweb/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('assetsweb/style.css') }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('assetsweb/css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assetsweb/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assetsweb/css/custom.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assetsweb/css/font-awesome.css') }}" type="text/css">

    <!-- Modernizer for Portfolio -->
    <script src="{{ asset('assetsweb/js/modernizer.js') }}"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

	<style type="text/css">
	.justify { 
			text-align: justify;
		}
	</style>
	<style>
		.field-icon {
		float: right;
		margin-right: 20px;
		margin-top: -35px;
		position: relative;
		z-index: 2;
		}
	 </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login or Register</h4>
			</div>
			<div class="modal-body customer-box">
				
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal" action="{{ url('/postlogin') }}" method="post">
                            {{ csrf_field () }}
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="email" type="email" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control password-field" name="password" type="password" placeholder="Password" id="password-field" required>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password-icon-log"></span>
									<small class="form-text text-muted"><i><span class="text-danger">*Password minimal 8 karakter</span></i></small>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<center>
										<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
											Login
										</button>
										<a class="btn btn-light btn-radius btn-brd grd1" href="{{ url('/register') }}">Daftar Akun</a>
									</center>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

	<!-- Modal Logout -->
	<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		  <div class="modal-content">
			  <div class="modal-header tit-up">
				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				  <h4 class="modal-title">Login or Register</h4>
			  </div>
			  <div class="modal-body customer-box">
				  <!-- Nav tabs -->
				  <div class="row">
					  
					  <div class="col-lg-6">
						  <center>
							<ul class="nav nav-tabs">
								<li><a href="{{ action('AuthController@logout') }}">Logout</a></li>
							</ul>
						  </center>
						</div>
				  </div>
				  <!-- Tab panes -->
			  </div>
		  </div>
		</div>
	  </div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	@include('layouts.header')
    @yield('content')

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">QuickCloud</a> Design By : <a href="#">html design</a></p>
                </div>

                <div class="footer-right">
                    <ul class="footer-links-soi">
						<li><a target="_blank" href="https://www.instagram.com/dinaskominfo_tulungagung/"><i class="fa fa-instagram"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/DinasKominfoTulungagung/"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/channel/UCA6dVQwLj6xrGlkTapEGlVg"><i class="fa fa-youtube"></i></a></li>
					</ul><!-- end links -->
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assetsweb/js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assetsweb/js/custom.js') }}"></script>
	<script src="{{ asset('assetsweb/js/timeline.min.js') }}"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>
<script>
	$(".toggle-password-icon-log").click(function() {
		  $(this).toggleClass("fa-eye fa-eye-slash");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
		  input.attr("type", "text");
		  } else {
		  input.attr("type", "password");
		  }
	   });
</script>
<script>
	$(".toggle-password-icon-reg").click(function() {
		  $(this).toggleClass("fa-eye fa-eye-slash");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
		  input.attr("type", "text");
		  } else {
		  input.attr("type", "password");
		  }
	   });
 </script>