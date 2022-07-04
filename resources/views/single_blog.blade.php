@extends('layouts.app')

@section('content')
 <div>
    <div>
        @if(session()->has('message'))
        <div class="message-modal">
           <p>{{session()->get('message')}}</p>
        </div>
        @endif
    </div>
    <div class="page-title-area bg-overlay" style="background-image: url('/storage/{{$blog->image}}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">{{$blog->title}}</h2>
                        <ul class="page-list">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>{{$blog->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- single blog page -->
    <div class="main-blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="single-blog-inner mb-0">
                        <div class="thumb">
                            <img src="/storage/{{$blog->image}}" alt="img">
                        </div>
                        <div class="details">
                            <div class="blog-meta border-0 mt-0 pt-0">
                                <ul>
                                    <li class="comnt bg-base">{{$blog->category_slug}}</li>
                                    <li class="author">By <span>Admin</span></li>
                                    <li class="date">{{$blog->created_at->toDateString()}}</li>
                                </ul>
                            </div>
                            <h4 class="mb-0">{{$blog->title}}</h4>
                        </div>
                    </div>
                    <div class="blog-content-inner">
                        <div>
                     {!! $blog->description !!}
                        </div>
                        {{-- <div class="tag-and-sharea-area">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="tags">
                                        <strong>Tags : </strong>
                                        <a href="#">Chicago, </a>
                                        <a href="#">Creative</a>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center text-md-right">
                                    <strong>Share : </strong>
                                    <ul class="social-media-2 style-black mt-3 mt-md-0 d-inline-block">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}


                        <div class="section-title style-small mb-4 mt-5">
                            <h4 class="mb-0">Comments</h4>
                        </div>
                        @if (count($comments) === 0)
                                 <p>There is no any comment related to this blog.</p>
                        @elseif(count($comments) >= 1)
                        @foreach($comments as $comment)
                        <div>
                          <div class="flex flex-row gap-4">
                              <div class="w-20">
                                      <p style="width: 3rem;
                                      background: #3d91e5;
                                      padding: 6px 0px 10px 18px;
                                      border-radius: 50%;
                                      color: wheat;
                                      font-size: 20px;
                                      font-weight: bolder;">{!! Str::limit($comment->name, 1) !!}</p>
                              </div>
                              <div class="">
                                 <p><i class="fa fa-user" aria-hidden="true"></i> {{$comment->name}}<span class="ml-4"><i class="fa fa-envelope" aria-hidden="true"></i> {{$comment->email}}</span></p>
                                 <p><i class="fa fa-calendar" aria-hidden="true"></i> {{$comment->created_at->toDateString()}}</p>
                                 <p>  <i class="far fa-hand-point-right me-2"></i>{{$comment->message}}</p>
                              </div>
                          </div>
                          <hr />
                          </div>
                        @endforeach
                        @endif
                     
                            <div class="section-title style-small mb-4 mt-5">
                                <h4 class="mb-0">Leave a Comments</h4>
                            </div>
                          <form
                          enctype="multipart/form-data" 
                          action="{{route('comment.store')}}" 
                          method="POST"
                          >
                          @csrf 
                            <div class="row custom-gutters-20">
                                <input type="hidden"  name="blog_slug" value="{{$blog->slug}}">
                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="name" required type="text" placeholder="Name">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="email" required type="text" placeholder="Email">
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="single-input-inner style-bg-border">
                                        <textarea name="message" required placeholder="Message"></textarea>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-base">Post Comment</button>
                                </div>
                            </div>
                          </form>
                        
                    </div>
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
                        </div>                    --}}
                        <div class="widget widget-recent-post">                            
                            <h4 class="widget-title">Recent Post</h4>
                            <ul>
                               @foreach($sidebar_blogs as $blog)
                               <li>
                                <div class="media">
                                    <div style="width: 50%;" class="media-left">
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
                            <ul class="catagory-items">
                                @foreach($categories as $category)
                                <li><a href="{{route('filtered_blogs',['slug' => $category->slug])}}">{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
        </div>
    </div>
    <!-- single blog page end -->
 </div>
@endsection