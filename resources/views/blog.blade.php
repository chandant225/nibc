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
                            <li>Blogs</li>
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
                      <p class="text-4xl pt-10 text-red-600 font-semibold">There are no any blogs available yet</p>
                    </center>
                    @endif
                    @foreach($blogs as $blog)
                    <div class="single-blog-inner shadow rounded">
                        <div class="thumb">
                            <a href="{{route('blog.show',['slug' => $blog->slug])}}">
                                <img src="/storage/{{$blog->image}}" alt="img">
                            </a>    
                        </div>
                        <div class="details px-4 py-3 ">
                            <div class="blog-meta">
                                <ul>
                                    <li class="comnt bg-base">{{$blog->category_slug}}</li>
                                    <li class="author">By <span>Admin</span></li>
                                    <li class="date">{{$blog->created_at}}</li>
                                </ul>
                            </div>
                            <h4><a href="{{route('blog.show',['slug' => $blog->slug])}}">{{$blog->title}}</a></h4>
                            <p>  {!! Str::words( $blog->description , 60, ' ...') !!}</p>
                            <a href="#"></a>   
                             <div class="text-right me-3">                    
                            <a class="readmore-text border-btn" href="{{route('blog.show',['slug' => $blog->slug])}}">Read More</a>
                             </div>
                        </div>
                    </div>
                    @endforeach
                    
                     {{$blogs->links()}}
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar">
                        {{-- <div class="widget widget_search">
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>                   --}}
                        <div class="widget widget-recent-post">                            
                            <h4 class="widget-title">Recent Post</h4>
                            @if(count($sidebar_blogs) === 0)
                            <center>
                              <p class="text-xl pt-10 text-red-600 font-semibold">There are no any recent posts available yet</p>
                            </center>
                            @endif
                            <ul>
                                @foreach($sidebar_blogs as $blog)
                                <li>
                                    <div class="media">
                                        <div style="width:50%;" class="media-left">
                                            <a href="{{route('blog.show',['slug' => $blog->slug])}}">
                                                <img class="w-75 h-75" src="/storage/{{$blog->image}}" alt="blog">
                                            </a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h5 class="title"><a href="{{route('blog.show',['slug' => $blog->slug])}}">{{$blog->title}}</a></h5>
                                            <div class="post-info"><i class="fa fa-calendar-times-o"></i>{{$blog->created_at->toDateString()}}</div>                             
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Catagory</h4>
                            @if(count($categories) === 0)
                            <center>
                              <p class="text-xl pt-10 text-red-600 font-semibold">There are no any categories available yet</p>
                            </center>
                            @endif                                 
                            <ul class="catagory-items">
                                @foreach($categories as $category)
                                <li><a href="{{route('filtered_blogs',['slug' => $category->slug])}}">{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection