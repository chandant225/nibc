@extends('layouts.app')


@section('content')
<div>
    <div
    class="page-title-area bg-overlay"
    style="
      background-image: url('https://images.unsplash.com/photo-1562585195-97aff4b3848c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGVncmVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
    "
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="breadcrumb-inner">
            <h2 class="page-title">{{$degree}}</h2>
            <ul class="page-list">
              <li><a href="{{route('home')}}">Home</a></li>
              <li>{{$degree}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.search_form')

   <!--blog-area start-->
   <div class="blog-area pd-top-120 pd-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
              @if($avaliable_courses->IsEmpty())

              <section class='px-4'>
                <div class="p-4">
                  <center class="py-6">
                    <i id="error_icon" class="fas fa-exclamation-triangle text-danger"></i>
                  </center>
                  <h4 class="py-2">{{'Sorry, No courses are avaliable for' . " " . $degree . "."}}</h4>
                  <div class="d-flex justify-content-end">
                    <a class="avaliable-course-btn" href="{{url()->previous()}}">
                      << Go back
                   </a>
                  </div>
                </div> 
              </section>
              @elseif($avaliable_courses->IsNotEmpty())
              <h5 class="py-2">{{'List of courses avaliable for' . " " . $degree}}</h5>
              <div class="row">
              @foreach ($avaliable_courses as $course)
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="item">
                    <div class="single-course-inner shadow-sm">
                      <div class="thumb">
                      <a href="{{route('course.show',['slug' => $course->slug])}}"><img 
                        class="card-image"
                        src="/storage/{{$course->image}}" alt={{$course->title}} /></a>
                      </div>
                     <div class="p-3">
                     <h4><a href="{{route('course.show',['slug' => $course->slug])}}" class="card-title">
                      {{$course->title}}</a>
                     </h4>
                   <div class="flex flex-row justify-between items-center">
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
                       <div class="text-right">
                        <a class="readmore-text border-btn"  href="{{route('course.show',['slug' => $course->slug])}}">Read More</a>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
                @endforeach
              </div>
              @endif
            </div>
            <!-- sidebar -->
            <div class="col-lg-4 col-12">
                <div class="td-sidebar">                 
                    <div class="widget widget_catagory">
                        <h4 class="widget-title">Countries</h4>
                                                      
                        <ul class="catagory-items">
                           @foreach ($countries as $country)
                            <li><a href="{{route('country.show',['slug'=> $country->slug])}}"><i class="fa fa-angle-right"></i>{{$country->title}}</a></li>
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