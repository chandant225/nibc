@extends('layouts.app')

@section('content')
<div>
    <!-- page title start -->
  <div class="page-title-area bg-overlay"
  style="background-image: url('/storage/{{$college->image}}')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="breadcrumb-inner">
          <h2 class="page-title">{{$college->title}}</h2>
          <ul class="page-list">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>{{$college->title}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- page title end -->

<div class="main-blog-area pd-top-120 pd-bottom-90">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-12">
        <div class="course-details-page">
          <div class="thumb">
            <img src="/storage/{{$college->image}}" class="w-full object-cover" alt="img" />
          </div>
          <div class="course-details-nav-tab text-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab1-tab" data-toggle="tab"
                  href="#tab1" role="tab" aria-controls="tab1"
                  aria-selected="true"><i class="fa fa-book"></i>Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab2-tab" data-toggle="tab"
                  href="#tab2" role="tab" aria-controls="tab2"
                  aria-selected="false">
                  <i class="fa fa-file-text-o"></i>Procedure</a>
              </li>
              <a class="nav-link" id="tab3-tab" data-toggle="tab"
              href="#tab3" role="tab" aria-controls="tab3"
              aria-selected="false">
              <i class="fa fa-file-text-o"></i>Requirement</a>
          </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel"
              aria-labelledby="tab1-tab">
              <div class="course-details-content">
             {!! $college->overview !!}
              </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel"
              aria-labelledby="tab2-tab">
              <div class="course-details-content">
                {!! $college->procedure !!}
              </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel"
            aria-labelledby="tab3-tab">
            <div class="course-details-content">
              {!! $college->requirement !!}
            </div>
          </div>procedure
          </div>
        </div>
      </div>
      <!-- sidebar -->
      <div class="col-lg-4 col-12">
        <div class="td-sidebar">
          <div class="widget widget-recent-post">
            <h4 class="widget-title">{{"Top colleges in" . " " . $college->country_slug}}</h4>
            <ul>

              @foreach($colleges as $college)
              <li>
                <div class="media">
                  <div class="media-left">
                    <a href="{{route('course.show',['slug' => $college->slug,'country_slug' => $college->country_slug])}}">
                      <img src="/storage/{{$college->image}}" class="w-28 h-28 object-cover" alt="blog" />
                    </a>
                  </div>
                  <div class="media-body align-self-center">
                    <h5 class="title">
                      <a  href="{{route('college_details',['country_slug' => $college->country_slug,'slug' => $college->slug])}}">{{$college->title}}</a>
                    </h5>
                    <div class="post-info">
                      <i class="fa fa-calendar-times-o"></i>{{$college->created_at}}
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="widget widget_catagory">
            <h4 class="widget-title">Hear from Us</h4>
            <form class="contact-form-inner mt-5 mt-md-0">
              <label class="single-input-inner style-bg-border">
                <input type="text" placeholder="Name" required/>
              </label>

              <label class="single-input-inner style-bg-border">
                <input type="email" placeholder="Email" required/>
              </label>

              <label class="single-input-inner style-bg-border">
                <input type="text" placeholder="Number" required/>
              </label>

              <label class="single-input-inner style-bg-border">
                <textarea type="text" required placeholder="message"></textarea>
               </label>

              <button class="btn btn-base mx-auto d-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <!-- /.sidebar -->
    </div>
    <div class="course-area pd-top-100">
      <h4 class="mb-4">Course Available in</h4>
      <div class="container overflow-hidden">
      <div class="swiper">
        {{-- <div class="swiper-wrapper">
            @foreach($countries as $country)
            <div class="swiper-slide">
              <div class="item">
                <div class="single-course-inner">
                  <div class="thumb">
                    <img
                     src="/storage/{{$country->image}}"
                      alt="img"
                      class="h-60"
                    />
                  </div>
                  <div class="details">
                    <div class="details-inner">
                     
                        <a href="#">{{ $country->title}}</a>
                 
                      <p>
                        {!! Str::words( $country->overview, 25, ' ...') !!}
                      
                      </p>
                    </div>
                    <div class="bottom-area">
                      <div class="row">
                        <div class="col-6 align-self-center">
                          <div class="rating-inner">
                            @if($country->rating === 1)
                            <i class="fa fa-star"></i>
                            @elseif($country->rating === 2)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            @elseif($country->rating === 3)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            @elseif($country->rating === 4)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            @elseif($country->rating === 5)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            @endif
                          </div>
                        </div>
                        <div class="col-6 align-self-center text-right">
                          <a class="readmore-text" href="{{route('country.show',["slug" => $country->slug])}}">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div> --}}
      </div>
      </div>
    </div>
  </div>
</div>
<!-- single blog page end -->
</div>
@endsection