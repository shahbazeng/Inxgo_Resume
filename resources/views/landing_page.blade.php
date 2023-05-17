@extends('layouts.app')

@section('content')
{{-- <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div> --}}

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
                                    <img src="{{ asset('img/svg/img-dollar.svg') }}" width="24" height="24" alt="inxgo cv resume builder">
                                </span> <span class="integration-text">Build, download, or share Your CV | Resume 100 % Free!</span> </div>
                        </div>
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s">Online Resume Builder With Creative Templates.</h1>
                        <p class="lead">Use professional field-tested resume templates that follow the exact <br> ‘resume rules’ employers look for. Easy to use and done within <br> minutes - try now for free! </p>
            
                        <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s"> <a href="{{ route('home')}}" class="btn dream-btn green-btn mr-3">Get started for free </a>  <a href="{{ route('home')}}" class="btn dream-btn green-btn" style="background: #212529;border:2px solid #212529;"> No I like to waste money and pay <b style="font-size:17px;">😆</b></a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="banner-box"> <img src="{{ asset('img/core-img/banner2.png') }}" alt="inxgo cv resume builder"> </div>
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
                            <div class="text">With our simple web builder, you can easily create a professional resume.</div>
                        </div>
                    </div>
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-img-box"> <img src="{{ asset('img/icons/d2.png') }}" alt=""> </div>
                            <h3><a href="#">Step by Step Expert Tips</a></h3>
                            <div class="text">With inxgo detailed online resume creator and step-by-step expert suggestions, you can maximise your career potential.</div>
                        </div>
                    </div>
                    <div class="services-block-four" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="icon-img-box"> <img src="{{ asset('img/icons/d3.png') }}" alt=""> </div>
                            <h3><a href="#">Recruiter Approved Phrases</a></h3>
                            <div class="text">With our list of resume phrases that the industry has authorised, you'll dazzle hiring managers.</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="who-we-contant mt-s">
                        <div class="dream-dots"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                        <h4>Why Choose Our Platform?</h4>
                        <p>Why should you select our platform when creating your resume? We provide a wide range of benefits. You may easily construct a standout professional resume using our user-friendly design.
