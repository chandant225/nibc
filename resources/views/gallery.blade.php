@extends('layouts.app')

@section('content')

<div>
    <!-- page title start -->
    <div class="page-title-area bg-overlay" style="background-image: url('assets/img/bg/3.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Have a look Our Gallery</h2>
                        <ul class="page-list">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- gallery area start -->
    <div class="gallery-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="assets/img/gallery/6.png" alt="img">
                    </div>
                    <div class="single-gallery mb-md-0">
                        <img src="assets/img/gallery/7.png" alt="img">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery mb-md-0">
                        <img src="assets/img/gallery/8.png" alt="img">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="assets/img/gallery/9.png" alt="img">
                    </div>
                    <div class="single-gallery">
                        <img src="assets/img/gallery/10.png" alt="img">
                    </div>
                    <div class="single-gallery mb-0">
                        <img src="assets/img/gallery/11.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection