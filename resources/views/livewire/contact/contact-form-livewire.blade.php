<div>
    <div class="wt-box col-md-6">
        <h4 class="text-uppercase">{{ trans('contact.contactForm') }}</h4>
        <div class="wt-separator-outer m-b30">
            <div class="wt-separator style-square">
                <span class="separator-left bg-primary"></span>
                <span class="separator-right bg-primary"></span>
            </div>
        </div>
        <div class="p-a30 bg-gray">
            <form class="cons-contact-form" method="POST" wire:submit.prevent="store()">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('storeContact'))
                            <div class="alert alert-success">
                                <strong><i class="fa fa-thumbs-o-up"></i> {{ session('storeContact') }}!</strong>
                            </div>
                        @endif
                            @if (session()->has('storeContactGoogle'))
                                <div class="alert alert-warning">
                                    <strong><i class="fa fa-thumbs-o-down"></i> {{ session('storeContactGoogle') }}!</strong>
                                </div>
                            @endif
                        <div class="form-group">
                            @error('user_name')
                            <div class="alert alert-danger">
                                <strong><i class="fa fa-remove"></i> {{ trans('contact.error.danger') }}!</strong>
                            </div>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="user_name" type="text" required class="form-control" placeholder="{{ trans('contact.name') }}" wire:model.lazy="user_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            @error('email')
                            <div class="alert alert-danger">
                                <strong><i class="fa fa-remove"></i> {{ trans('contact.error.danger') }}!</strong>
                            </div>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="email" type="text" class="form-control" required placeholder="{{ trans('contact.email') }}" wire:model.lazy="email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            @error('message')
                            <div class="alert alert-danger">
                                <strong><i class="fa fa-remove"></i> {{ trans('contact.error.danger') }}!</strong>
                            </div>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                <textarea name="message" rows="5" class="form-control " required placeholder="{{ trans('contact.message') }}" wire:model.lazy="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}"
                                data-callback='handle'
                                data-action='submit' class="g-recaptcha site-button  m-r15">{{ trans('contact.submit') }}  <i class="fa fa-angle-double-right"></i></button>
                    </div>
                </div>
            </form>
            <script src="https://www.google.com/recaptcha/api.js?render={{env('CAPTCHA_SITE_KEY')}}"></script>
            <script>
                function handle(e) {
                    grecaptcha.ready(function () {
                        grecaptcha.execute('{{env('CAPTCHA_SITE_KEY')}}', {action: 'submit'})
                            .then(function (token) {
                            @this.set('captcha', token);
                            });
                    })
                }
            </script>
        </div>
    </div>
</div>
