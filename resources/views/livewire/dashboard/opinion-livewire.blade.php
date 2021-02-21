<div>
    <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax"  data-stellar-background-ratio="0.5"  style="background-image:url({{ asset('images/static/cs/background/bg9-1.jpg') }})">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            {{--<!-- TITLE START -->--}}
            <div class="section-head text-center text-white">
                <h2 class="text-uppercase">{{ trans('main.testimonial.title') }}</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square has-bg">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            {{--<!-- TITLE END -->--}}
            {{--<!-- TESTIMONIAL 1 START ON BACKGROUND -->--}}
            <div class="section-content">
                <div class="owl-carousel testimonial-one">
                    @forelse($opinions as $opinion)
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-detail">
                                    <strong class="testimonial-name">{{ $opinion->name }}</strong>
                                    <span class="testimonial-position">{{ $opinion->service->title[App::getLocale()]}}</span>
                                </div>
                                @for($i = 0; $i < $opinion->stars; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                                <div class="testimonial-text">
                                    <p> {{ $opinion->opinion }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-detail">
                                    <strong class="testimonial-name"></strong>
                                    <span class="testimonial-position"></span>
                                </div>
                                <div class="testimonial-text">
                                    <p> </p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</div>
