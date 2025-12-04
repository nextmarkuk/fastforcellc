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

    <!--====== TESTIMONIAL PART START ======-->
    @include('website.partials.testimonial')
    <!--====== TESTIMONIAL PART ENDS ======-->
    
@endsection