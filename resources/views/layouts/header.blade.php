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
              <a style="font-size:{{Route::currentRouteName() === 'home' ? '18px' : '16px'}}; text-decoration:{{Route::currentRouteName() === 'home' ? 'underline' : 'none'}};" href="{{route('home')}}">Home</a>
            </li>
            <li>
              <a style="font-size:{{Route::currentRouteName() === 'about-us' ? '18px' : '16px'}}; text-decoration:{{Route::currentRouteName() === 'about-us' ? 'underline' : 'none'}};" href="{{route('about-us')}}">About Us</a>
            </li>
            <li>
              <a style="font-size:{{Route::currentRouteName() === 'country.index' ? '18px' : '16px'}}; text-decoration:{{Route::currentRouteName() === 'country.index' ? 'underline' : 'none'}};" href="{{route('country.index')}}">Countries</a>
            </li>
            <li>
              <a style="font-size:{{Route::currentRouteName() === 'course.index' ? '18px' : '16px'}}; text-decoration:{{Route::currentRouteName() === 'course.index' ? 'underline' : 'none'}};" href="{{route('course.index')}}">Courses</a>
            </li>
            <li>
              <a style="font-size:{{Route::currentRouteName() === 'gallery' ? '18px' : '16px'}}; text-decoration:{{Route::currentRouteName() === 'gallery' ? 'underline' : 'none'}};" href="{{route('gallery')}}">Gallery</a>
            </li>
            <li>
              <a style="font-size:{{Route::currentRouteName() === 'blogs.index' ? '18px' : '16px'}}; text-decoration:{{Route::currentRouteName() === 'blogs.index' ? 'underline' : 'none'}};" href="{{route('blogs.index')}}">Blog</a>
            </li>
            <li><a style="font-size:{{Route::currentRouteName() === 'contact-us' ? '18px' : '16px'}}; text-decoration:{{Route::currentRouteName() === 'contact-us' ? 'underline' : 'none'}};" href="{{route('contact-us')}}">Contact Us</a></li>
          </ul>
        </div>
        <div class="nav-right-part nav-right-part-desktop style-white">
          <ul class="mb-0 border-left-1 pl-4">
            <li class="ml-2">
              <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- navbar end -->

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get Started</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="col-12 align-self-center my-2">
        <form method="post" action="{{route('contact.store')}}" class="contact-form-inner mt-5 mt-md-0">
            @csrf
            <div class="row custom-gutters-20">
                <div class="col-lg-6">
                    <label class="single-input-inner style-bg-border">
                        <input name="name" required type="text" placeholder="Name">
                    </label>
                </div>
             
                <div class="col-lg-6">
                    <label class="single-input-inner style-bg-border">
                        <input name="email" required  type="email" placeholder="Email">
                    </label>
                </div>
                <div class="col-12">
                    <label class="single-input-inner style-bg-border">
                        <input name="phone" required  type="number" placeholder="Phone">
                    </label>
                </div>
                <div class="col-12">
                    <label class="single-input-inner style-bg-border">
                        <input name="subject" required  type="text" placeholder="Subject">
                    </label>
                </div>
                <div class="col-12">
                    <label class="single-input-inner style-bg-border">
                        <textarea name="message" placeholder="Message" required></textarea>
                    </label>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-dark">Send Message</button>
                </div>
            </div>
        </form>
    </div>
    </div>
  </div>
</div>