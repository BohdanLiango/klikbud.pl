<div>
    <div class="section-full bg-white p-t80 p-b50 scale-bg-top scale-bg-bottom">
        <div class="container">
            {{--<!-- IMAGE CAROUSEL START -->--}}
            {{--<!-- TITLE START -->--}}
            <div class="section-head text-center">
                <h2 class="text-uppercase">{{ trans('main.services.title') }}</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
                <p>{{ trans('main.services.description') }}</p>
            </div>
            {{--<!-- TITLE END -->--}}
            {{--<!-- CAROUSEL -->--}}
            <div class="section-content">
                <div class="owl-carousel Home-services-carousel owl-btn-vertical-center">
                    @forelse($services as $service)
                        <div class="item">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{ Storage::disk('s3')->url($service->image->path) }}" alt="{{ $service->alt[App::getLocale()] }}" style="width: 360px; height: 225px"></a>
                                </div>
                                <div class="wt-info p-tb30">
                                    <h4 class="wt-title m-t0 m-b5"><a href="javascript:void(0);">{{ $service->title[App::getLocale()] }}</a></h4>
                                    <p>{{ $service->description[App::getLocale()] }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
