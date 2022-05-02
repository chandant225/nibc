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

  <section class="container">
    @if($countries->IsEmpty())
    <center>
        <p class="text-red-600 text-2xl font-bold">There are no any countries available</p>
    </center>
   
        @elseif($countries->IsNotEmpty())
        <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
      
           @foreach($countries as $country)
           <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="/storage/{{$country->image}}" alt="{{$country->title}}" />
            <div class="p-3">
                
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                 {{$country->title}}
                </h3>
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
                   <a class="mt-3 block" href="{{route('country.show',['slug'=> $country->slug])}}">Read More >></a>
              </div>
              
            </div>
        </div>

           @endforeach

        @endif
    
    </div>
  
</section>
</div>

@endsection