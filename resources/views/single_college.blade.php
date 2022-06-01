@extends('layouts.app')

@section('content')
    <div>
        <!-- page title start -->
        <div class="page-title-area bg-overlay" style="background-image: url('/storage/{{ $college->image }}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="breadcrumb-inner">
                            <h2 class="page-title">{{ $college->title }}</h2>
                            <ul class="page-list">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>{{ $college->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page title end -->

        <div class="main-blog-area pd-top-120 pd-bottom-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="course-details-page">
                            <div class="thumb">
                                <img src="/storage/{{ $college->image }}" class="w-full object-cover" alt="img" />
                            </div>
                            <div class="course-details-nav-tab text-center">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                                            aria-controls="tab1" aria-selected="true"><i
                                                class="fa fa-book"></i>Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                                            aria-controls="tab2" aria-selected="false">
                                            <i class="fa fa-file-text-o"></i>Amenities</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab"
                                            aria-controls="tab4" aria-selected="false">
                                            <i class="fa fa-file-text-o"></i>Course avaliable</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                    <div class="course-details-content">
                                        {!! $college->overview !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                    <div class="course-details-content">
                                        {!! $college->amenities !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                    <div class="course-details-content">
                                        <livewire:single-college-courses collegeSlug="{{ $college->slug }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar -->
                    <div class="col-lg-4 col-12">
                        <div class="td-sidebar">
                            <div class="widget widget-recent-post">
                                <h4 class="widget-title">{{ 'Top colleges in' . ' ' . $college->country_slug }}</h4>
                                <ul>

                                    @foreach ($colleges as $college)
                                        <li>
                                            <div class="media">
                                                <div style="width:50%;" class="media-left">
                                                    <a
                                                        href="{{ route('course.show', ['slug' => $college->slug, 'country_slug' => $college->country_slug]) }}">
                                                        <img src="/storage/{{ $college->image }}"
                                                            class="w-28 h-28 object-cover" alt="blog" />
                                                    </a>
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <h5 class="title">
                                                        <a
                                                            href="{{ route('college_details', ['country_slug' => $college->country_slug, 'slug' => $college->slug]) }}">{{ $college->title }}</a>
                                                    </h5>
                                                    <div class="post-info">
                                                        <i
                                                            class="fa fa-calendar-times-o"></i>{{ $college->created_at->toDateString() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_catagory">
                                <h4 class="widget-title">Hear from Us</h4>
                                <form class="contact-form-inner mt-5 mt-md-0">
                                    <label class="single-input-inner style-bg-border">
                                        <input type="text" placeholder="Name" required />
                                    </label>

                                    <label class="single-input-inner style-bg-border">
                                        <input type="email" placeholder="Email" required />
                                    </label>

                                    <label class="single-input-inner style-bg-border">
                                        <input type="text" placeholder="Number" required />
                                    </label>

                                    <label class="single-input-inner style-bg-border">
                                        <textarea type="text" required placeholder="message"></textarea>
                                    </label>

                                    <button class="btn btn-dark w-full mx-auto d-block">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar -->
                </div>
                <div class="course-area pd-top-100">
                    <h4 class="mb-4">Available courses</h4>
                    @if (count($courses) === 0)
                        <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i>There are no any courses available in
                            this college for now.</p>
                    @endif
                    <div class="container overflow-hidden">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($courses as $course)
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="single-course-inner shadow">
                                                <div class="thumb relative">
                                                    <a href="{{ route('course.show', ['slug' => $course->slug]) }}"><img
                                                            src="/storage/{{ $course->image }}" alt="img"
                                                            class="card-image" /></a>

                                                </div>
                                                <div class="details">
                                                    <div class="details-inner">
                                                        <h5><a class="card-title"
                                                                href="{{ route('course.show', ['slug' => $course->slug]) }}">{{ $course->title }}</a>
                                                        </h5>
                                                        <p>
                                                            {!! Str::words($course->overview, 25, ' ...') !!}
                                                        </p>
                                                    </div>
                                                    <div class="bottom-area">
                                                        <div class="row">
                                                            <div class="col-6 align-self-center">
                                                                <div class="rating-inner">
                                                                    @if ($course->rating === 1)
                                                                        <i class="fa fa-star"></i>
                                                                    @elseif($course->rating === 2)
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    @elseif($course->rating === 3)
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    @elseif($course->rating === 4)
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    @elseif($course->rating === 5)
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-6 align-self-center text-right">
                                                                <a class="readmore-text border-btn"
                                                                    href="{{ route('course.show', ['slug' => $course->slug]) }}">Read
                                                                    More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single blog page end -->
    </div>
@endsection
