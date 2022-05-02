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
              <h4 class="py-2 text-red-600 font-bold">{{'Sorry, No courses are avaliable for' . " " . $degree . " " . 'in' . " " . $country_slug}}</h4>
              @elseif($avaliable_courses->IsNotEmpty())
              <h4 class="py-2">{{'List of courses avaliable for' . " " . $degree . " " . 'in' . " " . $country_slug}}</h4>
              <div class="grid grid-cols-2 gap-6">
              @foreach ($avaliable_courses as $course)
                <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                     <img class="object-cover h-52 w-full rounded-t" src="/storage/{{$course->image}}" alt={{$course->title}} />
                     <div class="p-3">
                     <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                      {{$course->title}}
                     </h3>
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
                        <a class="mt-3 block" href="{{route('course.show',['slug' => $course->slug,'country_slug' => $course->country_slug])}}">Read More >></a>
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
                    <div class="widget widget_search">
                        <form class="search-form">
                            <div class="form-group">
                                <input type="text" placeholder="Search">
                            </div>
                            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>                  
                    <div class="widget widget-recent-post">                            
                      <h4 class="py-2">{{'Colleges in' . " " . $country_slug}}</h4>
                        <ul>
                         @foreach($colleges as $college)
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <img src="/storage/{{$college->image}}" alt="blog" class="object-cover"   width="80"
                                            height="80">
                                        </a>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="title"><a href="">{{$college->title}}</a></h5>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_catagory">
                        <h4 class="widget-title">Countries</h4>
                                                      
                        <ul class="catagory-items">
                           @foreach ($countries as $country)
                            <li><a href=""><i class="fa fa-angle-right"></i>{{$country->title}}</a></li>
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