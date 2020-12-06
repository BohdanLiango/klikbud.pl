{{--<!-- WHY CHOOSE US SECTION START  -->--}}
<div class="section-full bg-gray p-t80 p-b120 bg-no-repeat bg-bottom-right" style="background-image:url({{ asset('images/static/cs/background/pic-c-1bg.png') }});">
    <div class="container">
        {{--<!-- TITLE START-->--}}
        <div class="section-head text-center">
            <h2 class="text-uppercase">{{ trans('main.whyChooseUs.title') }}</h2>
            <div class="wt-separator-outer">
                <div class="wt-separator style-square">
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
            <p>{{ trans('main.whyChooseUs.description') }}</p>
        </div>
        {{--<!-- TITLE END-->--}}
        <div class="section-content">
            <div class="row">
                {{--<!-- COLUMNS 1 -->--}}
                <div class="col-md-4 col-sm-6 p-tb15">
                    <div class="wt-icon-box-wraper  p-a20 left bg-white">
                        <div class="icon-sm text-primary m-b20">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase">{{ trans('main.whyChooseUs.columns1.title') }}</h5>
                            <div class="wt-separator bg-primary"></div>
                            <p style="word-break: break-word">{{trans('main.whyChooseUs.columns1.description') }}</p>
                        </div>
                    </div>
                </div>
                {{--<!-- COLUMNS 2 -->--}}
                <div class="col-md-4 col-sm-6 p-tb15">
                    <div class="wt-icon-box-wraper  p-a20 left bg-white">
                        <div class="icon-sm text-primary m-b20">
                           <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="icon-content ">
                            <h5 class="wt-tilte text-uppercase">{{ trans('main.whyChooseUs.columns2.title') }}</h5>
                            <div class="wt-separator bg-primary"></div>
                            <p style="word-break: break-word">{{ trans('main.whyChooseUs.columns2.description') }}</p>
                        </div>
                    </div>
                </div>
                {{--<!-- COLUMNS 3 -->--}}
                <div class="col-md-4 col-sm-6 p-tb15">
                    <div class="wt-icon-box-wraper  p-a20 left bg-white">
                        <div class="icon-sm text-primary m-b20">
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase">{{ trans('main.whyChooseUs.columns3.title') }}</h5>
                            <div class="wt-separator bg-primary"></div>
                            <p style="word-break: break-word">{{ trans('main.whyChooseUs.columns3.description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{--<!-- WHY CHOOSE US SECTION END -->--}}
