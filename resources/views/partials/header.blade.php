<header class="main-header"> 
    <!--Header Top-->
    <div class="header-top">
      <div class="auto-container">
        <div class="inner-container clearfix">
          <div class="top-left">
            <div class="text">Best on-time projects & services always</div>
          </div>
          <div class="top-right">
            <ul class="list clearfix">
              <li><a href="tel:+369-2900-4800"><span class="icon fa fa-phone-square"></span> (369) 2900 4800</a></li>
              <li><a href="mailto:test@test.com"><span class="icon fa fa-envelope"></span> test@test.com</a></li>
            </ul>
            <ul class="social-icons">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Top --> 
    <!-- Header Upper -->
    <div class="header-upper">
      <div class="auto-container">
        <div class="inner-container clearfix"> 
          <!--Info-->
          <div class="logo-outer">
            <div class="logo logo-1" style="padding-top:14px;"> <a href="{{route('welcome')}}"> <img src="{{asset('images/logo2.png')}}" alt="">
              </a> </div>
          </div>
          <!--Nav Box-->
          <div class="nav-outer clearfix"> 
            <!--Mobile Navigation Toggler For Mobile-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
            <nav class="main-menu navbar-expand-md navbar-light">
              <div class="navbar-header"> 
                <!-- Togg le Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon flaticon-menu"></span> </button>
              </div>
              <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                <ul class="navigation clearfix">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('openings')}}">Openings</a></li>
                
                  {{-- <li class="dropdown"><a href="javascript:void(0)">Services</a>
                    <ul>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                    <ul>
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                  </li> --}}
                  <li><a href="">Services</a></li>
                  <li><a href="">Contact</a></li>
                </ul>
              </div>
            </nav>
            <!-- Main Menu End--> 
            <!-- Main Menu End-->
            <div class="outer-box clearfix"> 
              <!--Search Box-->
         
              <!-- Button Box -->
              <div class="btn-box"> <a href="" class="theme-btn vendor-btn open-popup-link">Get Started</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Header Upper--> 
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><span class="icon far fa-window-close"></span></div>
      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
        <ul class="navigation clearfix">
          <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
      </nav>
    </div>
    <!-- End Mobile Menu --> 
    <!-- Quote Section -->
  <div class="quote-part mfp-hide" id="quote-popup">
    <div class="container">
      <div class="section-title"> <span class="section-span">Get A Quote</span>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form class="quote-form">
            <div class="row">
              <div class="col-md">
                <input type="text" class="form-control" placeholder="Name" required>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                <input type="text" class="form-control" placeholder="Subject" required>
              </div>
              <div class="col-md">
                <select class="form-control" id="courier-type-box">
                  <option>Standard</option>
                  <option>Express</option>
                  <option>International</option>
                  <option>Pallet</option>
                  <option>Ware Housing</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Message" rows="4" required></textarea>
            </div>
            <button type="submit" class="quote-contact-btn">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </header>