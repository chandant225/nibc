   <!-- navbar start -->
   <div class="">   
     <nav class="navbar navbar-area-2 navbar-area navbar-expand-lg">
      <div class="container nav-container">
        <div class="responsive-mobile-menu">
          <button
            class="menu toggle-btn d-block d-lg-none"
            data-target="#nibc_main_menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon-left"></span>
            <span class="icon-right"></span>
          </button>
        </div>
        <div class="logo">
          <a href="{{route('home')}}"><img src="/assets/img/logo.jpg" alt="img" /></a>
        </div>
        <div class="nav-right-part nav-right-part-mobile">
          <a class="search-bar-btn" href="#"><i class="fa fa-search"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="nibc_main_menu">
          <ul class="navbar-nav text-right menu-open">
            <li class="current-menu-item">
              <a href="{{route('home')}}">Home</a>
            </li>
            <li>
              <a href="{{route('about-us')}}">About Us</a>
            </li>
            <li class="menu-item-has-children">
              <a href="">Countries</a>
              <ul class="sub-menu">
                @foreach($countries as $country)
                <li><a href="">{{$country->title}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="{{route('course.index')}}">Courses</a>
              <ul class="sub-menu">
                @foreach($courses as $course)
                <li><a href="">{{$course->title}}</a></li>
                @endforeach
              </ul>
            </li>
            <li>
              <a href="{{route('gallery')}}">Gallery</a>
            </li>
            <li>
              <a href="{{route('blogs.index')}}">Blog</a>
            </li>
            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
          </ul>
        </div>
        <div class="nav-right-part nav-right-part-desktop style-white">
          <ul class="mb-0 border-left-1 pl-4">
            <li class="ml-2">
              <a class="btn btn-base" href="">Get Started</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- navbar end -->