</p>
                        <p> Our website offers editable templates, professional advice, and immediate feedback to make sure your resume is recruiter-ready. You can rely on us for a smooth and effective job application procedure.</p> <a class="btn dream-btn mt-30" href="templates.html">lets build your cv</a> </div>
                </div>
            </div>
        </div>
    </section>
      <section class="demo section-padding-100 ring-bg">
        <div class="container">
            <div class="section-heading text-center">
                <div class="dream-dots justify-content-center"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                <h2 class="bold">Our Creative Templates</h2>
            <p>With our extensive selection of fashionable and expert templates for a standout resume, unleash your creativity.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">

                   
                        <a href="{{ route('resumes') }}"><img src="{{ asset('img/demos/demo-1.png') }}" alt="demo" class="img-responsive"></a>
                     <!--   <div class="preview-btn-wrapper text-center"> <a href="template-preview.html" class="preview-demo">See template <i class="fa fa-long-arrow-right"></i></a> <a href="template-edit.html" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a> </div> -->
                   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    
                        <a href="{{ route('resumes') }}"><img src="{{ asset('img/demos/demo-2.png') }}" alt="demo" class="img-responsive"></a>
                       <!--   <div class="preview-btn-wrapper text-center"> <a href="template-preview.html" class="preview-demo">See template <i class="fa fa-long-arrow-right"></i></a> <a href="template-edit.html" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a> </div> -->
                    </div>
               
                <div class="col-lg-4 col-md-6 col-sm-12">
                    
                        <a href="{{ route('resumes') }}"><img src="{{ asset('img/demos/demo-3.png') }}" alt="demo" class="img-responsive"></a>
                        <!--   <div class="preview-btn-wrapper text-center"> <a href="template-preview.html" class="preview-demo">See template <i class="fa fa-long-arrow-right"></i></a> <a href="template-edit.html" class="preview-demo v2">Use template <i class="fa fa-long-arrow-right"></i></a> </div> --> 

                 
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
                                        <div class="foot-c-info">Proven CV Templates to Improve the Chance of Being Hired</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Creative and Clean Templates Design</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Clean, Easy and Ingenious Template Design</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                <div class="foot-c-info">Use is free. developed by employing experts</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Quick and Simple Resume and CV Formatting</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item"> <img src="{{ asset('img/icons/check.png') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">Phrases Used By Recruiters</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp mt-s" data-wow-delay="0.3s"> <img src="{{ asset('img/core-img/cv.png') }}" class="center-block" alt="inxgo cv resume builder templates"> </div>
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
 
  
    <!-- ##### Our features Area Start ##### -->
    <section class="our_services_area section-padding-100-70" id="services">
        <div class="container">
            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Our Main Features</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Learn more about our key features, which include scalable templates, real-time editing, professional advice, and seamless integration.</p>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f1.png') }}" alt=""> </div>
                        <h6>Proven CV Templates to increase Hiring Chance</h6>
                        <p>Utilise our tried-and-true CV templates, which have a successful track record in the job market, to increase your chances of being recruited.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f2.png') }}" alt=""> </div>
                        <h6>Creative, Modern and Clean Templates Design</h6>
                        <p>inxgo have outstanding collection of templates, you may experience the ideal fusion of originality, contemporary aesthetics, and clean style.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f3.png') }}" alt=""> </div>
                        <h6>Easy and Intuitive Online CV and Resume Builder </h6>
                        <p>With our user-friendly and simple online builder, you can quickly and easily generate your CV and resume, streamlining the job application process.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f4.png') }}" alt=""> </div>
                        <h6>Free to use. Developed by hiring professionals.</h6>
                        <p>Utilise our tool, which is free to use and was built by recruiting experts, to make sure your resume complies with requirements for success. 
</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f5.png') }}" alt=""> </div>
                        <h6>Recruiter Approved Phrases with Module Notification</h6>
                        <p>Enhance your CV with recruiter-approved words and sign up for module notifications to create an application that stands out to employers.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.7s">
                        <!-- Icon -->
                        <div class="service_icon"> <img src="{{ asset('img/icons/f6.png') }}" alt=""> </div>
                        <h6>Fast Easy CV and Resume Formatting</h6>
                        <p>Utilise our quick and simple tools to streamline the formatting of your CV and resume, saving you time and assuring a professional appearance. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our features Area End ##### -->
    <!-- ##### Testimonial Area Start ##### -->
 <!--<section class="clients_testimonials_area section-padding-0-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="dream-dots justify-content-center"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                        <h2>Your Success, Our Inspiration</h2>
                        <p>Your success serves as an example for us, and it motivates us to offer the best tools and resources for your professional progress.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cotainer-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                    <div class="client_slides owl-carousel">
                        
                        <div class="single-testimonial text-center">
                            <div class="icon_wrapper"> <i class="fa fa-quote-right"></i> </div>
                         
                            <div class="testimonial_image"> <img src="{{ asset('img/test-img/1.jpg') }}" alt=""> </div>
                           
                            <div class="testimonial-description">
                                <div class="testimonial_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.</p>
                                </div>
                            
                                <div class="admin_text">
                                    <h5>Sunny Khan</h5>
                                    <p>One of our Clients</p>
                                </div>
                            </div>
                        </div>
                   
                        <div class="single-testimonial text-center">
                            <div class="icon_wrapper"> <i class="fa fa-quote-right"></i> </div>
                         
                            <div class="testimonial_image"> <img src="{{ asset('img/test-img/2.jpg') }}" alt=""> </div>
                          
                            <div class="testimonial-description">
                                <div class="testimonial_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.</p>
                                </div>
                            
                                <div class="admin_text">
                                    <h5>Ajoy Das</h5>
                                    <p>One of our Clients</p>
                                </div>
                            </div>
                        </div>
             
                        <div class="single-testimonial text-center">
                            <div class="icon_wrapper"> <i class="fa fa-quote-right"></i> </div>
              
                            <div class="testimonial_image"> <img src="{{ asset('img/test-img/3.jpg') }}" alt=""> </div>
                        
                            <div class="testimonial-description">
                                <div class="testimonial_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nostrum adipisci porro quisquam. Rem, earum, tenetur? Architecto et, earum repudiandae.</p>
                                </div>
                          
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
    </section>-->
    <!--<section class="clients_testimonials_area section-padding-0-0">
    <div class="jp_downlord_main_wrapper">
        <div class="jp_downlord_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="jp_down_mob_img_wrapper"> <img src="{{ asset('img/mobail.png') }}" alt="mobail_img"> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ss_download_wrapper_details">
                        <h1><span>Download</span><br>inxgo App Now!</h1>
                        <p>Download the inxgo app and choose the best Suppliers for your problem with just two simple steps. You can also sell service near you and earn extra income whenever you want.</p>
                <a href="#" class="ss_appstore"><span><i class="fa fa-apple" aria-hidden="true"></i></span> App Store</a> 
                <a href="#" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a> 
            </div>
                </div>
                
            </div>
        </div>
    </div>
</section>-->
    <!-- ##### Testimonial Area End ##### -->
    <!--Section: FAQ-->
 <section class="our_services_area section-padding-100-70" id="services">
        <div class="container"> 
  <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Frequently Ask Questions</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Learn the answers to frequently asked questions about Inxgo's free resume builder, including questions regarding features, customization, security, support, and other topics.</p>
            </div>

  <div class="row">
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"> Is the Inxgo resume builder truly cost-free?</h6>
      <p>
        <strong><u>Absolutely, yes!

</u></strong>  Utilising Inxgo's resume builder is completely free. Your professional resume is free to create, update, and download.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">What technical knowledge is required to utilise Inxgo's platform?
</h6>
      <p>
        <strong><u>In no way!
</u></strong> The platform from Inxgo is made to be intuitive and user-friendly. Technical expertise is not necessary. Simply adhere to the step-by-step guidelines to quickly generate your CV.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">Can I alter the style and format of my resume?

      </h6>
      <p>
        Yes, you can customise a variety of Inxgo templates to fit your needs. The layout, colours, typeface, and style may all be readily customised to produce a resume that is distinctive and appealing.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">Are the templates and content endorsed by recruiters? 

      </h6>
      <p>
         <strong><u>Absolutely !

</u></strong> inxgo's Templates and content on are carefully chosen by hiring experts. Your chances of being seen by employers are increased by the fact that they are created to adhere to industry standards and have the endorsement of recruiters.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">Can I get my resume in other file formats to download?

      </h6>
      <p>Yes, you may download your resume from Inxgo in a variety of common file formats, including PDF, DOCX, and TXT. Pick a resume format that works for you so you can quickly share it with potential employers.
</p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">Is the platform used by Inxgo secure for my personal information?
</h6>
      <p>
        inxgo does take data security and privacy seriously. The security and privacy of your data are guaranteed by the encryption and protection of your personal information.
      </p>
    </div>
  </div>
</div>
</section>
<!--Section: FAQ-->
    <section class="clients_testimonials_area section-padding-0-0">
      

                  <div class="row g-2 height d-flex justify-content-center align-items-center">
 <div class="col-md-6">
                      

                      <div class="text-center">

                        <img src="{{ asset('img/mobail.png') }}" alt="inxgo app and free resume builder" width="400">
                        
                      </div>
                    </div>

                    <div class="col-md-6">

                      <div class="ss_download_wrapper_details">

                    
                        <h1><span>Download</span><br>inxgo App Now!</h1>
                        <p style="color:white;">Download the inxgo app and choose the best Suppliers for your problem with just two simple steps. You can also sell service near you and earn extra income whenever you want.</p>

                        <div class="buttons justify-content-center mt-3">

                          <button class="btn btn-dark app-button mb-3"><i class="fa fa-apple fa-2x"></i><span class="text-uppercase ml-2">Apple store</span></button>
                          <button class="btn btn-dark app-button"><i class="fa fa-play fa-2x"></i><span class="text-uppercase ml-2">Google store</span></button>
                          
                        </div>
                        
                      </div>
                      

                    </div>

                   

                </div>
            </section>
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
                                    <a href="#"><img src="img/core-img/inxgo logo.png" alt="logo"> </a>
                                </div>
                                <p>inxgo is a market leader in offering resume building services that are completely free, enabling job searchers to easily construct professional resumes and open doors to new career chances.</p>
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
                                <p>Newyork</p>
                                <p>1 (516) 522-2899</p>
                                <p>support@inxgo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




@endsection
