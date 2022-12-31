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


                        {{-- START DISQUS --}}
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://goldserve.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>

                        {{-- END DISQUS --}}




							</div>
                            <!-- /.comment-section -->


						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.comment-area -->
			</div> <!-- /.blog-details -->




@endsection
