@include('header')
<title>Home - Dolex IT Solutions & Technology</title>

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
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Header Area End -->
<!-- Home Slider Start -->
<section class="home_banner_01">
    <div class="home-carousel owl-theme owl-carousel">
        <div class="slide-item">
            <div class="image-layer" data-background="images/bg/n.jpg"></div>
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h1 class="home-carousel-title"><span style="color:cornflowerblue">Dolex</span> <span class="text-obj2">Provides</span> Best Networking Solutions and IT Consultation</h1>
                            <div class="btn-box">
                                <a href="{{url('Networking')}}" class="theme-btn-1 mrr-15">Read More<i class="base-icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" data-background="images/bg/s.jpg"></div>
            <div class="shape1"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h1 class="home-carousel-title"><span style="color:cornflowerblue">Dolex</span> Provides Best Website Designs and Software Development(SMEs)</h1>
                            <div class="btn-box">
                                <a href="{{url('websiteDesign')}}" class="theme-btn-1 mrr-15">Read More<i class="base-icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" data-background="images/bg/d.jpg"></div>
            <div class="shape1"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h1 class="home-carousel-title"><span style="color:cornflowerblue">Dolex</span> Provides Best Digital Marketing Strategies</h1>
                            <div class="btn-box">
                                <a href="{{url('digitalMarketing')}}" class="theme-btn-1 mrr-15">Read More<i class="base-icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Slider End -->
<!-- About Us Section Start -->
<section class="about-us-section-style1 pdt-110 pdb-110 bg-no-repeat bg-cover bg-pos-cb" data-background="images/bg/abs-bg1.png" data-overlay-light="3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="about-image-box-style1 dot-circle mrb-lg-60">
                    <img class="about-image1 img-full js-tilt d-none d-md-block d-lg-block d-xl-block" src="images/about/n1.jpg" alt="" />
                    <img class="about-image2 img-full" src="images/about/d1.jpg" alt="" />
                    <img class="about-badge1 img-full js-tilt" src="images/about/certificate1.png" alt="" />
                </div>
            </div>
            <div class="col-md-12 col-lg-10 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="title-box">
                    <h5 class="side-line-left sub-title text-gradient-color">About Company</h5>
                    <h2 class="title mrb-35 mrb-lg-35">
                        We Provide the best
                        <span class="text-gradient-color">IT Solutions</span> services
                    </h2>
                </div>
                <p class="mrb-30">Below are services we offer</p>
                <div class="row mrb-35 mrb-lg-35">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <ul class="order-list webex-primary-color">
                            <li>Networking Solutions</li>
                            <li>Website Designs</li>
                            <li>SMEs Software Development</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <ul class="order-list webex-primary-color">
                            <li>Digital Marketing</li>
                            <li>Large Enterprise Software Development</li>
                        </ul>
                    </div>
                </div>
                <div class="row no-gutters mrb-5">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="featured-icon-box mrb-15 mrr-30">
                            <div class="featured-icon">
                                <i class="webexflaticon webextheme-icon-group"></i>
                            </div>
                            <div class="featured-content">
                                <h4 class="featured-title">Business Growth</h4>
                                <p class="featured-desc">Quickly productivate with Digital Marketing skills</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="featured-icon-box mrb-sm-40 mrr-30">
                            <div class="featured-icon">
                                <i class="webexflaticon webextheme-icon-013-user-interface"></i>
                            </div>
                            <div class="featured-content">
                                <h4 class="featured-title">Free Consultation</h4>
                                <p class="featured-desc mrb-0"><a href="#"><i class="fab fa-whatsapp"></i> 0703725501</a>
                                <p class="featured-desc mrb-0"><a href="#"><i class="fas fa-envelope mrr-10"></i>dolextech@outlook.com</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-inline d-md-flex align-items-center mt-40">
                            <a href="page-about-us.html" class="theme-btn-1 mrr-40 mrb-sm-20">Read More <i class="base-icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->
