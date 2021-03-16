@extends('layouts.layout')
@section('title', trans('main.title'))
@section('styles')
    @include('main.block.css')
@endsection
@section('content')
    {{--<!-- CONTENT START -->--}}
    <div class="page-content">
        {{--<!-- Slider -->--}}
        @livewire('dashboard.main-s-lider-livewire')
        {{--<!-- Slider END -->--}}
        {{--<!-- ABOUT COMPANY SECTION START -->--}}
        @include('main.block.about')
        {{--<!-- ABOUT COMPANY SECTION END -->--}}
        {{--<!-- SERVICES START  -->--}}
        @livewire('dashboard.services-livewire')
        {{--<!-- SERVICES CONTENT END -->--}}
        {{--<!-- SECTION CONTENT START -->--}}
        @include('main.block.faq')
        {{--<!-- SECTION CONTENT  END -->--}}
        {{--<!-- LATEST PROJECT SECTION START -->--}}
        @livewire('dashboard.latest-image-gallery-livewire')
        {{--<!-- LATEST PROJECT SECTION END -->--}}
        {{--<!-- COMPANY DETAIL SECTION START -->--}}
        @livewire('dashboard.counter-livewire')
        {{--<!-- COMPANY DETAIL SECTION End -->--}}
        {{--<!-- WHY CHOOSE US SECTION START  -->--}}
        @include('main.block.whyChooseUs')
        {{--<!-- WHY CHOOSE US SECTION END  -->--}}
        {{--<!-- TESTIMONIAL SECTION START -->--}}
        @livewire('dashboard.opinion-livewire')
        {{--<!-- TESTIMONIAL SECTION START -->--}}
{{--        @include('main.block.our-client')--}}
        {{--<!-- OUR CLIENT SLIDER START -->--}}
        @include('main.block.contactFooter')
        {{--<!-- OUR CLIENT SLIDER END -->--}}
    </div>
    {{--<!-- CONTENT END -->--}}
@endsection
@section('js')
    @include('main.block.js')
@endsection



