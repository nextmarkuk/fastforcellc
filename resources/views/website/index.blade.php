@extends('website.layout.app')
@section('title')
<title>FastForce — Your One-Window Virtual Assistant & Full-Stack Support Platform.</title>
@endsection
@section('content')

    <!--====== FEATURES PART START ======-->
    @include('website.partials.why')
    <!--====== FEATURES PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    @include('website.partials.services')
    <!--====== SERVICES PART ENDS ======-->
    
@endsection
@section('js')
     <script>
        const box = document.getElementById('revealBox');
        const cover = box.querySelector('.cover');
        
        function checkScroll() {
            const boxRect = box.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const boxHeight = box.offsetHeight;
            
            // Check if div is in viewport
            if (boxRect.top < windowHeight && boxRect.bottom > 0) {
                const scrolled = windowHeight / 2 - boxRect.top;
                const scrollRange = boxHeight;
                let progress = (scrolled / scrollRange) * 150;
                progress = Math.max(0, Math.min(100, progress));
                
                cover.style.transform = `translateY(-${progress}%)`;
            } else if (boxRect.bottom <= 0) {
                cover.style.transform = 'translateY(-100%)';
            } else {
                cover.style.transform = 'translateY(0)';
            }
        }
        
        window.addEventListener('scroll', checkScroll, { passive: true });
        checkScroll();
    </script>
@endsection