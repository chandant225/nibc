@extends('layouts.app')



@section('content')

<div>
   <!-- page title start -->
   <div class="page-title-area bg-overlay" style="background-image: url('https://images.unsplash.com/photo-1586769852836-bc069f19e1b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2VhcmNofGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60')">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">Search your preferred country and courses</h2>
                    <ul class="page-list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Searched results</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title end -->
    @if($search_results->IsEmpty())
        <div class="">
          <center class="py-6">
            <i id="error_icon" class="fas fa-exclamation-triangle"></i>
          </center>
          <p class="">Sorry, we couldn't find the search result.</p>
          <div class="">
            <a class="" href="/"><button class="">Go back >></button></a>
          </div>
        </div>
    @elseif($search_results->IsNotEmpty())
    <div class="container">
      <center>
        <p class="fs-3 mt-4">Results found...</p>
      </center>
    <div class="row">
       @foreach($search_results as $college)
       <div class="col-lg-4 col-md-6 col-12 course-area">
        <div class="item">
       <div class="single-course-inner shadow">
        <div class="thumb"> 
          <a  href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"> <img src="/storage/{{$college->image}}" class="card-image" alt="{{$college->title}}" /></a>
        </div>
            <h5 class="ps-3 py-3"><a class="card-title" href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}">{{$college->title}}</a></h5>
            <div class="text-right p-4">
              <a class="readmore-text border-btn" href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}">View More</a>
            </div>
        </div>     
      </div>  
    </div>  
  </div>  
       @endforeach
       
    </div>
  </div>
    @endif
</div>

@endsection