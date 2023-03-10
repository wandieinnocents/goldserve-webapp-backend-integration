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
                <li><a href="/">Home</a></li>
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
                            <h6><span class="badge badge-primary">Posted By:</span> {{ $post->post_created_by }}  | <span class="badge badge-primary"> Category : </span> {{ $post->post_category_r->post_category_name }}</h6>
                            <h5><a href="{{ route('articles.show',$post->id) }}" class="tran3s">{{ $post->post_title }}</a></h5>
                            <p>{{ $post->post_description }}</p>
                            <a href="{{ route('articles.show',$post->id) }}" class="tran3s"><i class="flaticon-arrows"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>

                    @endforeach


                    {{-- PAGINATION --}}

                    <ul class="page-pagination">


                        {!! $posts->links() !!}

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
                        {{-- LATEST BLOGS --}}
                        <h3>Rescent Blogs</h3>
                        <ul>
                            @foreach($posts as $post)
                            <li>
                                <a href="{{ route('articles.show',$post->id) }}">{{ $post->post_title }}</a>
                                <span>{{ $post->created_at }}</span>
                            </li>
                            @endforeach

                        </ul>
                    </div>


                    {{-- CATEGORIES --}}
                    {{-- <div class="sidebar-box blog-categories">
                        <h3>Categories</h3>
                        <hr>
                        <ul>
                            @foreach($post_categories_fetch as $post_category)

                            <li><a href="#">{{ $post->post_category_r->post_category_name }}</a></li>
                            @endforeach

                        </ul>
                    </div>  --}}


                </div> <!-- /.blog-sidebar -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.our-blog -->
@endsection
