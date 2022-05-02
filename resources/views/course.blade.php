@extends('layouts.app')

@section('content')
 <div>
    <div
    class="page-title-area bg-overlay"
    style="background-image: url('/assets/img/bg/3.png')"
  >
    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-8">
          <div class="breadcrumb-inner">
            <h2 class="page-title">Have a look at available faculties</h2>
            <ul class="page-list">
              <li><a href="index.html">Home</a></li>
              <li>Course</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.search_form')
  <!--course-area start-->
  <div class="course-area pd-top-120 pd-bottom-120">
    <div class="container">
      @if(count($page_courses) === 0)
          <center>
            <p class="text-4xl pt-10 text-red-600 font-semibold">There are no any courses available yet</p>
          </center>
      @elseif(count($page_courses) >= 1)
      <div class="row justify-content-center">
        @foreach($page_courses as $course)
        <div class="col-lg-4 col-md-6">
          <div class="single-course-inner">
            <div class="thumb">
              <img class="h-60" src="/storage/{{$course->image}}" alt="img" />
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
                    <a class="readmore-text" href="{{route('course.show',['slug' => $course->slug,'country_slug' => $course->country_slug])}}">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      @endif
      <div>
        {{$page_courses->links()}}
      </div>
    </div>
  </div>
  <!--course-area end-->

 </div>
@endsection