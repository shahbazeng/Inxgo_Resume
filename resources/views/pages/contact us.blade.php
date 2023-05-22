@extends('layouts.app')

@section('content')

<div class="breadcumb-area clearfix">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Contact Us</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="section-padding-100 contact_us_area" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading text-center">
					<!-- Dream Dots -->
					<div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> <span></span><span></span><span></span><span></span><span></span><span></span><span></span> </div>
					<h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Contact Us</h2>
					<p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">If you've any issue then contact us!</p>
				</div>
			</div>
		</div>
		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<div class="contact_form">
					<form action="#" method="post" id="main_contact_form" novalidate="">
						<div class="row">
							<div class="col-12">
								<div id="success_fail_info"></div>
							</div>
							<div class="col-12 col-md-6">
								<div class="group wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
									<input type="text" name="name" id="name" required="" fdprocessedid="2kc96"> <span class="highlight"></span> <span class="bar"></span>
									<label>Name</label>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="group wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
									<input type="text" name="email" id="email" required="" fdprocessedid="9iyo9"> <span class="highlight"></span> <span class="bar"></span>
									<label>Email</label>
								</div>
							</div>
							<div class="col-12">
								<div class="group wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
									<input type="text" name="subject" id="subject" required="" fdprocessedid="mnfg69"> <span class="highlight"></span> <span class="bar"></span>
									<label>Subject</label>
								</div>
							</div>
							<div class="col-12">
								<div class="group wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
									<textarea name="message" id="message" required=""></textarea> <span class="highlight"></span> <span class="bar"></span>
									<label>Message</label>
								</div>
							</div>
							<div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
								<button type="submit" class="btn dream-btn" fdprocessedid="vqbtve">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>