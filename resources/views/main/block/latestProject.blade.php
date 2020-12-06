<div class="section-full bg-white p-tb80 scale-bg-top scale-bg-bottom">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="text-uppercase ">{{ trans('main.latestProject.title') }}</h2>
            <div class="wt-separator-outer">
                <div class="wt-separator style-square">
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
            <p>{{ trans('main.latestProject.description') }}</p>
{{--            <div class="filter-wrap center">--}}
{{--                <ul class="masonry-filter link-style  text-uppercase">--}}
{{--                    <li class="active"><a data-filter="*" href="#"><span> {{ __('welcomePage.latestProject.cat') }}</span></a></li>--}}

{{--                    @isset($categoryGallery)--}}
{{--                    @forelse($categoryGallery as $category)--}}
{{--                        <li><a data-filter=".cat-{{ $category['value'] }}" href="#">{{ $category['title'] }}</a></li>--}}
{{--                    @empty--}}
{{--                        <li></li>--}}
{{--                    @endforelse--}}
{{--                    @endisset--}}

{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="portfolio-wrap mfp-gallery no-col-gap">
{{--                <!-- COLUMN -->--}}
                @forelse($gallery as $item)
                <div class="masonry-item cat-{{ $item->category_id }} col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                            <a href="javascript:void(0);">
                                <img src="{{ Storage::url($item->image->path) }}"  alt="{{ $item->alt }}" style="width: 500px; height: 313px">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="{{ Storage::url($item->image->path) }}" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
