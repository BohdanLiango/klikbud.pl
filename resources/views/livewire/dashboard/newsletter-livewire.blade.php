<div>
<div class="widget widget_newsletter">
    <h4 class="widget-title">{{ trans('layout.footer.newsletter') }}</h4>
    <div class="newsletter-bx">
        @if (session()->has('store'))
            <ul>
                <strong style="color: green"><i class="fa fa-thumbs-o-up"></i> {{ session('store') }}!</strong>
            </ul>
        @endif
        @error('emailNewsletter')
            <ul>
                <strong style="color: red"><i class="fa fa-thumbs-o-down"></i> {{ $message }}!</strong>
            </ul>
        @enderror
        <div class="input-group">
            <input name="emailNewsletter" class="form-control" placeholder="{{ trans('layout.footer.enterYourEmail') }}" type="text" wire:model.lazy="emailNewsletter">
            <span class="input-group-btn">
                <a href="#" wire:click.prevent="save()" class="site-button">
                    <i class="fa fa-paper-plane-o"></i>
                </a>
            </span>
        </div>
    </div>
</div>
</div>
