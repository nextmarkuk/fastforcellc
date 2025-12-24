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
                                <li class="nav-item @if(request()->routeIs('website.home')) active @endif">
                                    <a class="page-scroll" href="{{ route('website.home') }}">Home</a>
                                </li>
                                <li class="nav-item @if(request()->routeIs('website.services')) active @endif">
                                    <a class="page-scroll" href="{{ route('website.services') }}">Services</a>
                                </li>
                                <li class="nav-item @if(request()->routeIs('website.how-it-works')) active @endif">
                                    <a class="page-scroll" href="{{ route('website.how-it-works') }}">How it works?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" data-toggle="modal" data-target="#ScheduleMeeting">Schedule a Meeting</a>
                        </div>
                    </nav>
                </div>
            </div> 
        </div>
    </div> 
    @if(request()->routeIs('website.home'))
        @include('website.layout.partials.home-slider')
    @endif
    @if(request()->routeIs('website.services'))
        @include('website.layout.partials.services-slider')
    @endif
</header>