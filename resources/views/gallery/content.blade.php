@extends('layouts.layout')
@section('title', __('galleryPage.title'))
@section('styles')
    {{--<!-- BOOTSTRAP STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    {{--<!-- FONTAWESOME STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}" />
    {{--<!-- FLATICON STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.min.css') }}">
    {{--<!-- ANIMATE STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    {{--<!-- OWL CAROUSEL STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    {{--<!-- BOOTSTRAP SELECT BOX STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    {{--<!-- MAGNIFIC POPUP STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    {{--<!-- LOADER STYLE SHEET -->--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.min.css') }}">
@endsection
@section('content')
@livewire('gallery.content-livewire')
@endsection
@section('js')
    {{--<!-- JAVASCRIPT  FILES ========================================= -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/jquery-1.12.4.min.js') }}"></script>
    {{--<!-- JQUERY.MIN JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/bootstrap.min.js') }}"></script>
    {{--<!-- BOOTSTRAP.MIN JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/bootstrap-select.min.js') }}"></script>
    {{--<!-- FORM JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    {{--<!-- FORM JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/magnific-popup.min.js') }}"></script>
    {{--<!-- MAGNIFIC-POPUP JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/waypoints.min.js') }}"></script>
    {{--<!-- WAYPOINTS JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/counterup.min.js') }}"></script>
    {{--<!-- COUNTERUP JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/waypoints-sticky.min.js') }}"></script>
    {{--<!-- COUNTERUP JS -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/isotope.pkgd.min.js') }}"></script>
    {{--<!-- MASONRY  -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/owl.carousel.min.js') }}"></script>
    {{--<!-- OWL  SLIDER  -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/stellar.min.js') }}"></script>
    {{--<!-- PARALLAX BG IMAGE   -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/scrolla.min.js') }}"></script>
    {{--<!-- ON SCROLL CONTENT ANIMTE   -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/custom.js') }}"></script>
    {{--<!-- CUSTOM FUCTIONS  -->--}}
    <script type="text/javascript" src="{{ asset('welcome/js/shortcode.js') }}"></script>
@endsection
