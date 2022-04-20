@extends('layouts.app')

@section('content')
<div> 
       <div class="page-title-area bg-overlay" style="background-image: url('assets/img/bg/3.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Have a look latest blog & news around you</h2>
                        <ul class="page-list">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!--blog-area start-->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(count($blogs) === 0)
                    <center>
                        <p class="text-4xl pt-10 text-red-600 font-semibold">There is no any blog related to this category.</p>
                    </center>
                    @elseif(count($blogs) >= 1)
                    @foreach($blogs as $blog)
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <a href="{{route('blog.show',['slug' => $blog->slug])}}">
                                <img src="/storage/{{$blog->image}}" alt="img">
                            </a>    
                        </div>
                        <div class="details">
                            <div class="blog-meta">
                                <ul>
                                    <li class="comnt bg-base">{{$blog->category_slug}}</li>
                                    <li class="author">By <span>admin</span></li>
                                    <li class="date">{{$blog->created_at}}</li>
                                </ul>
                            </div>
                            <h4><a href="{{route('blog.show',['slug' => $blog->slug])}}">{{$blog->title}}</a></h4>
                            <p>  {!! Str::words( $blog->description , 35, ' ...') !!}</p>
                         
                            <a class="readmore-text" href="{{route('blog.show',['slug' => $blog->slug])}}">Read More</a>
                        </div>
                    </div>
                    @endforeach
                    @endif
             
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>                  
                        <div class="widget widget-recent-post">                            
                            <h4 class="widget-title">Recent Post</h4>
                            <ul>
                                @foreach($sidebar_blogs as $blog)
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="{{route('blog.show',['slug' => $blog->slug])}}">
                                                <img class="w-24 h-24" src="/storage/{{$blog->image}}" alt="blog">
                                            </a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h5 class="title"><a href="{{route('blog.show',['slug' => $blog->slug])}}">{{$blog->title}}</a></h5>
                                            <div class="post-info"><i class="fa fa-calendar-times-o"></i>{{$blog->created_at}}</div>                             
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Catagory</h4>                                 
                            <ul class="catagory-items">
                                @foreach($categories as $category)
                                <li><a href="{{route('filtered_blogs',['slug' => $category->slug])}}"><i class="fa fa-angle-right"></i>{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_tags">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="blog.html">Art</a>
                                <a href="blog.html">Creative</a>
                                <a href="blog.html">Article</a>
                                <a href="blog.html">Designer</a>
                                <a href="blog.html">Landing</a>
                            </div>
                        </div>
                        <div class="widget widget_add mb-0">
                            <a href="#"><img src="/assets/img/other/6.png" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection