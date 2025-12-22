<footer id="footer" class="footer_area pb-50 footer-bg">
    <div class="container">
        <div class="footer_wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                    <div class="footer_about mt-50">
                        <a href="#" class="text-center">
                            <img class="footer-logo" src="{{ asset('assets/images/logo.png') }}" alt="Fast Force">
                        </a>
                        <ul class="social">
                            <li><a href="{{ config('website.social.facebook') }}" class="theme-white"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="{{ config('website.social.twitter') }}" class="theme-white"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="{{ config('website.social.instagram') }}" class="theme-white"><i class="lni lni-instagram-original"></i></a></li>
                            <li><a href="{{ config('website.social.linkedin') }}" class="theme-white"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-5 col-md-12 order-md-3 order-lg-2">
                    <div class="footer_link_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-45">
                            <h4 class="footer_title theme-white">Quick Link</h4>
                            <ul class="link">
                                <li><a href="{{ route('website.home') }}" class="theme-white">Home</a></li>
                                <li><a href="{{ route('website.services') }}" class="theme-white">Service</a></li>
                                <li><a href="#" class="theme-white">Team</a></li>
                                <li><a href="#" class="theme-white">Blog</a></li>
                            </ul>
                        </div> <!-- footer link -->
                        <div class="footer_link mt-45">
                            <h4 class="footer_title theme-white">Terms</h4>
                            <ul class="link">
                                <li><a href="#" class="theme-white">Community</a></li>
                                <li><a href="#" class="theme-white">Our Advisors</a></li>
                                <li><a href="#" class="theme-white">Jobs</a></li>
                                <li><a href="#" class="theme-white">Terms</a></li>
                                <li><a href="#" class="theme-white">Policy</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div> <!-- footer link wrapper -->
                </div>
                <div class="col-lg-4 col-md-6 order-md-2 order-lg-3">
                    <div class="footer_form mt-45">
                        <h4 class="footer_title theme-white">Get in Touch</h4>
                        <form id="contact-form" action="https://preview.uideck.com/items/financio/assets/contact.php">
                            <div class="single_form">
                                <input type="text" placeholder="Name" name="Name">
                            </div> <!-- single form -->
                            <div class="single_form">
                                <input type="text" placeholder="Email" name="email">
                            </div> <!-- single form -->
                            <div class="single_form">
                                <textarea placeholder="Message" name="message"></textarea>
                            </div> <!-- single form -->
                            <p class="form-message"></p>
                            <div class="single_form">
                                <button class="main-btn">Send</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- footer form -->
                </div>
            </div> <!-- row -->
        </div> 
    </div> <!-- container -->
</footer>