@if(config('recaptcha.enabled'))
    <div class="form-group{{ $errors->has('g-recaptcha-response') && (Session::get('last_auth_attempt') === 'register') ? ' has-error' : '' }} row">
        <div class="col-md-12">
            {!! htmlFormSnippet() !!}

            @if ($errors->has('g-recaptcha-response') && (Session::get('last_auth_attempt') === 'register'))
                <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
            @endif
        </div>
    </div>
@endIf

