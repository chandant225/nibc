@extends('layouts.app')

@section('content')
<div>
    <div
    class="page-title-area bg-overlay"
    style="
      background-image: url('/storage/{{$country->image}}');
    "
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="breadcrumb-inner">
            <h2 class="page-title">{{$country->title}}</h2>
            <ul class="page-list">
              <li><a href="{{route('home')}}">Home</a></li>
              <li>{{$country->title}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page title end -->
  <!-- search section start -->
  <div
    class="search-area pt-2 pd-bottom-60 mb-3"
    style="background-color: #314c7d"
  >
    <div class="section-title text-center mt-5">
      <h2 class="title text-white">
        Search your preferred country and courses
      </h2>
    </div>
    <div class="search-boxes container">
      <form action="" class="">
        <select class="custom-select select-with-search">
          <option selected>Country Select</option>
          <option value="1">USA</option>
          <option value="2">UK</option>
          <option value="3">Australia</option>
          <option value="4">India</option>
        </select>
        <select class="custom-select select-with-search">
          <option selected>Course Select</option>
          <option value="1">Course One</option>
          <option value="2">Course Two</option>
          <option value="3">Course Three</option>
        </select>
        <select class="custom-select select-with-search">
          <option selected>University Select</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
          <option value="3">Three</option>
        </select>
        <button type="submit" class="right-side-btn">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
  </div>
  <!-- search section end -->

  <!-- single blog page -->
  <div class="main-blog-area pd-top-120 pd-bottom-90">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
          <div class="course-details-page">
            <div class="thumb">
              <img
               src="/storage/{{$country->image}}"
               alt="img"
              />
            </div>
            <div class="course-details-nav-tab text-center">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="tab1-tab"
                    data-toggle="tab"
                    href="#tab1"
                    role="tab"
                    aria-controls="tab1"
                    aria-selected="true"
                    ><i class="fa fa-book"></i> Overview</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="tab2-tab"
                    data-toggle="tab"
                    href="#tab2"
                    role="tab"
                    aria-controls="tab2"
                    aria-selected="false"
                  >
                    <i class="fa fa-file-text-o"></i> Procedures</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="tab4-tab"
                    data-toggle="tab"
                    href="#tab3"
                    role="tab"
                    aria-controls="tab4"
                    aria-selected="false"
                  >
                    <i class="fa fa-th"></i>requirements</a
                  >
                </li>
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="tab1"
                role="tabpanel"
                aria-labelledby="tab1-tab"
              >
                <div class="course-details-content text-justify">
                   {!! $country->overview !!}
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="tab2"
                role="tabpanel"
                aria-labelledby="tab2-tab"
              >
                <div class="course-details-content text-justify">
                 {!! $country->procedures !!}
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="tab3"
                role="tabpanel"
                aria-labelledby="tab4-tab"
              >
                <div class="course-details-content text-justify">
                {!! $country->requirements !!}             
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-lg-4 col-12">
          <div class="td-sidebar">
            <div class="widget widget-recent-post">
              <h4 class="widget-title">Our Destinations</h4>
              <ul>

                @foreach($countries as $country)
                <li>
                  <div class="media">
                    <div class="media-left">
                        <img
                          src="/storage/{{$country->image}}"
                          width="80"
                          height="80"
                          alt="blog"
                        />
                    </div>
                    <div class="media-body align-self-center">
                      <h5 class="title"><a href="{{route('country.show',['slug' => $country->slug])}}">{{$country->title}}</a></h5>
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
                  <input type="text" placeholder="Name" required />
                </label>

                <label class="single-input-inner style-bg-border">
                  <input type="text" placeholder="Email" required />
                </label>

                <label class="single-input-inner style-bg-border">
                  <input type="text" placeholder="Number" required />
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
        <h4 class="mb-4">Major Courses</h4>
        <div class="swiper">
          <div class="swiper-wrapper">
          @foreach($courses as $course)
          <div class="swiper-slide">
            <div class="single-course-inner">
              <div class="thumb">
                <img src="/storage/{{$course->image}}" alt="img" />
              </div>
              <div class="details">
                <div class="details-inner">
                  <h5 class="mb-md-3 mb-sm-2">
                    <a href="#">{{$course->title}}</a>
                  </h5>
                  <div class="cat-area">
                    <?php
                     $avaliableCountry = explode(',',$course->avaliable_in_country);
                     foreach($avaliableCountry as $country){
                       echo '<a class="cat bg-base">' . $country . '</a>';
                     }
                    ?>
                  </div>
                </div>
                <div class="bottom-area">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <div class="rating-inner">
                        @if($course->rating === 1)
                        <i class="fa fa-star"></i>
                        @elseif($course->rating === 2)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        @elseif($course->rating === 3)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        @elseif($course->rating === 4)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        @elseif($course->rating === 5)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        @endif
                      </div>
                    </div>
                    <div class="col-6 align-self-center text-right">
                      <a class="readmore-text" href="{{route('course.show',['slug' => $course->slug])}}">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
          @endforeach
        </div>
        </div>
      </div>
   
    </div>
  </div>
</div>
@endsection