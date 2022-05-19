@extends('layouts.app')

@section('content')
<div class="mb-6">
    <div class="page-title-area bg-overlay" style="background-image: url('https://media.istockphoto.com/photos/dollar-money-and-judges-gavel-on-table-picture-id1309242679?b=1&k=20&m=1309242679&s=170667a&w=0&h=g0vI0NlubW774isV30V9VGhyN8_DMSSz_n7oGCxyNGs=')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Fee structure</h2>
                        <ul class="page-list">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Fee structure</li>
                            {{-- <li>{{"/" . " " . $fee_structure->country_slug}}</li>
                            <li>{{"/" . " " . $fee_structure->college_slug}}</li>
                            <li>{{"/" . " " .$fee_structure->academic_degree_slug}}</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.search_form')
      <!-- search section end -->
      <div class="container">
                  
           @if($response_data)
           <div class="py-4">
              <h4 class="py-1 text-danger">{{$response_data}}</h4>
              <div class="d-flex justify-content-start">
                <a class="readmore-text border-btn" href="{{url()->previous()}}">
                Go back
               </a>
              </div>
            </div>
           @elseif($fee_structure)
             <div> {!! $fee_structure->description !!}</div>
             <img src="/storage/{{$fee_structure->image}}" alt="{{$fee_structure->title}}" class="object-fill w-full" />
            @endif
      </div>
   
   
</div>

@endsection