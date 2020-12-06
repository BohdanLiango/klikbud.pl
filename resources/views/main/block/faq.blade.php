<div class="section-full  p-tb80 bg-no-repeat bg-cover " style="background-image:url({{ asset('images/static/cs/background/bg-5-1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-6  clearfix">
                <div class="wt-box graph-tabing">
                    <div class="wt-accordion acc-bg-primary acc-has-bg" id="accordion6">
                        <div class="panel wt-panel">
                            <div class="acod-head acc-actives">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseOne6" data-parent="#accordion6" >
                                        {{ trans('main.faq.leftSection.title1') }}
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne6" class="acod-body collapse in">
                                <div class="acod-content p-tb15"> {{ trans('main.faq.leftSection.desc1') }}</div>
                            </div>
                        </div>
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseTwo6" class="collapsed" data-parent="#accordion6" >
                                        {{ trans('main.faq.leftSection.title2') }}
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseTwo6" class="acod-body collapse">
                                <div class="acod-content p-tb15"> {{ trans('main.faq.leftSection.desc2') }}</div>
                            </div>
                        </div>
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse"  href="#collapseThree6" class="collapsed"  data-parent="#accordion6">
                                        {{ trans('main.faq.leftSection.title3') }}
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseThree6" class="acod-body collapse">
                                <div class="acod-content p-tb15">  {{ trans('main.faq.leftSection.desc3') }}</div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse"  href="#collapseFour6" class="collapsed"  data-parent="#accordion6">
                                        {{ trans('main.faq.leftSection.title4') }}
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFour6" class="acod-body collapse">
                                <div class="acod-content p-tb15"> {{ trans('main.faq.leftSection.desc4') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wt-box graph-part-right text-white">
                    <strong class="text-uppercase title-first display-block">KLIK-B<span class="text-primary">U</span>D</strong>
                    <span class="text-uppercase text-primary display-block title-second">{{ trans('main.faq.question') }}</span>
                    <p><strong>{{ trans('main.faq.description') }}</strong></p>
                    <ul class="list-check-circle primary">
                        <li>{{ trans('main.faq.li1') }}</li>
                        <li>{{ trans('main.faq.li2') }}</li>
                        <li>{{ trans('main.faq.li3') }}</li>
                        <li>{{ trans('main.faq.li4') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
