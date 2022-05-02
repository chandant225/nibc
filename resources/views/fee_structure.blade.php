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
            <select name="country" class="js-example-basic-single">
              <option selected>Country Select</option>
              @if(count($countries) === 0)
              <option>No country avaliable</option>
              @endif
               @foreach($countries as $country)
               <option selected>{{$country->title}}</option>
               @endforeach
            </select>
            <select name="course" class="js-example-basic-single">
              <option selected>Course Select</option>
              @if(count($courses) === 0)
              <option>No courses avaliable</option>
              @endif
               @foreach($courses as $course)
               <option selected>{{$course->title}}</option>
               @endforeach
            
            </select>
            <select name="college" class="js-example-basic-single">
              <option selected>University Select</option>
              <option value="1">No universities avaliable</option>
            </select>
            <button type="submit" class="right-side-btn">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </div>
      <!-- search section end -->
      <div class="container">
     
             <div> {!! $fee_structure->description !!}</div>

             <img src="/storage/{{$fee_structure->image}}" alt="{{$fee_structure->title}}" class="object-fill w-full" />
         
      </div>
   
   
</div>

@endsection