<!-- Client Section Start -->
<!-- Client Section End -->
<!-- Service Section Start -->
<section class="service-section-style1 pdt-110 pdb-110">
    <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-md-12 col-lg-10 col-xl-6">
                    <div class="title-box-center">
                        <h5 class="sub-title mrb-10">Our Services</h5>
                        <h2 class="title">We Offer Exclusive IT Services</h2>
                        <div class="section-title-big_text">Services</div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4 service-wrapper">
                    <div class="service-style1">
                        <div class="thumb">
                            <img src="images/service/w.webp" alt="Ziptech" />
                            <div class="visible_title_area">
                                <div class="icon">
                                    <i class="webextheme-icon-web-design"></i>
                                </div>
                                <h4 class="title"><a href="service-ui-ux-design.html"> Website Design</a></h4>
                            </div>
                            <div class="overlay text-center">
                                <div class="content">
                                    <i class="webextheme-icon-web-design"></i>
                                    <h4 class="title"><a href="service-ui-ux-design.html">Website Design</a></h4>
                                    <p class="description">Responsive Web and Mobile Designs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 service-wrapper">
                    <div class="service-style1">
                        <div class="thumb">
                            <img src="images/service/nq.jpg" alt="Ziptech" />
                            <div class="visible_title_area">
                                <div class="icon">
                                    <i class="webextheme-icon-chip"></i>
                                </div>
                                <h4 class="title"><a href="service-it-management.html">Networking Solutions</a></h4>
                            </div>
                            <div class="overlay text-center">
                                <div class="content">
                                    <i class="webextheme-icon-chip"></i>
                                    <h4 class="title"><a href="service-it-management.html">Networking Solutions</a></h4>
                                    <p class="description">Security surveillance, Company Networking, Fingerprint Locks...etc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 service-wrapper">
                    <div class="service-style1">
                        <div class="thumb">
                            <img src="images/service/d4.png" alt="Ziptech" />
                            <div class="visible_title_area">
                                <div class="icon">
                                    <i class="webextheme-icon-006-seo"></i>
                                </div>
                                <h4 class="title"><a href="service-digital-marketing.html">Digital Marketing</a></h4>
                            </div>
                            <div class="overlay text-center">
                                <div class="content">
                                    <i class="webextheme-icon-006-seo"></i>
                                    <h4 class="title"><a href="service-digital-marketing.html">Digital Marketing</a></h4>
                                    <p class="description">Search Engine Optimization(SEO), Email Marketing, Social Media Growth </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mrt-30">
                <div class="col-xl-12 text-center">
                    <div class="service-load-more">
                        <h5 class="text">
                            Do You Want To explore more services just <span><a href="page-services-style-02.html" class="text-underline text-gradient-color">click here</a></span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End -->
<!-- Why Choose Us Section Style1 Start -->
<!-- Why Choose Us style2 Section End -->
<!-- Request a Call Back Form Section Start -->
<section class="request-a-call-back-form-section-style1 pos-rel">
    <div class="request-a-call-back-section-obj1">
        <img src="images/objects/arrow-video.png" alt="" />
    </div>
    <div class="brand-obj1">
        <img src="images/objects/brand-object1.png" alt="" />
    </div>
    <div class="container">
        <div class="request-a-call-back-area">
            <div class="row">
                <div class="col-lg-5 align-self-center text-right">
                    <!-- <div class="request-a-call-back-form-image wow fadeInLeft">
                      <img src="images/about/request-a-call-back-im1.jpg" alt="" />
                    </div> -->
                    <div class="image-video-block">
                        <img src="images/about/cb.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-7 align-self-center" id="callBackDiv">
                    <div class="request-a-call-back-form">
                        <h2 class="mrb-15">Request a Call Back</h2>
                        <p class="mrb-40">Fill in your details and what you need help with and will get back to you.</p>
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
                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <input type="email" placeholder="Email" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <select>
                                            <option value="1">High Priority</option>
                                            <option value="2">Low Priority</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mrb-25">
                                        <textarea rows="3" placeholder="Messages" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn-6 mrb-lg-60">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Request a Call Back Form Section End -->
