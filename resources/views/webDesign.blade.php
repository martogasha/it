@include('header')
<title>Website Design - Dolex IT Solutions & Technology</title>

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
<section class="page-title-section" style="background-image: url({{asset('images/service/w.webp')}}")>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                    <h2 class="page-title">Website Design</h2>
                    <ul class="breadcrumbs-link">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Website Design</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Title End -->
<!-- Service Details Section Start -->
<section class="service-details-page pdt-110 pdb-110 pdb-lg-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="service-detail-text">
                    <div class="blog-standared-img slider-blog mrb-40">
                        <img class="img-full" src="images/service/wd.jpg" alt="" />
                    </div>
                    <h3 class="mrb-15">Service Details</h3>
                    <p class="mrb-40">
                        We create personalized websites that are suited to the individual requirements of your clients.
                    </p>
                    <p class="about-text-block mrb-40">For your small business, we create contemporary, responsive websites with e-commerce capabilities. We employ the latest technologies that will look fantastic on any mobile or desktop screen.
                    </p>
                    <p class="mrb-35">
                        Create a website that effectively communicates your brand, increases conversion rates, and increases revenue. To chat with a strategist about our website design services, reach out to us online.</p>
                    <div class="service-details-content">
                        <div class="row d-flex">
                            <div class="col-lg-12 col-xl-6">
                                <h3 class="mrb-20">Service Included</h3>
                                <ul class="order-list primary-color mrb-lg-40">
                                    <li>Website Design / Website Development</li>
                                    <li>Website Re-design</li>
                                    <li>E-Commerce Development</li>
                                    <li>Hosting Services</li>
                                    <li>Maintenance and Support</li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <img class="img-full mrb-lg-35" src="images/service/wt.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 sidebar-right">
                <div class="service-nav-menu mrb-30">
                    <div class="service-link-list">
                        <ul>
                            <li class="active">
                                <a href="{{url('websiteDesign')}}"><i class="base-icon-right-arrow"></i>Website Design</a>
                            </li>
                            <li>
                                <a href="{{url('Networking')}}"><i class="base-icon-right-arrow"></i>Networking Solutions</a>
                            </li>
                            <li>
                                <a href="{{url('softwareDevelopment')}}"><i class="base-icon-right-arrow"></i>Software Development</a>
                            </li>
                            <li>
                                <a href="{{url('digitalMarketing')}}"><i class="base-icon-right-arrow"></i>Digital Marketing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-widget-need-help">
                    <div class="need-help-icon">
                        <span class="webexflaticon base-icon-whatsapp"></span>
                    </div>
                    <h4 class="need-help-title">
                        Get Easy IT Solutions <br />
                        From Us
                    </h4>
                    <div class="need-help-contact">
                        <p class="mrb-5">Please Contact With Us</p>
                        <a href="tel:00214255415">0703725501</a>
                    </div>
                </div>
                <div class="sidebar-widget">
                    <div class="brochure-download">
                        <h4 class="mrb-40 widget-title">Brochure Download</h4>
                        <p>Please click download button for getting brochure file</p>
                        <a href="#" class="cs-btn-one"><span class="far fa-file-pdf mrr-10"></span> Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')

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

<!-- Mirrored from webextech.com/html/ziptech/v2/service-digital-marketing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 07:40:47 GMT -->
</html>
