@extends('layouts.app')

@section('content')
<div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

<div id="test-popup" class="white-popup mfp-hide">
        <div class="top-form-header">
            <h4>Login Form</h4> </div>
        <form action="#" method="post" id="main_login_form" novalidate="">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="name" id="name0" required=""> <span class="highlight"></span> <span class="bar"></span>
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="name" id="name1" required=""> <span class="highlight"></span> <span class="bar"></span>
                        <label>Password</label>
                    </div>
                </div>
                <div class="col-12 col-sm-5 text-left ">
                    <button type="submit" class="btn dream-btn">Login</button>
                </div>
                <div class="col-12 col-sm-7 text-left">
                    <p class="mb-0 mt-10">Don't have an account? <a href="">Sign up</a></p>
                </div>
            </div>
        </form>
        <div class="other-accounts text-center">
            <p class="w-text">Login with other account</p>
            <div class="footer-social-info"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
        </div>
    </div>
    <!-- signup popup form so: -->
    <div id="signup-popup" class="white-popup mfp-hide">
        <div class="top-form-header">
            <h4>Signup Form</h4> </div>
        <form action="#" method="post" id="main_Signup_form" novalidate="">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="name" id="name3" required=""> <span class="highlight"></span> <span class="bar"></span>
                        <label>Name</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="name" id="name4" required=""> <span class="highlight"></span> <span class="bar"></span>
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="name" id="name5" required=""> <span class="highlight"></span> <span class="bar"></span>
                        <label>Password</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="name" id="name6" required=""> <span class="highlight"></span> <span class="bar"></span>
                        <label>Confirm Password</label>
                    </div>
                </div>
                <div class="col-12 col-sm-5 text-left ">
                    <button type="submit" class="btn dream-btn">Login</button>
                </div>
                <div class="col-12 col-sm-7 text-left">
                    <p class="mb-0 mt-10">Don't have an account? <a href="">Sign up</a></p>
                </div>
            </div>
        </form>
        <div class="other-accounts text-center">
            <p class="w-text">Login with other account</p>
            <div class="footer-social-info"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
        </div>
    </div>
    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area demo2 flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Content -->
                <div class="col-12 col-lg-6 col-md-12"> 
                    <div class="welcome-content v2">
                        <div class="promo-section">
                            <div class="integration-link light"> <span class="integration-icon">
                                    <img src="{{ asset('img/svg/img-dollar.svg') }}" width="24" height="24" alt="">
                                </span> <span class="integration-text">Build Your Resume 100 % Free!</span> </div>
                        </div>
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s">Online CV Builder With Creative Templates.</h1>
                        <p class="lead">Use professional field-tested resume templates that follow the exact <br> ‘resume rules’ employers look for. Easy to use and done within <br> minutes - try now for free! </p>
            
                        <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s"> <a href="{{ route('home')}}" class="btn dream-btn green-btn mr-3">Get Started</a>  <a href="{{ route('home')}}" class="btn dream-btn green-btn" style="background: #212529;border:2px solid #212529;"> Create My Resume</a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="banner-box"> <img src="{{ asset('img/core-img/banner2.png') }}" alt=""> </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ##### Welcome Area End ##### -->
    <div class="clearfix"></div>
    <section class="demo-video feat section-padding-100 bub-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-img-box"> <img src="{{ asset('img/icons/d1.png') }}" alt=""> </div>
                            <h3><a href="#">Easy Online Resume Builder</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda.</div>
                        </div>
                    </div>
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-img-box"> <img src="{{ asset('img/icons/d2.png') }}" alt=""> </div>
                            <h3><a href="#">Step by Step Expert Tips</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit skaj gjska consectetur adipisicing elit.</div>
                        </div>
                    </div>
                    <div class="services-block-four" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="icon-img-box"> <img src="{{ asset('img/icons/d3.png') }}" alt=""> </div>
                            <h3><a href="#">Recruiter Approved Phrases</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="who-we-contant mt-s">
                        <div class="dream-dots"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                        <h4>Why Choose Our Platform?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molestiae facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tempora odit laborum iure inventore possimus laboriosam qui nam. Fugit!</p> <a class="btn dream-btn mt-30" href="templates.html">lets build your cv</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">
                        <div class="dream-dots"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                        <h4 class="bold">We Deliver The Best</h4>
                        <div class="list-wrap align-items-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="img/icons/check.png" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Proven CV Templates to increase Hiring Chance</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Creative and Clean Templates Design</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Easy and Intuitive Online CV Builder</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Free to use. Developed by hiring professionals.</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Fast Easy CV and Resume Formatting</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Recruiter Approved Phrases.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp mt-s" data-wow-delay="0.3s"> <img src="{{ asset('img/core-img/cv.png') }}" class="center-block" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
    <div class="clearfix"></div>
    <!-- ##### Area start ##### -->
    <section class="container section-padding-0-100">
        <div class="subscribe">
            <div class="row align-items-center relative"> <img src="{{ asset('img/core-img/custom.png') }}" alt="" class="custom">
                <div class="col-lg-5 col-lg-offset-3 col-md-9 col-xs-12">
                    <h2 class="bold mb-0">Do you Need a Complete Custom CV Template?</h2> </div>
                <div class="col-lg-3 col-lg-offset-1 col-md-3 col-sm-12 text-center"> <a href="contact-us.html" class="button mt-s">Send a Request</a> </div>
            </div>
        </div>
    </section>
    <!-- ##### Area End ##### -->
    <section class="pricing section-padding-0-70">
        <div class="container">
            <div class="row">
                <!-- Single Table -->
                <div class="col-lg-4 col-md-6">
                    <div class="who-we-contant mt-s">
                        <div class="dream-dots"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                        <h4>Our Pricing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
                        <div class="free-7"> <span>Lets Build CV</span>
                            <p> with 7days of Free Trial</p>
                        </div>
                        <div class="terms mt-30"> <a href="#">Terms & Conditions </a>
                            <p>subject to change with perior notice</p>
                        </div>
                    </div>
                </div>
                <!-- Single Table -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_price_table_content wow fadeInUp" data-wow-delay="0.2s">
                        <div class="price_table_text">
                            <h1>$9.99</h1>
                            <h5 class="gradient-text cyan">/ month</h5> </div>
                        <div class="table_text_details">
                            <h3>Monthly Pack</h3>
                            <p>You will be billed per month, and get unlimited access to all resume Templates and new added ones</p> <a href="contact-us.html" class="button mt-s">Get Started</a> </div>
                    </div>
                </div>
                <!-- Single Table -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_price_table_content wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price_table_text">
                            <h1>$7.99</h1>
                            <h5 class="gradient-text cyan">/ month</h5> </div>
                        <div class="table_text_details">
                            <h3>Yearly Pack <span> save 20%</span></h3>
                            <p>You will be billed per Year, and get unlimited access to all resume Templates and new added ones</p> <a href="contact-us.html" class="button mt-s">Get Started</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="demo section-padding-100 ring-bg">
        <div class="container">
            <div class="section-heading text-center">
                <div class="dream-dots justify-content-center"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                <h2 class="bold">Our Creative Templates</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="template-preview.html"><img src="{{ asset('img/demos/demo-1.png') }}" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center"> <a href="template-preview.html" class="preview-demo">See template <i class="fa fa-long-arrow-right"></i></a> <a href="template-edit.html" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="template-preview.html"><img src="{{ asset('img/demos/demo-2.png') }}" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center"> <a href="template-preview.html" class="preview-demo">See template <i class="fa fa-long-arrow-right"></i></a> <a href="template-edit.html" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="demo-item">
                        <a href="template-preview.html"><img src="{{ asset('img/demos/demo-3.png') }}" alt="demo" class="img-responsive"></a>
                        <div class="preview-btn-wrapper text-center"> <a href="template-preview.html" class="preview-demo">See template <i class="fa fa-long-arrow-right"></i></a> <a href="template-edit.html" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our features Area Start ##### -->
    <section class="our_services_area section-padding-100-70" id="services">
        <div class="container">
            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Our Main Features</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f1.png') }}" alt=""> </div>
                        <h6>Proven CV Templates to increase Hiring Chance</h6>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f2.png') }}" alt=""> </div>
                        <h6>Creative, Modern and Clean Templates Design</h6>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f3.png') }}" alt=""> </div>
                        <h6>Easy and Intuitive Online CV and Resume Builder </h6>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f4.png') }}" alt=""> </div>
                        <h6>Free to use. Developed by hiring professionals.</h6>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f5.png') }}" alt=""> </div>
                        <h6>Recruiter Approved Phrases with Module Notification</h6>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.7s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f6.png') }}" alt=""> </div>
                        <h6>Fast Easy CV and Resume Formatting</h6>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Nulla neque quam, maxim us ut accumsan ut, posuere sit Lorem ipsum adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our features Area End ##### -->
    <!-- ##### Testimonial Area Start ##### -->
    <section class="clients_testimonials_area section-padding-0-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="dream-dots justify-content-center"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                        <h2>Your Success, Our Inspiration</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cotainer-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                    <div class="client_slides owl-carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="icon_wrapper"> <i class="fa fa-quote-right"></i> </div>
                            <!-- Testimonial Image -->
                            <div class="testimonial_image"> <img src="{{ asset('img/test-img/1.jpg') }}" alt=""> </div>
                            <!-- Testimonial Feedback Text -->
                            <div class="testimonial-description">
                                <div class="testimonial_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.</p>
                                </div>
                                <!-- Admin Text -->
                                <div class="admin_text">
                                    <h5>Sunny Khan</h5>
                                    <p>One of our Clients</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="icon_wrapper"> <i class="fa fa-quote-right"></i> </div>
                            <!-- Testimonial Image -->
                            <div class="testimonial_image"> <img src="{{ asset('img/test-img/2.jpg') }}" alt=""> </div>
                            <!-- Testimonial Feedback Text  -->
                            <div class="testimonial-description">
                                <div class="testimonial_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.</p>
                                </div>
                                <!-- Admin Text -->
                                <div class="admin_text">
                                    <h5>Ajoy Das</h5>
                                    <p>One of our Clients</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="icon_wrapper"> <i class="fa fa-quote-right"></i> </div>
                            <!-- Testimonial Image -->
                            <div class="testimonial_image"> <img src="{{ asset('img/test-img/3.jpg') }}" alt=""> </div>
                            <!-- Testimonial Feedback Text  -->
                            <div class="testimonial-description">
                                <div class="testimonial_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.</p>
                                </div>
                                <!-- Admin Text -->
                                <div class="admin_text">
                                    <h5>Jebin Khan</h5>
                                    <p>One of our Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">
        <div class="footer-content-area spec">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s"> 
                                <div class="footer-logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt="logo"> </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY & TOS</h5>
                                <a href="">
                                    <p>Advertiser Agreement</p>
                                </a>
                                <a href="">
                                    <p>Acceptable Use Policy</p>
                                </a>
                                <a href="">
                                    <p>Privacy Policy</p>
                                </a>
                                <a href="">
                                    <p>Technology Privacy</p>
                                </a>
                                <a href="">
                                    <p>Developer Agreement</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href="">
                                    <p>Advertisers</p>
                                </a>
                                <a href="">
                                    <p>Developers</p>
                                </a>
                                <a href="">
                                    <p>Resources</p>
                                </a>
                                <a href="">
                                    <p>Company</p>
                                </a>
                                <a href="">
                                    <p>Connect</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>Mailing Address:xx00 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+999 90932 627</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




@endsection
