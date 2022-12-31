@extends('frontend.layouts_frontend.master')

@section('title')
    Contact Us
@endsection

@section('content')

	
			<!-- 
			=============================================
				Theme Inner Banner 
			============================================== 
			-->
			<div class="inner-page-banner">
				<div class="opacity">
					<h1>Contact US</h1>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>Contact</li>
					</ul>
				</div> <!-- /.opacity -->
			</div> <!-- /inner-page-banner -->



			<!-- 
			=============================================
				Contact Us
			============================================== 
			-->
			<div class="contact-us">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-6 col-xs-12">
							<div class="contact-us-form">
								<form action="https://html.creativegigstf.com/gullu/inc/sendemail.php" class="form-validation" autocomplete="off">
									<input type="email" placeholder="Email Address*" name="email">
									<input type="text" placeholder="Subject*" name="sub">
									<textarea placeholder="Your Message*" name="message"></textarea>
									<button class="p-bg-color hvr-trim-two">SEND MESSAGE</button>
								</form>
							</div> <!-- /.contact-us-form -->
						</div> <!-- /.col- -->
						<div class="col-lg-5 col-md-6 col-xs-12">
							<div class="contact-address">
								<h2>Don’t Hesitate to contact with us for any kind of information</h2>
								<p>Call us for imiditate support this number</p>
								<a href="#" class="tran3s">Uganda: +256-312-531-682</a>
								<!-- <a href="#" class="tran3s">Tanzania: +256-312-531-682</a> -->
								<ul>
									<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://twitter.com/GoldServe_QHSE" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<!-- <li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> -->
									<li><a href="https://www.linkedin.com/company/goldserve" class="tran3s"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.contact-address -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.conatiner -->

				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us -->


			<!-- Google Map _______________________ -->
			<div id="google-map-area">
				<div class="google-map" id="contact-google-map" data-map-lat="0.313903" data-map-lng="32.579711" data-map-title="Find Map" data-map-zoom="12"></div>
	   		 </div>
    
@endsection
