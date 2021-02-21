<div>
    <div class="section-full  p-t50 p-b10 overlay-wraper bg-repeat" data-stellar-background-ratio="0.5"
         style="background-image:url({{ asset('images/static/cs/background/pt2.jpg') }})">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-white text-center">
                            <div class="icon-lg m-b20"><i class="fa fa-building"></i></div>
                            <div class="counter font-26 font-weight-800 m-b5">
                                @if(!empty($counter->project_completed))
                                    {{ $counter->project_completed }}
                                @else
                                    0
                                @endif
                            </div>
                            <span>{{ trans('main.counters.project_completed') }}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-white text-center">
                            <div class="icon-lg m-b20"><i class="fa fa-users"></i></div>
                            <div class="font-26 font-weight-800 m-b5"><span class="counter">
                                @if(!empty($counter->happy_clients))
                                        {{ $counter->happy_clients }}
                                    @else
                                        0
                                    @endif
                            </span><b>+</b></div>
                            <span>{{ trans('main.counters.happy_clients') }}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30  text-white text-center">
                            <div class="icon-lg m-b20"><i class="fa fa-user-plus"></i></div>
                            <div class="counter font-26 font-weight-800 m-b5">
                                @if(!empty($counter->workers_employed))
                                    {{ $counter->workers_employed }}
                                @else
                                    0
                                @endif
                            </div>
                            <span>{{ trans('main.counters.workers_employed') }}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-white text-center">
                            <div class="icon-lg m-b20"><i class="fa fa-trophy"></i></div>
                            <div class="counter font-26 font-weight-800 m-b5">
                                @if(!empty($counter->awards_won))
                                    {{ $counter->awards_won }}
                                @else
                                    0
                                @endif
                            </div>
                            <span>{{ trans('main.counters.awards_won') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
