@extends('layouts.app')
@section('content')
    <div>
        @if (count($sliders) === 0)
            <center>
                <p class="text-2xl pt-10 text-red-600 font-semibold">There are no any sliders available yet</p>
            </center>
        @endif
        <div class="banner-slider">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="relative">
                            <img src="/storage/{{ $slider->image }}" alt="" />
                            <div class="absolute top-20">
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($videoslider)
                    @foreach ($videoslider as $video)
                        <div class="swiper-slide">
                            <div class="relative">
                                <iframe width="100%" style="height:60vh" allowfullscreen frameborder="0"
                                    src="https://www.youtube.com/embed/{{ $video->video_link }}?autoplay=1&mute=1">
                                </iframe>
                                <div class="absolute top-20">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif





            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- banner end -->
        <!-- search form   -->
        @include('layouts.search_form')
        <!--country-area start-->
        <div class="course-area pd-top-100 pd-bottom-60">
            <div style="overflow: hidden;" class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="title">Explore Our Destinations</h2>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="{{ route('country.index') }}"><button class="index-button">All
                                    Countries</button></a>
                        </div>
                    </div>
                </div>
                @if (count($countries) === 0)
                    <center>
                        <p class="text-2xl pt-10 text-red-600 font-semibold">There are no any countries available yet</p>
                    </center>
                @endif
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($countries as $country)
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="single-course-inner shadow">
                                        <div class="thumb">
                                            <a href="{{ route('country.show', ['slug' => $country->slug]) }}">
                                                <img src="/storage/{{ $country->image }}" alt="img"
                                                    class="card-image" />
                                            </a>
                                        </div>
                                        <div class="details">
                                            <div class="details-inner">
                                                <h4>
                                                    <a class="card-title"
                                                        href="{{ route('country.show', ['slug' => $country->slug]) }}">{{ $country->title }}</a>
                                                </h4>
                                                <p>
                                                    {!! Str::limit($country->short_description, 80, ' ...') !!}
                                                </p>
                                            </div>
                                            <div class="bottom-area">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="rating-inner">
                                                            @if ($country->rating === 1)
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
                                                    </div>
                                                    <div class="col-lg-6 align-self-center text-right">
                                                        <a class="readmore-text border-btn"
                                                            href="{{ route('country.show', ['slug' => $country->slug]) }}">Read
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
        <!--country-area end-->
        <!-- counter start -->
        <div class="counter-area jarallax pd-top-120 pd-bottom-120" style="background-image: url('assets/img/bg/1.png')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 align-self-center">
                        <div class="section-title style-white text-center">
                            <h2 class="title mb-3">
                                Want to Know More About Abroad Studies?
                            </h2>
                            <h6 class="small-title-color">
                                Get yourself a free consultation
                            </h6>
                            <p class="content">
                                You can get yourself a free consultation about your dream
                                destination, we will help your dream come true.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-xl-1">
                        <div class="fill-up-form-inner mt-3 mt-lg-0">
                            <div class="header text-center">Fill The From Now</div>
                            <div class="details">
                                <label class="single-input-inner style-bg">
                                    <input type="text" placeholder="Full Name" />
                                </label>
                                <label class="single-input-inner style-bg">
                                    <input type="text" placeholder="Email" />
                                </label>
                                <label class="single-input-inner style-bg">
                                    <input type="text" placeholder="Phone Number" />
                                </label>
                                <label class="single-input-inner style-bg">
                                    <textarea placeholder="Message"></textarea>
                                </label>
                                <button class="form-btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter end -->

        <!--course-area start-->
        <div class="course-area pd-top-115 pd-bottom-90">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="title">Top Faculties</h2>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="{{ route('course.index') }}"><button class="index-button">All
                                    Faculties</button></a>
                        </div>
                    </div>
                </div>
                @if (count($courses) === 0)
                    <center>
                        <p class="text-2xl pt-10 text-red-600 font-semibold">There are no any courses available yet</p>
                    </center>
                @elseif(count($courses) >= 1)
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($courses as $course)
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div style="" class="single-course-inner shadow">
                                            <div class="thumb">
                                                <a href="{{ route('course.show', ['slug' => $course->slug]) }}"> <img
                                                        class="card-image" src="/storage/{{ $course->image }}"
                                                        alt="img" /></a>
                                            </div>
                                            <div class="details course-card">
                                                <div class="details-inner">
                                                    <h4 class="mb-md-3 mb-sm-2">
                                                        <a class="card-title"
                                                            href="{{ route('course.show', ['slug' => $course->slug]) }}">{{ $course->title }}</a>
                                                    </h4>
                                                    <div class="cat-area">
                                                        <?php
                                                        $avaliableCountry = explode(',', $course->avaliable_in_country);
                                                        foreach ($avaliableCountry as $country) {
                                                            echo '<a class="cat bg-base">' . $country . '</a>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="bottom-area">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
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
                                                        <div class="col-lg-6 align-self-center text-right">
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
                @endif
            </div>
        </div>
        <!--course-area end-->

        <!-- counter start -->
        <div style="padding: 45px 0px 45px 0px;" class="counter-area bg-gray">
            <div class="container">
                <div class="row">
                    @if (count($counters) === 0)
                        <p>No counters data avaliable yet</p>
                    @elseif(count($counters) >= 1)
                        @foreach ($counters as $counter)
                            <div class="col-lg-3 col-md-6">
                                <div class="single-counter-inner after-bg">
                                    <div style="align-items: center;" class="media">
                                        <div class="media-left">
                                            <div class="thumb">
                                                <img src="/storage/{{ $counter->icon_image }}" alt="img" />
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <h2><span class="counter">{{ $counter->number }}</span></h2>
                                                <p>{{ $counter->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
        <!-- counter end -->

        <!-- video area start -->
        @if ($homepagevideo)
            <div class="container">
                <div class="video-area border-radius-8 pd-top-110 pd-bottom-120 jarallax p-md-5 pl-4 pr-4 pt-5 pb-5"
                    style="background-image: url('/storage/{{ $homepagevideo->background_image }}')">
                    <div class="video-area-inner p-xl-5 p-0 mb-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 text-lg-left text-center">
                                    <div class="section-title style-white mb-0">
                                        <h2 class="title">{{ $homepagevideo->title }}</hh2>
                                            <p class="content mb-0"></p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-2 mt-5 mt-lg-0 text-center align-self-center">
                                    <a data-bs-toggle="modal" data-bs-target="#videoModal" class="video-play-btn" href=""
                                        data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- video area end -->


            <!-- Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe width="100%" height="100%"
                                src="https://www.youtube.com/embed/{{ $homepagevideo->video_link }}?autoplay=1&mute=1">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!--blog-area start-->
        <div class="blog-area pd-top-115 mb-5 pb-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-11">
                        <div class="section-title text-center">
                            <h5 class="sub-title">Latest News & Blogs</h5>
                            <h2 class="title">What's going on</h2>
                        </div>
                    </div>
                </div>
                @if (count($blogs) === 0)
                    <center>
                        <p class="text-xl pt-10 text-red-600 font-semibold">There are no any blogs available yet</p>
                    </center>
                @endif
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $blog)
                            <div class="swiper-slide">
                                <div class="single-blog-inner rounded shadow">
                                    <div class="thumb">
                                        <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">
                                            <img class="card-image" src="/storage/{{ $blog->image }}" alt="img" />
                                        </a>
                                    </div>
                                    <div class="details p-4">
                                        <div class="blog-meta">
                                            <ul class="flex flex-row justify-between items-center">
                                                <li class="comnt bg-base cursor-pointer">{{ $blog->category_slug }}</li>
                                                <li class="author">By <span>Admin</span></li>
                                            </ul>
                                            <p class="mt-3">{{ $blog->created_at->toDateString() }}</p>
                                        </div>
                                        <h5><a class="card-title"
                                                href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                        </h5>
                                        <div class="align-self-center text-right">
                                            <a class="readmore-text border-btn"
                                                href="{{ route('blog.show', ['slug' => $blog->slug]) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--blog-area end-->

        <!--client-area start-->
        <div class="client-area bg-gray pt-5 pd-bottom-90">
            <div class="container">
                @if (count($clients) === 0)
                    <p>No clients data avaliable yet.</p>
                @elseif(count($clients) >= 1)
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($clients as $client)
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="client-thumb text-center">
                                            <img src="storage/{{ $client->client_image }}" alt="img" />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!--client-area end-->
    </div>

@endsection
