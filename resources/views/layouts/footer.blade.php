@if (!$footer_data)
    <p>footer data is not available yet.</p>
@elseif($footer_data)
    <!-- navbar start -->
    <div id="mySidenav" class="sidenav">
        <a href="{{ $footer_data->facebook_link }}" class="fa fa-facebook" id="facebook"></a>
        <a href="{{ $footer_data->twitter_link }}" class="fa fa-twitter" id="twitter"></a>
        <a href="{{ $footer_data->instagram_link }}" class="fa fa-instagram" id="instagram"></a>
        <a href="{{ $footer_data->whatsapp_link }}" class="fa fa-whatsapp" id="whatsapp"></a>
    </div>
    <!-- footer area start -->
    <div class="footer-call-to-action">
        <div class="container">
            <div class="call-to-action bg-red">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title mb-0 style-white">
                            <h3 class="title">
                                Our students have reached their DREAM CAREER through us.
                            </h3>
                            <a href="#"><button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="footer-btn">Enroll Today</button></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="thumb" style="background-image: url('/assets/img/other/5.png')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area">
        <div class="footer-top pd-top-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_contact pr-lg-3">
                            <div class="widget-title">
                                <a href="{{ route('home') }}"><img style="object-fit: contain;"
                                        src="/storage/{{ $footer_data->footer_img }}"
                                        alt="NIBC educational foundation logo" width="200" /></a>
                            </div>

                            {{ $footer_data->description }}
                            <div class="col-md-6 align-self-center text-md-right">
                                <strong>Follow us on: </strong>
                                <ul class="social-media-2 style-black mt-3 mt-md-0 d-inline-block">
                                    <li>
                                        <a href="{{ $footer_data->facebook_link }}"><i
                                                class="fab fa-facebook-square  text-gray-100"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $footer_data->twitter_link }}"><i
                                                class="fab fa-twitter-square  text-gray-100" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $footer_data->instagram_link }}"><i
                                                class="fab fa-instagram  text-gray-100" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $footer_data->whatsapp_link }}"><i
                                                class="fab fa-whatsapp  text-gray-100" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <li><a href="/courses">Courses</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/blogs">Blogs</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pl-lg-5 pr-5 pr-lg-0">
                        <div class="widget widget_contact pr-lg-3">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul class="details style-icon">
                                <li><i class="fa fa-phone"></i>{{ $footer_data->contact_no }}</li>
                                <li><i class="fas fa-envelope"></i>{{ $footer_data->email }}</li>
                                <li>
                                    <i class="fa fa-map-marker"></i>{{ $footer_data->address }}
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">Facebook</h4>
                        </div>
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnibc.edu.np%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 align-self-center">
                        <p>Designed & Developed By <a href="">Out of Box Design</a></p>
                    </div>
                    <div class="col-md-7 text-md-right align-self-center mt-lg-0 mt-3">
                        <p>© Copyrights 2022 NIBC All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div onclick="topFunction()" class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
@endif
<script>
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