<!-- Team Section Start -->
<!-- Team Section End -->
<!-- Project Section Start -->
<!-- Project Section End -->
<!-- Funfact Section Start -->
<!-- Funfact Section End -->
<!-- Testimonials Section Start -->
<!-- Testimonials Section End -->
<!-- News Section Start -->
<section class="pdt-105 bg-cover" data-background="images/bg/abs-bg8.png">
{{--    <div class="section-title mrb-60 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-end">--}}
{{--                <div class="col-xl-6 col-lg-8 col-md-12">--}}
{{--                    <div class="title-box-center">--}}
{{--                        <h5 class="side-line-left sub-title text-gradient-color">Latest Blog</h5>--}}
{{--                        <h2 class="mrb-25">News & <span class="text-gradient-color">Updates </span></h2>--}}
{{--                        <div class="section-title-big_text">News</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-6 col-lg-4 col-md-12 text-lg-end">--}}
{{--                    <a href="page-news.html" class="theme-btn-1">All News <i class="base-icon-next"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="section-content mrb-80">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-6 col-lg-6 col-xl-4">--}}
{{--                    <div class="news-wrapper-style1 mrb-30">--}}
{{--                        <div class="news-thumb">--}}
{{--                            <img src="images/news/01.jpg" class="img-full" alt="blog" />--}}
{{--                            <div class="news-top-meta">--}}
{{--                                <span class="entry-category">Architecture</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="news-description">--}}
{{--                            <h4 class="the-title">--}}
{{--                                <a href="page-news-details.html">Distinctively revolutionary for chang the Seamlessly</a>--}}
{{--                            </h4>--}}
{{--                            <div class="news-bottom-part">--}}
{{--                                <div class="post-author">--}}
{{--                                    <div class="author-img">--}}
{{--                                        <a href="page-news.html">--}}
{{--                                            <img src="images/testimonials/testimonial-img1.jpg" class="rounded-circle" alt="#" />--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <span><a href="page-news.html">Admin</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-link">--}}
{{--                                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-gradient-color"></i>01 Jan, 2022</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-6 col-xl-4">--}}
{{--                    <div class="news-wrapper-style1 mrb-30">--}}
{{--                        <div class="news-thumb">--}}
{{--                            <img src="images/news/02.jpg" class="img-full" alt="blog" />--}}
{{--                            <div class="news-top-meta">--}}
{{--                                <span class="entry-category">Building</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="news-description">--}}
{{--                            <h4 class="the-title">--}}
{{--                                <a href="page-news-details.html">Distinctively revolutionary for chang the Seamlessly</a>--}}
{{--                            </h4>--}}
{{--                            <div class="news-bottom-part">--}}
{{--                                <div class="post-author">--}}
{{--                                    <div class="author-img">--}}
{{--                                        <a href="page-news.html">--}}
{{--                                            <img src="images/testimonials/testimonial-img2.jpg" class="rounded-circle" alt="#" />--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <span><a href="page-news.html">Admin</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-link">--}}
{{--                                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-gradient-color"></i>01 Jan, 2022</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-6 col-xl-4">--}}
{{--                    <div class="news-wrapper-style1 mrb-30">--}}
{{--                        <div class="news-thumb">--}}
{{--                            <img src="images/news/03.jpg" class="img-full" alt="blog" />--}}
{{--                            <div class="news-top-meta">--}}
{{--                                <span class="entry-category">Interior</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="news-description">--}}
{{--                            <h4 class="the-title">--}}
{{--                                <a href="page-news-details.html">Distinctively revolutionary for chang the Seamlessly</a>--}}
{{--                            </h4>--}}
{{--                            <div class="news-bottom-part">--}}
{{--                                <div class="post-author">--}}
{{--                                    <div class="author-img">--}}
{{--                                        <a href="page-news.html">--}}
{{--                                            <img src="images/testimonials/testimonial-img3.jpg" class="rounded-circle" alt="#" />--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <span><a href="page-news.html">Admin</a></span>--}}
{{--                                </div>--}}
{{--                                <div class="post-link">--}}
{{--                                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-gradient-color"></i>01 Jan, 2022</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container">
            <div class="call-to-action-inner">
                <div class="call-to-action-left">
                    <div class="call-to-action-icon">
                        <span class="webexflaticon base-icon-chat1"></span>
                    </div>
                    <div class="call-to-action-content">
                        <p class="call-to-action-sub-title">Need Any Consultaitons?</p>
                        <h2 class="call-to-action-title">We are ready to help you</h2>
                    </div>
                </div>
                <div class="call-to-action-btn-box mrt-15 mrt-md-30">
                    <a href="#" class="theme-btn-2" id="contactButton">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
</section>
<!-- News Section End -->
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
<script src="js/tilt.jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/backtotop.js"></script>
<script src="js/trigger.js"></script>
</body>
<script>
    $("#contactButton").click(function() {
        $('html, body').animate({
            scrollTop: $("#callBackDiv").offset().top
        });
    });
</script>
<!-- Mirrored from webextech.com/html/ziptech/v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 07:36:56 GMT -->
</html>
