@extends('website.layout.app')
@section('content')
    <!--====== BRAND PART START ======-->
    @include('website.partials.brand')
    <!--====== BRAND PART ENDS ======-->

    <!--====== FEATURES PART START ======-->

    <section id="why" class="features_area pt-100 pb-100 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_title text-center pb-10">
                        <h4 class="sub_title">Why Choose Us?</h4>
                        <h3 class="title">We Provide Professional Financial Services For Business</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="features_icon">
                            <i class="lni lni-certificate"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Certified</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum dolor aconsetetur sadipscing  sed diamn numy eirmod </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="features_icon">
                            <i class="lni lni-rocket"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Fast</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum dolor aconsetetur sadipscing  sed diamn numy eirmod </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="features_icon">
                            <i class="lni lni-briefcase"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Experienced</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum dolor aconsetetur sadipscing  sed diamn numy eirmod </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
                        <div class="features_icon">
                            <i class="lni lni-headphone-alt"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Dedicated</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum dolor aconsetetur sadipscing  sed diamn numy eirmod </p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about_image mt-50">
                        <img src="assets/images/about.jpg" alt="about image">
                        <div class="experiance d-flex justify-content-center align-items-center text-center wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="experiance_wrapper text-center">
                                <span>25</span>
                                <p>Years of Experiance</p>
                            </div>
                        </div>
                        <div class="about_shape">
                            <img src="assets/images/shape-1.svg" alt="shape">
                        </div> <!-- about shape -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-5">
                    <div class="about_content mt-45">
                        <div class="section_title">
                            <h4 class="sub_title">About Us</h4>
                            <h3 class="title">Financio is Trusted by 36,817+ Businesses Worldwide.</h3>
                        </div> <!-- section title -->
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, seawd Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt .</p>
                        
                        <div class="about_skills pt-15">
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Finance</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">85</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="85"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">TAX</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">75</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="75"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Investment</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">90</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="90"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Growth</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">65</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="65"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                        </div> <!-- about skill -->
                    </div>  <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services_area pt-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Services</h4>
                        <h3 class="title">We Offer Best Financial Consultancy Services in Affordable Cost</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-user"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Business Advising</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-write"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Financial Planning</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-coin"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Savings & Investments</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-invest-monitor"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">TAX Consultancy</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-investment"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Risk Management</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-graph"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Trade & Stock</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div> 
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== CASE PART START ======-->

    <section id="case" class="case_area pt-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Case Studies</h4>
                        <h3 class="title">Recent Business<br> Case Studies</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single_case mt-30">
                        <div class="case_image">
                            <img src="assets/images/case-1.jpg" alt="case">
                        </div>
                        <div class="case_content">
                            <h5 class="case_title"><a href="#">New Corporate Responsibility Metrics</a></h5>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum Lorem ipsum dolor aconsetet dorem  tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt empor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                            <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single case -->
                </div>
                <div class="col-lg-4">
                    <div class="single_case mt-30">
                        <div class="case_image">
                            <img src="assets/images/case-2.jpg" alt="case">
                        </div>
                        <div class="case_content">
                            <h5 class="case_title"><a href="#">Searching for a Search Fund Structure</a></h5>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum Lorem ipsum dolor aconsetet dorem  tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt empor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                            <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single case -->
                </div>
                <div class="col-lg-4">
                    <div class="single_case mt-30">
                        <div class="case_image">
                            <img src="assets/images/case-3.jpg" alt="case">
                        </div>
                        <div class="case_content">
                            <h5 class="case_title"><a href="#">Shake Shack IPO</a></h5>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum Lorem ipsum dolor aconsetet dorem  tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt empor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                            <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single case -->
                </div>
            </div> <!-- row -->
        </div> <!-- container fluid -->
    </section>

    <!--====== CASE PART ENDS ======-->

    <!--====== GROWTH PART START ======-->

    <section id="growth" class="growth_area pt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="growth_content mt-45">
                        <div class="section_title ">
                            <h4 class="sub_title">Grow Your Business</h4>
                            <h3 class="title">Committed to Grow Your Business Like Never Before</h3>
                        </div> <!-- section title -->
                        
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, seawd Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p>
                        
                        <h5 class="growth_title">Real-Time Analytics</h5>
                        
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, seawd Stet clita kasd gubergren.</p>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6">
                    <div class="growth_image mt-50">
                        <img class="image" src="assets/images/screenshot.jpg" alt="screenshot">
                    </div> <!-- growth image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="growth_shape">
            <img class="shape" src="assets/images/shape-2.svg" alt="shape">
        </div>
    </section>

    <!--====== GROWTH PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team_area pt-95 pb-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Team</h4>
                        <h3 class="title">Meet Our <br>Committed Team Members</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="team_image">
                            <img src="assets/images/team-1.jpg" alt="team">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Robert John</a></h4>
                            <p>Co-Founder and CEO</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="team_image">
                            <img src="assets/images/team-2.jpg" alt="team">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Sophia Smiarthds</a></h4>
                            <p>Financial Expert</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="team_image">
                            <img src="assets/images/team-3.jpg" alt="team">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">John Doe</a></h4>
                            <p>Investment Expert</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
                        <div class="team_image">
                            <img src="assets/images/team-4.jpg" alt="team">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Chris Dave</a></h4>
                            <p>Business Advisor</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial_area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Testimonials</h4>
                        <h3 class="title">What Our Clients<br> Says About Financio</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial_active">
                <div class="col-lg-6">
                    <div class="single_testimonial">
                        <div class="testimonial_author">
                            <img src="assets/images/author-1.jpg" alt="author">
                        </div>
                        <div class="testimonial_content">
                            <i class="lni lni-quotation"></i>
                            <div class="testimonial_name">
                                <h5 class="name">Micheal Jordan</h5>
                                <span class="sub_title">Entrepreneur</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitsed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata .</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single_testimonial">
                        <div class="testimonial_author">
                            <img src="assets/images/author-2.jpg" alt="author">
                        </div>
                        <div class="testimonial_content">
                            <i class="lni lni-quotation"></i>
                            <div class="testimonial_name">
                                <h5 class="name">Sarah Doe</h5>
                                <span class="sub_title">Startup Founder</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitsed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata .</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single_testimonial">
                        <div class="testimonial_author">
                            <img src="assets/images/author-1.jpg" alt="author">
                        </div>
                        <div class="testimonial_content">
                            <i class="lni lni-quotation"></i>
                            <div class="testimonial_name">
                                <h5 class="name">Rob Hope</h5>
                                <span class="sub_title">Creative Designer</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitsed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata .</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BLAG PART START ======-->

    <section id="blog" class="blog_area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Blog</h4>
                        <h3 class="title">Recently Published<br> Blog Posts</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="blog_title"><a href="#">10 Tips to Grow Your Business</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum Lorem ipsum doaconsetet dorem empor inviduntsadipscing elitr, sed diamn numy eirmo tempor invidunt empor inviduntsadipscing elitr.</p>
                            <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>  <!-- single_blog -->
                </div>
                <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="blog_title"><a href="#">How to Make Your Strategy Work</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum Lorem ipsum doaconsetet dorem empor inviduntsadipscing elitr, sed diamn numy eirmo tempor invidunt empor inviduntsadipscing elitr.</p>
                            <a class="more" href="#">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>  <!-- single_blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection