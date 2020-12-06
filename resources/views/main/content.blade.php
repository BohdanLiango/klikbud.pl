@extends('layouts.layout')
@section('title', trans('main.title'))
@section('styles')
    @include('main.block.css')
@endsection
@section('content')
    {{--<!-- CONTENT START -->--}}
    <div class="page-content">
        <!-- Slider -->
        @include('main.block.mainSlider2')
        <!-- Slider END -->
        <!-- ABOUT COMPANY SECTION START -->
        @include('main.block.about')
        <!-- ABOUT COMPANY SECTION END -->
        <!-- SERVICES START  -->
        @include('main.block.services')
        <!-- SERVICES CONTENT END -->
        <!-- SECTION CONTENT START -->
        @include('main.block.faq')
        <!-- SECTION CONTENT  END -->
        <!-- LATEST PROJECT SECTION START -->
        @include('main.block.latestProject')
        <!-- LATEST PROJECT SECTION END -->
        <!-- COMPANY DETAIL SECTION START -->
        @include('main.block.companyDetail')
        <!-- COMPANY DETAIL SECTION End -->
        <!-- WHY CHOOSE US SECTION START  -->
        @include('main.block.whyChooseUs')
        <!-- WHY CHOOSE US SECTION END  -->
        <!-- TESTIMONIAL SECTION START -->
        @include('main.block.testimonials')
        <!-- TESTIMONIAL SECTION START -->
        <!-- OUR CLIENT SLIDER START -->
        @include('main.block.contactFooter')
        <!-- OUR CLIENT SLIDER END -->
    </div>
    {{--<!-- CONTENT END -->--}}
@endsection
@section('js')
    @include('main.block.js')
@endsection



