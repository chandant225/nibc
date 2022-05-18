@extends('layouts.app')

@section('content')
<div>
    <div
    class="page-title-area bg-overlay"
    style="background-image: url('https://images.unsplash.com/photo-1444723121867-7a241cacace9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y2l0eXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="breadcrumb-inner">
            <h2 class="page-title">Countries</h2>
            <ul class="page-list">
              <li><a href="{{route('home')}}">Home</a></li>
              <li>Countries</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @include('layouts.search_form')

  <section class="container ">
    @if($countries->IsEmpty())
    <center>
        <p class="text-danger">There are no any countries available</p>
    </center>
   
        @elseif($countries->IsNotEmpty())
        <div class="row mt-4">
           @foreach($countries as $country)
           <div class="col-lg-4 col-md-6 col-12 course-area">
            <div class="item">
           <div class="single-course-inner shadow">
            <div class="thumb">
              <a href="{{route('country.show',['slug'=> $country->slug])}}">
            <img class="card-image" src="/storage/{{$country->image}}" alt="{{$country->title}}" /></a>
          </div>
            <div class="p-3">
                <h4 class="mb-md-3 mb-sm-2"><a href="{{route('country.show',['slug'=> $country->slug])}}" class="card-title">
                 {{$country->title}}</a>
                </h4>
              <div class="flex flex-row justify-between items-center">
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
                  <div class="text-right">
                   <a class="readmore-text border-btn" href="{{route('country.show',['slug'=> $country->slug])}}">Read More</a>
              </div>
            </div>
              
            </div>
        </div>
            </div>
      </div>
           @endforeach

        @endif
    
    </div>
  
</section>
</div>

@endsection