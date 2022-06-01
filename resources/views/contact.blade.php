@extends('layouts.app')

@section('content')
    <div>
        <div class="page-title-area bg-overlay" style="background-image: url('assets/img/bg/3.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="breadcrumb-inner">
                            <h2 class="page-title">Contact us with any kind of queries</h2>
                            <ul class="page-list">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page title end -->

        <!-- contact area start -->
        <div class="contact-area pd-top-110 pd-bottom-120">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title">Get in touch</h2>
                </div>
                @if (Session::has('error'))
                    <div>
                        {{ Session::get('error') }}
                    </div>
                @endif
                @if (Session::has('success'))
                    <div>
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="contact-page-thumb thumb" style="background-image: url('assets/img/bg/5.png')"></div>
                    </div>
                    <div class="col-lg-7 col-md-6 align-self-center">
                        <form method="post" action="{{ route('contact.store') }}" class="contact-form-inner mt-5 mt-md-0">
                            @csrf
                            <div class="row custom-gutters-20">
                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="name" required type="text" placeholder="Name">
                                    </label>
                                </div>

                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="email" required type="email" placeholder="Email">
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="phone" required type="number" placeholder="Phone">
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="subject" required type="text" placeholder="Subject">
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="single-input-inner style-bg-border">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-base">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end-->

        <div class="contact-g-map">
            @if (!$google_map)
                <p>Map is not available yet.</p>
            @elseif($google_map)
                {!! $google_map->google_map !!}
            @endif
        </div>
    </div>
@endsection
