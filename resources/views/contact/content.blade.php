@extends('welcome.layouts.layout')
@section('title', __('contact.page'))
@section('styles')
    @include('home.contact.block.css')
    <script src="https://www.google.com/recaptcha/api.js?render=6LcuF_8UAAAAAHGCzGtj_cYX4w9kaK7PKA4Faxf7"></script>
@endsection
@section('content')
    {{--<!-- CONTENT START -->--}}
    <div class="page-content  bg-white">
        {{--<!-- INNER PAGE BANNER -->--}}
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('welcome/images/static/contact/contact.jpg') }});">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">{{ __('contact.page') }}</h1>
                </div>
            </div>
        </div>
        {{--<!-- INNER PAGE BANNER END -->--}}
        {{--<!-- BREADCRUMB ROW -->--}}
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('welcome.home') }}"><i class="fa fa-home"></i> {{ __('contact.home') }}</a></li>
                    <li>{{ __('contact.page') }}</li>
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
                                    <h5 class="text-white">{{ __('contact.phone') }}</h5>
                                    <p class="text-gray-dark">{{ __('contact.phoneOne') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ __('contact.email') }}</h5>
                                    <p class="text-gray-dark">{{ __('contact.emailOne') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">{{ __('contact.address') }}</h5>
                                    <p class="text-gray-dark">{{ __('contact.addressAdditional') }}</p>
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
                            <h4 class="text-uppercase">{{ __('contact.location') }}</h4>
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
                        <div class="wt-box col-md-6">
                            <h4 class="text-uppercase">{{ __('contact.contactForm') }}</h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                            <div class="p-a30 bg-gray">
                                <form class="cons-contact-form" method="POST" action="{{ route('welcome.contact.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if (session('status') === 'storeContact')
                                                <div class="alert alert-success">
                                                    <strong><i class="fa fa-thumbs-o-up"></i> {{ __('contact.error.success') }}!</strong>
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                @error('user_name')
                                                <div class="alert alert-danger">
                                                    <strong><i class="fa fa-remove"></i> {{ __('contact.error.danger') }}!</strong>
                                                </div>
                                                @enderror
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="user_name" type="text" required class="form-control" placeholder="{{ __('contact.name') }}" value="{{ old('user_name') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                @error('email')
                                                <div class="alert alert-danger">
                                                    <strong><i class="fa fa-remove"></i> {{ __('contact.error.danger') }}!</strong>
                                                </div>
                                                @enderror
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="{{ __('contact.email') }}" value="{{ old('email')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                @error('message')
                                                <div class="alert alert-danger">
                                                    <strong><i class="fa fa-remove"></i> {{ __('contact.error.danger') }}!</strong>
                                                </div>
                                                @enderror
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" rows="5" class="form-control " required placeholder="{{ __('contact.message') }}">{{ old('message')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button name="submit" type="submit" value="Submit" class="site-button  m-r15">{{ __('contact.submit') }}  <i class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<!-- SECTION CONTENT END -->--}}
    </div>
@endsection
@section('js')
    @include('welcome.pages.contact.block.js')
    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6LcuF_8UAAAAAHGCzGtj_cYX4w9kaK7PKA4Faxf7', {action: 'submit'}).then(function(token) {
                    // Add your logic to submit to your backend server here.
                });
            });
        }
    </script>
@endsection



