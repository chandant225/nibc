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
                    <a class="readmore-text" href="{{route('course.show',['slug' => $course->slug])}}">Read More</a>
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