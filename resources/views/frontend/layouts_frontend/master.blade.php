<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#2c2c2c">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#2c2c2c">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#2c2c2c">

		<title>@yield('title')</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/frontend/images/fav-icon/icon.png') }}">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->


	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader">
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			@include('frontend.includes_frontend.header_frontend')

			<!--
			=============================================
				Theme Main Banner
			==============================================
			-->



            @yield('content')

             <!-- Footer Start -->
                @include('frontend.includes_frontend.footer')
            <!-- Footer End -->




	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>


			<!-- Sign-Up Modal -->
			<div class="modal fade signUpModal theme-modal-box" role="dialog">
				<div class="modal-dialog">
				    <!-- Modal content-->
				    <div class="modal-content">
					    <div class="modal-body">
					        <h3>Login with Social Networks</h3>
					        <ul class="clearfix">
					        	<li class="float-left"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
					        	<li class="float-left"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Google</a></li>
					        	<li class="float-left"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
					        	<li class="float-left"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
					        </ul>
					        <form action="#">
					        	<h6><span>or</span></h6>
					        	<div class="wrapper">
					        		<input type="text" placeholder="Username or Email">
					        		<input type="password" placeholder="Password">
					        		<ul class="clearfix">
										<li class="float-left">
											<input type="checkbox" id="remember">
											<label for="remember">Remember Me</label>
										</li>
										<li class="float-right"><a href="#" class="p-color">Lost Your Password?</a></li>
									</ul>
									<button class="p-bg-color hvr-trim-two">Login</button>
					        	</div>
					        </form>
					    </div> <!-- /.modal-body -->
				    </div> <!-- /.modal-content -->
				</div> <!-- /.modal-dialog -->
			</div> <!-- /.signUpModal -->



		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.2.2.3.min.js') }}"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/bootstrap/bootstrap.min.js') }}"></script>

		<!-- Vendor js _________ -->
		<!-- Camera Slider -->
		<script type='text/javascript' src='{{ asset('assets/frontend/vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}'></script>
	    <script type='text/javascript' src='{{ asset('assets/frontend/vendor/Camera-master/scripts/jquery.easing.1.3.js') }}'></script>
	    <script type='text/javascript' src='{{ asset('assets/frontend/vendor/Camera-master/scripts/camera.min.js') }}'></script>
	    <!-- Mega menu  -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/bootstrap-mega-menu/js/menu.js') }}"></script>

		<!-- WOW js -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.appear.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.countTo.js') }}"></script>
		<!-- Fancybox -->
		<script type="text/javascript" src="{{ asset('assets/frontend/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

		<!-- Theme js -->
		<script type="text/javascript" src="{{ asset('assets/frontend/js/theme.js') }}"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>

</html>
