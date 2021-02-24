@extends('layouts.layout')
@section('title', trans('contact.page'))
@section('styles')
    @include('contact.block.css')
@endsection
@section('content')
    {{--<!-- CONTENT START -->--}}
    <div class="page-content  bg-white">
        {{--<!-- INNER PAGE BANNER -->--}}
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('images/static/contact/contact.jpg') }});">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">{{ trans('contact.page') }}</h1>
                </div>
            </div>
        </div>
        {{--<!-- INNER PAGE BANNER END -->--}}
        {{--<!-- BREADCRUMB ROW -->--}}
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('main') }}"><i class="fa fa-home"></i> {{ trans('contact.home') }}</a></li>
                    <li>{{ trans('contact.page') }}</li>
                </ul>
            </div>
        </div>
        {{--<!-- BREADCRUMB ROW END -->--}}
        {{--<!-- SECTION CONTENTG START -->--}}
        <div class="section-full p-t80 p-b50">
            <div class="container">
                {{--<!-- CONTACT DETAIL BLOCK -->--}}
                <div class="section-content m-b30">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-smartphone-1"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ trans('contact.phone') }}</h5>
                                    <p class="text-gray-dark">{{ trans('contact.phoneOne') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ trans('contact.email') }}</h5>
                                    <p class="text-gray-dark">{{ trans('contact.emailOne') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ trans('contact.address') }}</h5>
                                    <p class="text-gray-dark">{{ trans('contact.addressAdditional') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<!-- GOOGLE MAP & CONTACT FORM -->--}}
                <div class="section-content m-b50">
                    <div class="row">
                        {{--<!-- LOCATION BLOCK-->--}}
                        <div class="wt-box col-md-6">
                            <h4 class="text-uppercase">{{ trans('contact.location') }}</h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                            <div class="gmap-outline m-b30">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.535615292279!2d19.915472315626204!3d50.05753002347946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b9fce9719d3%3A0xe9ff1345b46f4dc4!2sJ%C3%B3zefa%20Ignacego%20Kraszewskiego%2036%2C%2033-332%20Krak%C3%B3w!5e0!3m2!1spl!2spl!4v1577562055697!5m2!1spl!2spl" width="550" height="310" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        {{--<!-- CONTACT FORM-->--}}
                        @livewire('contact.contact-form-livewire')
                    </div>
                </div>
            </div>
        </div>
        {{--<!-- SECTION CONTENT END -->--}}
    </div>
@endsection
@section('js')
    @include('contact.block.js')
@endsection



