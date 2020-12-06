<!DOCTYPE html>
<html lang="pl_PL pl-PL">
{{--{{ str_replace('_', '-', app()->getLocale()) }}--}}
<head>
    {{--<!-- META -->--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ trans('layout.meta.keywords') }}"/>
    <meta name="author" content="{{ trans('layout.meta.author') }}"/>
    <meta name="robots" content="{{ trans('layout.meta.robots') }}"/>
    <meta name="description" content="{{ trans('layout.meta.description') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<!-- FAVICONS ICON -->--}}
    <link rel="icon" href="{{ asset('images/static/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/static/favicon.png') }}" />
    {{--<!-- PAGE TITLE HERE -->--}}
    <title>KLIK-BUD - @yield('title')</title>
    {{--<!-- MOBILE SPECIFIC -->--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- [if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif] -->
    <script async=true src="{{ asset('js/picturefill.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168898883-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-168898883-1');
    </script>
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    {{--<!-- GOOGLE FONTS -->--}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
{{--<!-- LOADING AREA START ===== -->--}}
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
{{--<!-- LOADING AREA  END ====== -->--}}
<div class="page-wraper">
{{--<!-- HEADER START -->--}}
@include('layouts.block.header')
{{--<!-- HEADER END -->--}}
@yield('content')
{{--<!-- FOOTER START -->--}}
@include('layouts.block.footer')
{{-- <!-- FOOTER END -->--}}
{{--<!-- SCROLL TOP BUTTON -->--}}
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
</div>
@yield('js')
<script>
    @if(Route::currentRouteName() == app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName())
    let cords = ['scrollX','scrollY'];
    // Перед закрытием записываем в локалсторадж window.scrollX и window.scrollY как scrollX и scrollY
    window.addEventListener('unload', e => cords.forEach(cord => localStorage[cord] = window[cord]));
    // Прокручиваем страницу к scrollX и scrollY из localStorage (либо 0,0 если там еще ничего нет)
    window.scroll(...cords.map(cord => localStorage[cord]));
    @else
        localStorage.clear();
    let cords = ['scrollX','scrollY'];
    // Перед закрытием записываем в локалсторадж window.scrollX и window.scrollY как scrollX и scrollY
    window.addEventListener('unload', e => cords.forEach(cord => localStorage[cord] = window[cord]));
    // Прокручиваем страницу к scrollX и scrollY из localStorage (либо 0,0 если там еще ничего нет)
    window.scroll(...cords.map(cord => localStorage[cord]));
    @endif
</script>
</body>
</html>

