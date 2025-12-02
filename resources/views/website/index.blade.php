@extends('website.layout.app')
@section('content')
    <!--====== BRAND PART START ======-->
    @include('website.partials.brand')
    <!--====== BRAND PART ENDS ======-->

    <!--====== FEATURES PART START ======-->
    @include('website.partials.why')
    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    @include('website.partials.about')
    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    @include('website.partials.services')
    <!--====== SERVICES PART ENDS ======-->

    <!--====== CASE PART START ======-->
    @include('website.partials.case')
    <!--====== CASE PART ENDS ======-->

    <!--====== GROWTH PART START ======-->
    @include('website.partials.growth')
    <!--====== GROWTH PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    @include('website.partials.team')
    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    @include('website.partials.testimonial')
    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BLOG PART START ======-->
    @include('website.partials.blog')
    <!--====== BLOG PART ENDS ======-->
@endsection