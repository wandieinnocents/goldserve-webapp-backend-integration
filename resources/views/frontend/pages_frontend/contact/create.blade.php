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
                                {{-- success message --}}
                                @if(session()->has('message'))
                                <div class="alert alert-info">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form  method="post" action="{{ route('contact.store') }}">
                                    @csrf


                                    <input type="text" placeholder="Full Name" name="name" required>
                                    <input type="text" placeholder="Subject*" name="subject" required>
                                    <input type="text" placeholder="Phone" name="phone" required>
                                    <input type="email" placeholder="Email Address*" name="email" required>

									<textarea placeholder="Your Message*" name="description" required></textarea>
									<button type="submit" class="p-bg-color hvr-trim-two">SEND MESSAGE</button>
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
			               	<p>Sorry! Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us -->


			<!-- Google Map _______________________ -->
			{{-- <div id="google-map-area">
				<div class="google-map" id="contact-google-map" data-map-lat="0.313903" data-map-lng="32.579711" data-map-title="Find Map" data-map-zoom="12"></div>
	   		 </div> --}}

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7516120917426!2d32.576434450157954!3d0.33132289975709134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb74c66550b5%3A0x5bf468a846e19c64!2sAHA%20Towers!5e0!3m2!1sen!2sug!4v1672520793433!5m2!1sen!2sug" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection
