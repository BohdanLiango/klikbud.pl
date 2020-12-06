@extends('errors.layout')
@section('title', trans('error.500.title'))
@section('styles')
    @include('errors.block.css')
@endsection
@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
        {{--<!-- SECTION CONTENT START -->--}}
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-content">
                    <div class="row">

                        <div class="col-lg-8 col-md-6 col-sm-6">
                            <div class="page-notfound text-center">
                                <form method="post">
                                    <strong class="text-uppercase">{{ trans('error.error') }}</strong>
                                    <strong>5<i class="fa fa-frown-o text-primary"></i><i class="fa fa-frown-o text-primary"></i></strong>
                                    <span>{{ trans('error.500.title') }}</span>
                                    @if(empty(URL::previous()) && route('welcome.home') !== NULL )
                                        <a href="{{ route('welcome.home') }}" class="site-button ">{{ trans('error.home') }}  <i class="fa fa-angle-double-right"></i></a>
                                    @else
                                        <a href="{{ route('home.main')}}" class="site-button ">{{ trans('error.back') }}  <i class="fa fa-angle-double-right"></i></a>
                                    @endif
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="page-notfound-left text-center bg-gray">
                                <div class="constrot-strip"></div>
                                <span class="flaticon-plumber-working"></span>
                                <div class="constrot-strip"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{--<!-- SECTION CONTENT END -->--}}
    </div>
    {{--<!-- CONTENT END -->--}}
@endsection
@section('js')
    @include('errors.block.js')
@endsection
