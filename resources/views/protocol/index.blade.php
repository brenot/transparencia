@extends('templates.default')

@section('h2-title')
    <h2>Como acompanhar seu pedido</h2>
@stop

@section('content')
    <div class="row">
        <div class="offset-md-1 col-md-10 text-center">

            <div class="box-content-item">
                <h3 class="">Acompanhe seu pedido de informação na Alerj</h3>
            </div>


            <div class="row faq">
                <div class="col-12">
                    <div class="item protocolo">
                        <h4>Digite o número do procotolo</h4>

                        <form action="/protocolo" method="post">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="col-12">
                                    <div style="padding-top: 20px">
                                        <textarea name="protocol" rows="1" class="js-obrigatorio" id="campoMensagem" style="font-size: 2em;" placeholder="Número / Ano">{{ old('protocol') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            @if(isset($errors))
                                @foreach ($errors->all() as $error)
                                    <h4>{{ $error }}</h4>
                                @endforeach
                            @endif


                            @include('partials.recaptcha-v2-form')

                            <div class="row form-botoes">
                                <div class="col-8 offset-2 col-md-4 offset-md-4">
                                    <button id="submitButton" type="submit" class="btn btn-primary btn-block">
                                        <i class="fa fa-desktop" aria-hidden="true"></i>Pesquisar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="offset-3 col-6 offset-md-5 col-md-2">
            <a href="{{ URL::previous() }}" class="btn btn-block btn-primary voltar"> <i class="fa fa-step-backward" aria-hidden="true"></i> Voltar</a>
        </div>
    </div>

@stop

@section('javascript')
    @if (app()->environment('production'))
        <script>
            jQuery("#submitButton").addClass('hidden');

            var enableBtn = function enableBtn() {
                jQuery("#submitButton").removeClass('hidden');
            };
        </script>
    @endif
@stop
