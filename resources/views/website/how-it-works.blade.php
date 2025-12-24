@extends('website.layout.app')
@section('title')
<title>FastForce — How it works?</title>
@endsection
@section('content')
<section class="website-bg">
    <div class="content mb-5">
        <div class="how-hero-section">
            <div class="how-hero-content">
                <h1 class="color-white">How it works ?</h1>
                <p class="color-white">Your description text goes here.</p>
                <a href="#video-container" class="play-icon">
                    <img src="{{ asset('assets/images/play-button.png') }}" alt="" class="wd-65">
                </a>
            </div>
        </div>
    </div>
    <div class="video-section mb-5" id="video-container">
        <div class="video-container" >
            <iframe
                src="https://www.youtube.com/embed/YOUR_VIDEO_ID"
                title="YouTube video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>
@endsection