<footer class="site-footer footer-dark">
    {{--<!-- FOOTER BLOCKES START -->--}}
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                {{--<!-- ABOUT COMPANY -->--}}
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">{{ trans('layout.footer.aboutCompany') }}</h4>
                        <div class="logo-footer clearfix p-b15">
                            <a href="{{ route('main') }}"><img src="{{ asset('images/static/logo-light.png') }}" width="230" height="67" alt="{{ trans('layout.logoAlt') }}"/></a>
                        </div>
                        <p>{{ trans('main.aboutCompany.p1') }}
                        </p>
                    </div>
                </div>
                {{--<!-- RESENT POST -->--}}
                <div class="col-md-3 col-sm-6">
                    <div class="widget recent-posts-entry-date">
                        <h4 class="widget-title">{{ trans('layout.footer.instagram') }}</h4>
                        <div class="widget-post-bx">
                            <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/a0a2db7e6b2e5e618c504bf95eaa66fc.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<!-- USEFUL LINKS -->--}}
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">{{ trans('layout.footer.usefulLinks') }}</h4>
                        <ul>
                            <li><a href="{{ route('main') }}">{{ trans('layout.navigation.gallery') }}</a></li>
                            <li><a href="{{ route('main') }}">{{ trans('layout.navigation.contact') }}</a></li>
                        </ul>
                    </div>
                </div>
                {{--<!-- NEWSLETTER -->--}}
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">{{ trans('layout.footer.newsletter') }}</h4>
                        <div class="newsletter-bx">
                            <form action="{{route('main')}}" method="post">
                                @csrf
                                @if (session('status') === 'newsletterStore')
                                    <ul>
                                        <strong style="color: green"><i class="fa fa-thumbs-o-up"></i> {{ trans('layout.footer.newsletterSuccess') }}!</strong>
                                    </ul>
                                @endif
                                @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <strong style="color: red"><i class="fa fa-remove"></i> {{ $error }}!</strong>
                                            @endforeach
                                        </ul>
                                @endif
                                <div class="input-group">
                                    <input name="emailNewsletter" class="form-control" placeholder="{{ trans('layout.footer.enterYourEmail') }}" type="text" value="{{ old('emailNewsletter') }}">
                                    <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{--<!-- SOCIAL LINKS -->--}}
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">{{ trans('layout.footer.socialLinks') }}</h4>
                        <ul class="social-icons social-square social-darkest">
                            <li><a target="_blank" rel="noopener noreferrer" href="{{ trans('layout.topIcons.facebook') }}" class="fa fa-facebook"></a></li>
                            <li><a target="_blank" rel="noopener noreferrer" href="{{ trans('layout.topIcons.youtube') }}" class="fa fa-youtube"></a></li>
                            <li><a target="_blank" rel="noopener noreferrer" href="{{ trans('layout.topIcons.instagram') }}" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6  p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-travel"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">{{ trans('layout.footer.address') }}</h5>
                            <p style="word-break: break-word">{{ trans('layout.footer.addressAdditional') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  p-tb20 ">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-smartphone-1"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">{{ trans('layout.footer.phone') }}</h5>
                            <p class="m-b0">{{ trans('layout.footer.phoneOne') }}</p>
                            <p>{{ trans('layout.footer.phoneTwo') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-primary">
                            <span class="flaticon-construction"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">{{ trans('layout.footer.companyDetails') }}</h5>
                            <p class="m-b0">{{ trans('layout.footer.companyDetailsNip') }}</p>
                            <p>{{ trans('layout.footer.companyDetailsRegon') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-email"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">{{ trans('layout.footer.email') }}</h5>
                            <p class="m-b0">{{ trans('layout.footer.emailOne') }}</p>
                            <p>{{ trans('layout.footer.emailTwo') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{{--<!-- FOOTER COPYRIGHT -->--}}
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="row">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">© 2018-{{ date('Y') }} KLIK-BUD. {{ trans('layout.footer.copyrights') }} <a
                            target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/bohdan-liango-999a8613b/">Bohdan Liango</a></span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="{{ route('main') }}">{{ trans('layout.navigation.contact') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
