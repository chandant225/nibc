@extends('layouts.app')

@section('content')

<div>
     <div
    class="page-title-area bg-overlay"
    style="
      background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGNvbGxlZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');
    "
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="breadcrumb-inner">
            <h2 class="page-title">Institution</h2>
            <ul class="page-list">
              <li><a href="{{route('home')}}">Home</a></li>
              <li>institution</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page title end -->
  <!-- search section start -->
    @include('layouts.search_form')
  <!-- search section end -->

  <div class="container">

      <livewire:college-list /> 

  </div>
</div>
@endsection