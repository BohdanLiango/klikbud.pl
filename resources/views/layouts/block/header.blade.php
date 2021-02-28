<header class="site-header header-style-3">
    <div class="top-bar bg-secondry">
        <div class="container">
            <div class="row">
                <div class="wt-topbar-right clearfix">
                    <ul class="list-unstyled e-p-bx pull-right" style="margin-left: 10px">
{{--                        @if (Route::has('login'))--}}
{{--                            <div class="top-right links">--}}
{{--                                @auth--}}
{{--                                    @if(Auth::user()->role_id === 1)--}}
{{--                                        <li><i class=""></i><a href="{{ route('admin.dashboard') }}">Panel</a></li>--}}
{{--                                    @elseif(Auth::user()->role_id === 2)--}}
{{--                                        <li><i class=""></i><a href=""></a></li>--}}
{{--                                    @elseif(Auth::user()->role_id === NULL)--}}
{{--                                        <li><i class=""></i><a href="">{{ Auth::user()->name }} {{ Auth::user()->surname }}</a></li>--}}
{{--                                    @else--}}
{{--                                    @endif--}}
{{--                                @else--}}
{{--                                    <li><i class=""></i><a href="{{ route('login') }}">Login</a></li>--}}
{{--                                    @if (Route::has('register'))--}}
{{--                                        /--}}
{{--                                        <li><i class=""></i><a href="{{ route('register') }}">Registration</a></li>--}}
{{--                                    @endif--}}
{{--                                @endauth--}}
{{--                            </div>--}}
{{--                        @endif--}}
                    </ul>
                    <ul class="social-bx list-inline pull-right">
                        <li><a href="{{ trans('layout.topIcons.facebook') }}" class="fa fa-facebook"
                               target="_blank"></a></li>
                        <li><a href="{{ trans('layout.topIcons.youtube') }}" class="fa fa-youtube"
                               target="_blank"></a></li>
                        <li><a href="{{ trans('layout.topIcons.instagram') }}" class="fa fa-instagram"
                               target="_blank"></a>
                        </li>
                    </ul>
                    <ul class="list-unstyled e-p-bx pull-right">
                        <li><i class="fa fa-envelope"></i>{{ trans('layout.topIcons.email') }}</li>
                        <li><i class="fa fa-phone"></i>{{ trans('layout.topIcons.phone') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header main-bar-wraper">
        <div class="main-bar">
            <div class="container">
                <div class="logo-header mostion">
                    <a href="{{ route('main') }}">
                        <img src="{{ asset('images/static/logo-light.png') }}" width="230" height="67"
                             alt="{{ trans('layout.logoAlt') }}"/>
                    </a>
                </div>
                {{--<!-- NAV Toggle Button -->--}}
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">{{ trans('layout.toogleNavigation') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{--<!-- MAIN Vav -->--}}
                <div class="header-nav navbar-collapse collapse ">
                    <ul class=" nav navbar-nav">
                        <li><a href="{{ route('main') }}" style="{{ Route::currentRouteName() === 'main' ? 'color: #FFBC13' : null}}">{{ trans('layout.navigation.home') }}</a></li>
                        <li><a href="{{ route('gallery') }}" style="{{ Route::currentRouteName() === 'gallery' ? 'color: #FFBC13' : null}}">{{ trans('layout.navigation.gallery') }}</a></li>
                        <li><a href="{{ route('contact') }}" style="{{ Route::currentRouteName() === 'contact' ? 'color: #FFBC13' : null}}">{{ trans('layout.navigation.contact') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
