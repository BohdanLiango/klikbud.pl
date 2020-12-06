{{--<!-- SLIDER START -->--}}
<div class="main-slider style-two default-banner">
    <div class="tp-banner-container">
        <div class="tp-banner" >
            {{--<!-- START REVOLUTION SLIDER 5.4.1 -->--}}
            <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        {{--<!-- SLIDE 1 -->--}}
                        @forelse($sliders as $slider)
                        <li data-index="rs-{{ $slider->slider_number_show }}000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset(Storage::url($slider->image->path)) }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            {{--<!-- MAIN IMAGE -->--}}
                            <img src="{{ asset(Storage::url($slider->image->path)) }}"  alt="{{ $slider->alt }}"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                            {{--<!-- LAYERS -->--}}
                            {{--<!-- LAYER NR. 1 [ for overlay ] -->--}}
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                      {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>
                            {{--<!-- LAYER NR. 2 [ for title ] -->--}}
                            <div class="tp-caption   tp-resizeme"
                                 id="slide-100-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                 data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                 data-fontsize="['60','60','60','50']"
                                 data-lineheight="['70','70','70','60']"
                                 data-width="['700','700','700','700']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 13;
                                        white-space: normal;
                                        font-weight: 700;
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                <span class="text-uppercase" style="font-family:'Roboto' ;"><span class="text-primary">{{ $slider->textYellow}} </span> <br>{{ $slider->textBlack }}</span>
                            </div>
                            {{--<!-- LAYER NR. 3 [ for paragraph] -->--}}
                            <div class="tp-caption  tp-resizeme"
                                 id="slide-100-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                 data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                 data-fontsize="['18','18','18','30']"
                                 data-lineheight="['30','30','30','40']"
                                 data-width="['650','650','650','650']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 13;
                                        font-weight: 500;
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">
                                <br>
                                <hr>
                                <span style="font-family:'Roboto';">{{ $slider->description }}</span>
                            </div>
                            {{--<!-- LAYER NR. 4 [ for readmore botton ] -->--}}
                            <div class="tp-caption tp-resizeme"
                                 id="slide-100-layer-4"
                                 data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                 data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"
                                 data-lineheight="['none','none','none','none']"
                                 data-width="['300','300','300','300']"
                                 data-height="['none','none','none','none']"
                                 data-whitespace="['normal','normal','normal','normal']"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a data-href="#welcome-page" class="site-button button-lg  m-r15">{{ trans('main.slide.button') }}  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </li>
                            @empty
                        @endforelse
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            {{--<!-- END REVOLUTION SLIDER -->--}}
        </div>
    </div>
</div>
{{--<!-- SLIDER END -->--}}
{{--<!-- OUR VALUE SECTION START -->--}}
<div id="welcome-page" class="section-full bg-primary">
    <div class="container our-value">
        <div class="row">
            <div class="col-md-8 col-sm-8 p-t15 p-b30 our-value-left">
                <div class="clearfix">
                    <div class="col-md-6 p-tb10">
                        <div class="wt-icon-box-wraper left ">
                            <div class="icon-md">
                                <div  class="icon-cell text-white">
                                    <span class="iconmoon-buildings"></span>
                                </div>
                                <p></p>
                            </div>
                            <div class="icon-content text-secondry">
                                <h5 class="wt-tilte text-uppercase m-b5">{{ trans('main.slide.title1') }}</h5>
                                <p>{{ trans('main.slide.desc1') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-tb10">
                        <div class="wt-icon-box-wraper left">
                            <div class="icon-md text-primary"><div  class="iconmoon-time-1 text-white"></div></div>
                            <div class="icon-content text-secondry">
                                <h5 class="wt-tilte text-uppercase m-b0">{{ trans('main.slide.title2') }}</h5>
                                <p>{{ trans('main.slide.desc2') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-3 p-t50 p-b50 col-md-offset-1 our-value-right">
                <div class="">
                    <a href="{{ route('contact') }}" class="site-button-secondry  m-r15 text-uppercase font-weight-600">{{ trans('main.slide.button2') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<!-- OUR VALUE SECTION  END -->--}}
