@extends('layouts.app')

@section('content')

    <div class="breadcumb-area clearfix">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">About us</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ABOUT US</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-100-0 clearfix">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">
                        <div class="dream-dots">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4 class="bold">We Deliver The Best</h4>
                        <div class="list-wrap align-items-center">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Proven CV Templates to Improve the Chance of Being Hired</div>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Creative and Clean Templates Design</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Clean, Easy and Ingenious Template Design</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Use is free. developed by employing experts</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Quick and Simple Resume and CV Formatting</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Phrases Used By Recruiters</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp mt-s" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <img src="{{ asset('img/core-img/cv1.webp') }}" class="center-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
    

    <section class="demo-video feat section-padding-100 bub-left">
        <div class="container">
            
            <div class="row align-items-center">
                
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="{{ asset('img/icons/d1.png') }}" alt="">
                            </div>
                            <h3><a href="#">Easy Online Resume Builder</a></h3>
                            <div class="text">With our simple web builder, you can easily create a professional resume.</div>
                            
                        </div>
                    </div>
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="{{ asset('img/icons/d2.png') }}" alt="">
                            </div>
                            <h3><a href="#">Step by Step Expert Tips</a></h3>
                            <div class="text">With inxgo detailed online resume creator and step-by-step expert suggestions, you can maximise your career potential.</div>
                            
                        </div>
                    </div>
                    <div class="services-block-four" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="{{ asset('img/icons/d3.png') }}" alt="">
                            </div>
                            <h3><a href="#">Recruiter Approved Phrases</a></h3>
                            <div class="text">With our list of resume phrases that the industry has authorised, you'll dazzle hiring managers.</div>
                            
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="who-we-contant mt-s">
                        <div class="dream-dots">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4>Why Choose Our Platform?</h4>
                       <p>Why should you select our platform when creating your resume? We provide a wide range of benefits. You may easily construct a standout professional resume using our user-friendly design.
</p>
                        <p> Our website offers editable templates, professional advice, and immediate feedback to make sure your resume is recruiter-ready. You can rely on us for a smooth and effective job application procedure.</p>
                        <a class="btn dream-btn mt-30" href="templates.html">lets build your cv</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Area start ##### -->
    <section class="container section-padding-100-0">
        <div class="subscribe">
            <div class="row align-items-center relative">
                <img src="{{ asset('img/core-img/custom.webp') }}" alt="" class="custom">
                <div class="col-lg-5 col-lg-offset-3 col-md-9 col-xs-12">
                    <h2 class="bold mb-0">Do you Need a Complete Custom CV Template?</h2>
                </div>
                <div class="col-lg-3 col-lg-offset-1 col-md-3 col-sm-12 text-center">
                    <a href="contact-us.html" class="button mt-s">Send a Request</a>
                </div>
                          
            </div>
        </div>  
    </section>
    <!-- ##### Area End ##### -->


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
                                    <a href="#"><img src="{{ asset('img/core-img/inxgo-logo.png') }}" alt="inxgo-logo"> </a>
                                </div>
                                <p>inxgo is a market leader in offering professional resume building services, enabling job searchers, and open doors to new career paths.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                     <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>Support</h5>
                                <a href="">
                                    <p>Company</p>
                                </a>
                                <a href="">
                                    <p>All Resumes</p>
                                </a>
                                <a href="">
                                    <p>Privacy Policy</p>
                                </a>
                                <a href="">
                                    <p>FAQs</p>
                                </a>
                                <a href="">
                                    <p>Contact</p>
                                </a>
                            </div>
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
                   
                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>626 RXR Plaza, Uniondale, NY 11556</p>
                                <p>New York</p>
                                <!--<p>1 (516) 522-2899</p>-->
                                <p>support@inxgo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
