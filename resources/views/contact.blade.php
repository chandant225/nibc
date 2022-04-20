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
                                <li><a href="{{route('home')}}">Home</a></li>
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
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="contact-page-thumb thumb" style="background-image: url('assets/img/bg/5.png')"></div>
                    </div>
                    <div class="col-lg-7 col-md-6 align-self-center">
                        <form method="post" action="{{route('contact.store')}}" class="contact-form-inner mt-5 mt-md-0">
                            @csrf
                            <div class="row custom-gutters-20">
                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="first_name" required type="text" placeholder="First Name">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="last_name" required type="text" placeholder="Last Name">
                                    </label>
                                </div>
                             
                                <div class="col-12">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="email" required  type="email" placeholder="Email">
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="single-input-inner style-bg-border">
                                        <input name="number" required  type="number" placeholder="Phone">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.92457744545!2d85.33106357509139!3d27.69470332425748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1642328488629!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
</div>
@endsection