{{--<!-- COLL-TO ACTION START -->--}}
<div class="call-to-action-wrap bg-primary bg-repeat" style="background-image:url({{ asset('images/static/cs/background/bg-4.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="call-to-action-left p-tb20 p-r50">
                    <h4 class="text-uppercase m-b10">{{ trans('main.contactFooter.title') }}</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="call-to-action-right p-tb30">
                    <a href="{{ route('contact') }}" class="site-button-secondry text-uppercase font-weight-600">
                        {{ trans('main.contactFooter.button') }}  <i class="fa fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
