@if(config('recaptcha.enabled'))
    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} row">
        <div class="col-md-12">
            {!! htmlFormSnippet() !!}
        </div>
    </div>
@endIf

