@extends('layouts.app')

@section('content')

<div>
     <div
    class="page-title-area bg-overlay"
    style="
      background-image: url('');
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
        <div class="tab">
         @foreach($countries as $country)
           <button class="tablinks" onclick="openCity(event, '{{$country->title}}')" id="defaultOpen{{$loop->iteration}}">{{$country->title}}</button>
         @endforeach
        </div>

        <div>
             @foreach($countries as $country)
            <div id="{{$country->title}}" class="tabcontent">
           <div class="row">
               <center>
                   <p>{{$country->title}}</p>
               </center>
           @foreach($colleges as $college)
               <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="item">
                  <div class="single-course-inner shadow">
                    <div class="thumb">
                      <a href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"><img src="/storage/{{$college->image}}" alt="{{$college->title}}" class="card-image" /></a>
                    </div>
                  <h5 class="ms-4 mt-3"><a class="card-title" href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}">{{$college->title}}</a></h5>
                  <div class="d-flex flex-row justify-content-between px-4 py-3"> 
                     <a  class="readmore-text border-btn" href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}">view details</a>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
           </div>
             
           </div>
           @endforeach
        </div>
  </div>
</div>



<style>
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

</style>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen1").click();

</script>

@endsection