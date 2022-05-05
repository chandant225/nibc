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
        <div class="text-center shadow-xl w-1/2 p-4 mx-auto mt-4 mb-4 rounded">
          <center class="py-6">
            <i id="error_icon" class="fas fa-exclamation-triangle text-4xl text-red-600"></i>
          </center>
          <p class="text-red-600 text-xl">Sorry, we couldn't find the search result.</p>
          <div class="flex justify-end">
            <a class="" href="/"><button class="bg-red-600 text-gray-100 px-3  rounded pt-2 pb-2 hover:bg-red-500">Go back >></button></a>
          </div>
        </div>
    @elseif($search_results->IsNotEmpty())
    <div class="container mx-auto py-10">
      <center>
        <p class="text-gray-600 text-2xl font-bold">Results found...</p>
      </center>
    <div class="grid grid-cols-3 gap-4 mt-4">
       @foreach($search_results as $college)
        <div class="shadow-xl rounded-xl"> 
            <img src="/storage/{{$college->image}}" class="object-cover rounded-t-xl" alt="" />
            <a href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"><p class="text-lg text-gray-600 font-semibold mt-3 px-2">{{$college->title}}</p></a>
            <div class="flex justify-end p-4"><a href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"><button class="bg-blue-600 text-gray-100 px-3   rounded pt-3 pb-2 hover:bg-blue-500">View More >></button></a></div>
        </div>     
       @endforeach
       
    </div>
  </div>
    @endif
</div>

@endsection