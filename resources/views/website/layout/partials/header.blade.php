<header class="header_area">        
    <div class="header_navbar custom-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg ">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#case">Cases</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#growth">Growth</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                        
                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" data-toggle="modal" data-target="#ScheduleMeeting">Schedule a Meeting</a>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> 
        </div>
    </div> 
    <div id="home" class="header_slider">
        <div class="video-section">
            <div class="video-overlay"></div>
            <video autoplay muted loop playsinline class="video-bg">
                <source src="{{ asset('assets/video/slider-2.mp4') }}" type="video/mp4">
            </video>
            <div class="slider-active video-content">
                <div class="single_slider bg_cover d-flex align-items-center ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider_content">
                                    <h1 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">FastForce</h1>
                                    <h2 class="color-white slider-h2" data-animation="fadeInUp" data-delay="0.4s">Your One-Window Virtual Assistant & Full-Stack Support Platform.</h2>
                                    <p data-animation="fadeInUp" data-delay="0.6s">Hire one virtual assistant. Get a complete development and operations team — without adding any in-house staff.</p>
                                    <a class="main-btn" href="#services" data-animation="fadeInUp" data-delay="1s">Schedule an appointment</a>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="single_slider bg_cover d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider_content">
                                    <h1 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">FastForce</h1>
                                    <h2 class="color-white slider-h2" data-animation="fadeInUp" data-delay="0.4s">Boost Your Business Productivity Instantly.</h2>
                                    <p data-animation="fadeInUp" data-delay="0.6s">Scale operations with dedicated, office-based virtual assistants supported by a full-stack team.</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1s">Schedule an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider bg_cover d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider_content">
                                    <h1 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">FastForce</h1>
                                    <h2 class="color-white slider-h2" data-animation="fadeInUp" data-delay="0.4s">One Virtual Assistant. Unlimited Backend Support.</h2>
                                    <p data-animation="fadeInUp" data-delay="0.6s">Every hire includes complimentary development, automation, and administrative support — at no extra cost.</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1s">Schedule an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider bg_cover d-flex align-items-center" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider_content">
                                    <h1 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">FastForce</h1>
                                    <h2 class="color-white slider-h2" data-animation="fadeInUp" data-delay="0.4s">Your Remote Workforce, Managed from Our Fully-Functional Offices.</h2>
                                    <p data-animation="fadeInUp" data-delay="0.6s">Our VAs work 8 hours a day on secure systems — not from home, not freelancers, but trained professionals.</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1s">Schedule an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</header>