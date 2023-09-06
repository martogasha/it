@include('header')
<title>Contacts - Dolex IT Solutions & Technology</title>

<ul class="main-nav-menu">
    <li class="">
        <a href="{{url('/')}}" style="color: #0a53be">Home</a>
    </li>
    <li class="">
        <a href="{{url('about')}}">About</a>
    </li>
    <li class="menu-has-sub">
        <a href="#">Services</a>
        <ul>
            <li>
                <a href="{{url('Networking')}}">Networking Solutions</a>
            </li>
            <li><a href="{{url('websiteDesign')}}">Website Design</a></li>
            <li><a href="{{url('softwareDevelopment')}}">Software Development</a></li>
            <li><a href="{{url('digitalMarketing')}}">Digital Marketing</a></li>
        </ul>
    </li>
    <li class="">
        <a href="{{url('news')}}">News</a>
    </li>
    <li><a href="{{url('contacts')}}">Contact</a></li>
</ul>
                <div class="main-menu-right">
                    <a href="#" class="mobile-nav-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <a href="#" class="search-toggler">
                        <i class="base-icon-search-1"></i>
                    </a>
                    <div class="header-contact-btn">
                        <a href="page-contact-us.html" class="theme-btn-6">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Header Area End -->
<!-- Page Title Start -->
<section class="page-title-section" style="background-image: url({{asset('images/service/whatsapp.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                    <h2 class="page-title">Contact Us</h2>
                    <ul class="breadcrumbs-link">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->
<!-- Contact Section Start -->
<section class="contact-section bg-no-repeat bg-cover pdt-110 pdb-110" data-background="images/bg/abs-bg6.png" data-overlay-light="2">
    <div class="container">
        <div class="row mrb-80">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="contact-block d-flex mrb-30">
                            <div class="contact-icon">
                                <i class="base-icon-map"></i>
                            </div>
                            <div class="contact-details mrl-30">
                                <h5 class="icon-box-title mrb-10">Kenya</h5>
                                <p class="mrb-0">Kagio, Kenya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="contact-block d-flex mrb-30">
                            <div class="contact-icon">
                                <i class="base-icon-094-email-2"></i>
                            </div>
                            <div class="contact-details mrl-30">
                                <h5 class="icon-box-title mrb-10">Email Us</h5>
                                <p class="mrb-0">dolextech@outlook.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="contact-block d-flex mrb-30">
                            <div class="contact-icon">
                                <i class="base-icon-phone-2"></i>
                            </div>
                            <div class="contact-details mrl-30">
                                <h5 class="icon-box-title mrb-10">Phone Number</h5>
                                <p class="mrb-0">0703725501</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5">
                <h5 class="side-line-left text-primary-color mrt-0 mrb-5">Get In Touch</h5>
                <h2 class="faq-title mrb-30">Have Any Questions?</h2>
                <ul class="social-list list-lg list-primary-color list-flat mrb-lg-60 clearfix">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100094146408272"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-7">
                <div class="contact-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mrb-25">
                                    <input type="text" placeholder="Name" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mrb-25">
                                    <input type="text" placeholder="Phone" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mrb-25">
                                    <input type="email" placeholder="Email" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mrb-25">
                                    <textarea rows="5" placeholder="Messages" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <button type="submit" class="animate-btn-style3 mrb-lg-60">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
<!-- Google Map Section Start -->
<!-- Google Map Section End -->
<!-- Footer Area Start -->
@include('footer')
<!-- Footer Area End -->
<!-- Mobile Nav Sidebar Content Start -->
<!-- Mobile Nav Sidebar Content End -->
<!-- Header Search Popup Start -->
<div class="search-popup">
    <div class="search-popup-overlay search-toggler"></div>
    <div class="search-popup-content">
        <form action="#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="base-icon-search-1"></i>
            </button>
        </form>
    </div>
</div>
<!-- Header Search Popup End -->
<!-- Back to Top Start -->
<div class="anim-scroll-to-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to Top end -->
<!-- Integrated important scripts here -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.event.move.js"></script>
<script src="js/jquery.twentytwenty.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/backtotop.js"></script>
<script src="js/trigger.js"></script>
</body>

<!-- Mirrored from webextech.com/html/ziptech/v2/page-contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 07:41:17 GMT -->
</html>
