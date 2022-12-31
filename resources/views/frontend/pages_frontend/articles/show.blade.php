@extends('frontend.layouts_frontend.master')

@section('title')
    Post Details
@endsection

@section('content')



			<div class="inner-page-banner">
				<div class="opacity">
					<h1>Blog Details</h1>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>Blog Details</li>
					</ul>
				</div> <!-- /.opacity -->
			</div> <!-- /inner-page-banner -->



			<!--
			=============================================
				Blog Details
			==============================================
			-->
			<div class="blog-details blog-v3">
				<div class="container">
					<div class="wrapper">
						<div class="blog-main-post">
                            @if (($post->post_photo))
                            <div class="single-blog">
                                <div class="image">
                                    <img src="{{ asset($post->post_photo) }}" alt="">
                                </div>
                                @else
                                <p class="text-danger">No Photo</p>
                            @endif

							<h6>{{ $post->post_title }}</h6>
                            <h6 style="margin-top: 20px;">By: {{ $post->post_created_by }}</h6>
							<p>{{ $post->post_description }} </p> <br>

						</div> <!-- /.blog-main-post -->
						{{-- <div class="tag-option clearfix">
							<ul class="float-left">
								<li>Tag:</li>
								<li><a href="#" class="tran3s">Travel,</a></li>
								<li><a href="#" class="tran3s">Advanture,</a></li>
								<li><a href="#" class="tran3s">Landscape</a></li>
							</ul>
							<ul class="float-right">
								<li>Share:</li>
								<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div> --}}


					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->

				<div class="comment-area">
					<div class="container">
						<div class="wrapper">
							<div class="comment-section">
								<h2>2 comments</h2>
								<div class="single-comment clearfix">
									<img src="images/blog/20.jpg" alt="" class="float-left">
									<div class="comment float-left">
										<h6>Jannatul Fa.</h6>
										<span>15 April, 2016 At 8:30am</span>
										<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true we experience the emotional sensation of stress from our first.</p>
										<button class="tran3s">Reply</button>
									</div>
								</div> <!-- /.single-comment -->
								<div class="single-comment clearfix no-border">
									<img src="images/blog/21.jpg" alt="" class="float-left">
									<div class="comment float-left">
										<h6>Jannatul Fa.</h6>
										<span>15 April, 2016 At 8:30am</span>
										<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future</p>
										<button class="tran3s">Reply</button>
									</div>
								</div> <!-- /.single-comment -->
							</div> <!-- /.comment-section -->

							<div class="leave-comment">
								<h2>Leave A Comment</h2>
								<p>sing in to post your comment or singup if you dont have any account.</p>
								<form action="#">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" placeholder="Name *">
										</div>
										<div class="col-sm-6">
											<input type="email" placeholder="Email *">
										</div>
										<div class="col-xs-12">
											<textarea placeholder="Your Comment"></textarea>
										</div>
									</div>
									<button class="p-bg-color hvr-trim-two">Post COmment</button>
								</form>
							</div> <!-- /.leave-comment -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.comment-area -->
			</div> <!-- /.blog-details -->




@endsection
