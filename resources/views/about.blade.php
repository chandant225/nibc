@extends('layouts.app')

@section('content')
<div>
     <!-- page title start -->
     <div
     class="page-title-area bg-overlay"
     style="background-image: url('assets/img/bg/3.png')"
   >
     <div class="container">
       <div class="row">
         <div class="col-lg-7">
           <div class="breadcrumb-inner">
             <h2 class="page-title">The world’s best learning experience.</h2>
             <ul class="page-list">
               <li><a href="{{route('home')}}">Home</a></li>
               <li>About Us</li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- page title end -->
   @if(!$about)
        <p>There's no any about us information avalaible. </p>
   @elseif($about)
   <!-- about area start -->
   <div class="about-area pd-top-90 pd-bottom-60">
     <div class="container">
       <div class="row">
         <div class="col-lg-6">
           <div class="row">
             <div class="col-sm-6 mt-lg-5">
               <div
                 class="thumb about-thumb wow animated zoomIn"
                 data-wow-duration="0.8s"
                 data-wow-delay="0.1s"
               >
                 <img src="/storage/{{$about->topl_image}}" alt="img" />
               </div>
               <div
                 class="thumb about-thumb wow animated zoomIn"
                 data-wow-duration="0.8s"
                 data-wow-delay="0.2s"
               >
                 <img src="/storage/{{$about->topr_image}}" alt="img" />
               </div>
             </div>
             <div class="col-sm-6">
               <div
                 class="thumb about-thumb wow animated zoomIn"
                 data-wow-duration="0.8s"
                 data-wow-delay="0.3s"
               >
                 <img src="/storage/{{$about->downl_image}}" alt="img" />
               </div>
               <div
                 class="thumb about-thumb wow animated zoomIn"
                 data-wow-duration="0.8s"
                 data-wow-delay="0.4s"
               >
                 <img src="/storage/{{$about->downr_image}}" alt="img" />
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-6 align-self-center mt-4 mt-lg-0">
           <div class="section-title style-bg mb-0 content">
                 {!! $about->topr_desc !!}
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- about area end -->

   <!-- about area start -->
   <div class="about-area pd-y-25">
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <div class="section-title content">
               {!! $about->bottom_desc  !!}        
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- about area end -->
   <h2 class="text-center pd-bottom-60">
     “Transforming every dream into reality”
   </h2>
   <!-- about area start -->
   <div
     class="about-area about-right-bg-half bg-gray pd-y-25"
     style="--background-right-after: url('/storage/{{$about->mission_image}}')"
   >
     <div class="container">
       <div class="row">
         <div class="col-lg-5 bg-gray">
           <div class="section-title">
             <h2 class="title">Our Mission</h2>
             <div class="single-list-inner mt-4">
                   {!! $about->mission_desc !!}
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- about area end -->

   <!-- about area start -->
   <div
     class="about-area about-left-bg-half bg-gray pd-y-25"
     style="--background-left-after: url('/storage/{{$about->vision_image}}')"
   >
     <div class="container">
       <div class="row">
         <div class="offset-lg-7 col-lg-5 bg-gray">
           <div class="section-title">
             <h2 class="title">Our Vision</h2>
             <div class="single-list-inner mt-4">
                {!! $about->vision_desc !!}
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- about area end -->

   <!-- about area start -->
   <div
     class="about-area about-right-bg-half bg-gray pd-y-25 mg-bottom-120"
     style="--background-right-after: url('/storage/{{$about->value_image}}')"
   >
     <div class="container">
       <div class="row">
         <div class="col-lg-5 bg-gray">
           <div class="section-title">
             <h2 class="title">Our Value Statement</h2>
             <div class="single-list-inner mt-4">
               {!! $about->value_desc !!}
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   @endif
   <!-- about area end -->
</div>

@endsection