@extends('frontend.layouts_frontend.master')

@section('title')
    Blogs
@endsection

@section('content')
    <!--
       =============================================
        Theme Inner Banner
       ==============================================
       -->
    <div class="inner-page-banner">
        <div class="opacity">
            <h1>Our Blogs</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>/</li>
                <li>News</li>
            </ul>
        </div> <!-- /.opacity -->
    </div> <!-- /inner-page-banner -->



    <!--
       =============================================
        Our Blog / Blog V3
       ==============================================
       -->
    <div class="our-blog blog-v3 blog-with-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-xs-12">

                    {{-- BLOG --}}

                    @foreach($posts as $post)

                    {{-- Photo --}}

                    @if (($post->post_photo))
                    <div class="single-blog">
                        <div class="image">
                            <img src="{{ asset($post->post_photo) }}" alt="">
                        </div>
                        @else
                        <p class="text-danger">No Photo</p>
                    @endif


                        <div class="text">
                            <h6>Admin</h6>
                            <h5><a href="blog-details.html" class="tran3s">We Opening New Branch on Brooklyn</a></h5>
                            <p>Their testimonial videos aren't production quality, but they get the message across, cover
                                useful and relevant information which goes to show you don't need to invest thousands
                                product.</p>
                            <a href="blog-details.html" class="tran3s"><i class="flaticon-arrows"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>

                    @endforeach


                    {{-- PAGINATION --}}

                    <ul class="page-pagination">
                        <li class="active"><a href="#" class="tran3s">1</a></li>
                        <li><a href="#" class="tran3s">2</a></li>
                        <li><a href="#" class="tran3s">3</a></li>
                        <li><a href="#" class="tran3s">Next</a></li>
                    </ul>
                </div> <!-- /.col- -->
                <!-- ======================== Sidebar ========================= -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 blog-sidebar">
                    <div class="sidebar-box sidebar-search">
                        <form action="#">
                            <input type="text" placeholder="Search..">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> <!-- /.sidebar-search -->



                    <div class="sidebar-box sidebar-recent-post">
                        <h3>Latest Blogs</h3>
                        <ul>
                            <li>
                                <a href="#">Monitoring of Data For HSE Performance.</a>
                                <span>12 Dec, 2022</span>
                            </li>
                            <li>
                                <a href="#">Online PowerBI Training</a>
                                <span>22 Sept, 2022</span>
                            </li>
                            <li>
                                <a href="#">Monitoring Service standards ? There's a dashboard for that.</a>
                                <span>23 May, 2022</span>
                            </li>
                        </ul>
                    </div>


                    {{-- CATEGORIES --}}
                    <div class="sidebar-box blog-categories">
                        <h3>Tags</h3>
                        <ul>
                            <li><a href="#">Web Develoment <span>(14)</span></a></li>
                            <li><a href="#">Graohic Design <span>(04)</span></a></li>
                            <li><a href="#">Web Design <span>(12)</span></a></li>
                            <li><a href="#">IOS/Android Development <span>(09)</span></a></li>
                            <li><a href="#">Others <span>(05)</span></a></li>
                        </ul>
                    </div> <!-- /.blog-categories -->

                    <div class="sidebar-keyword">
                        <h3>Keyword</h3>
                        <ul class="clearfix">
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">animation</a></li>
                            <li><a href="#">book</a></li>
                        </ul>
                    </div> <!-- /.sidebar-keyword -->
                </div> <!-- /.blog-sidebar -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.our-blog -->
@endsection
