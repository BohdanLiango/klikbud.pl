<div>
    {{--<!-- CONTENT START -->--}}
    <div class="page-content">
        {{--<!-- INNER PAGE BANNER -->--}}
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('welcome/images/static/gallery/gallery-banner.jpg') }});">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">
                        @if( Route::currentRouteName() !== 'welcome.gallery')
                            @forelse($categories as $category)
                                @if($category['slug'] === Route::current()->slug)
                                    {{  __('galleryPage.title') }} | {{ $category['title'] }}
                                @endif
                            @empty
                                {{ __('galleryPage.title') }}
                            @endforelse
                        @else
                            {{ __('galleryPage.title') }}
                        @endif
                    </h1>
                </div>
            </div>
        </div>
        {{--<!-- INNER PAGE BANNER END -->--}}
        {{--<!-- BREADCRUMB ROW -->--}}
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('welcome.home') }}"><i class="fa fa-home"></i> {{ __('galleryPage.home') }}</a></li>
                    @if( Route::currentRouteName() !== 'welcome.gallery')
                        @forelse($categories as $category)
                            @if($category['slug'] === Route::current()->slug)
                                <li><a href="{{ route('welcome.gallery') }}"><i class="fa fa-file-image-o"></i> {{  __('galleryPage.title') }}</a></li>
                                <li>{{ $category['title'] }}</li>
                            @endif
                        @empty
                            <li>{{ __('galleryPage.title') }}</li>
                        @endforelse
                    @else
                        <li>{{ __('galleryPage.title') }}</li>
                    @endif
                </ul>
            </div>
        </div>
        {{--<!-- BREADCRUMB  ROW END -->--}}
        {{--<!-- SECTION CONTENT START -->--}}
        <div class="section-full p-t40 p-b30">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    {{--<!-- BUTTONS SKEW -->--}}
                    <div class="m-b40">
                        <a class="m-b15 site-button skew-btn  yellow m-r15" href="{{ route('welcome.gallery') }}"><span>All</span></a>
                        @forelse($categories as $cat)
                            <a class="m-b15 site-button skew-btn  yellow m-r15" href="{{ route('welcome.gallery.slug', $cat['slug']) }}"><span>{{ $cat['title'] }}</span></a>
                        @empty
                        @endforelse
                    </div>
                </div>
                <hr>
                {{--<!-- PAGINATION END -->--}}
                {{--<!-- GALLERY CONTENT START -->--}}
                <div class="row">
                    <div class="portfolio-wrap mfp-gallery no-col-gap">
                        @forelse($gallery as $item)
                            <div class="masonry-item cat-{{ $item->category_id }} col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx p-a15">
                                    <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                        <a href="javascript:void(0);">
                                            <img src="{{ Storage::url($item->image->path) }}"  alt="{{ $item->alt }}">
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
                            Nothing
                        @endforelse
                    </div>
                </div>
                {{--<!-- GALLERY CONTENT END -->--}}
                {{--<!-- PAGINATION START -->--}}
                <div class="pagination-bx  clearfix ">
                    {{ $gallery->links() }}
                </div>
                {{--                <!-- PAGINATION END -->--}}
                <p><b>Kopiowanie i publikowanie materiałów i zdjęć zamieszczonych w serwisie tylko za <a href="{{ route('welcome.contact') }}">zgodą</a> właścicieli. </b></p>
            </div>

        </div>
        {{--<!-- SECTION CONTENT END -->--}}
        {{--<!-- CONTENT END -->--}}
    </div>
</div>
