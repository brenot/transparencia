@extends('templates.default')

@section('h2-title')
    <h2>Acompanhe seu pedido de informação na Alerj</h2>
@stop

@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-10 text-center">

            <div class="box-content-item">
                <h3 class="">Protocolo {{ $protocol['protocol'] }}</h3>
            </div>


            @if (isset($protocol['autor']))
                <div class="row faq">
                    <div class="col-xs-12">
                        <div class="item">
                            <h3 class="text-center">{{ $protocol['numero'] }}/{{ $protocol['ano'] }}</h3>
                            <h4 class="text-center">Obrigado por nos procurar. Seu processo está em andamento.</h4>
                        </div>
                    </div>
                </div>
            @else
                <div class="row faq">
                    <div class="col-xs-12">
                        <div class="item">
                            <h4>Situação atual do pedido</h4>
                            <div class="row protocol-answer-row">
                                <div class="col-md-2 bold">
                                    Nome
                                </div>

                                <div class="col-md-10">
                                    {{ $protocol['name'] }}
                                </div>
                            </div>

                            <div class="row protocol-answer-row">
                                <div class="col-md-2 bold">
                                    Data
                                </div>

                                <div class="col-md-10">
                                    {{ $protocol['created_at'] }}
                                </div>
                            </div>

                            <div class="row protocol-answer-row">
                                <div class="col-md-2 bold">
                                    Pergunta
                                </div>

                                <div class="col-md-10">
                                    {{ $protocol['question'] }}
                                </div>
                            </div>

                            <div class="row protocol-answer-row">
                                <div class="col-md-2 bold">
                                    Resposta
                                </div>

                                <div class="col-md-10">
                                    @if ($protocol['answer'])
                                        {{ $protocol['answer'] }}

                                        @if (isset($protocol['files']))
                                            <br><br>
                                            <h4>Arquivos relacionados</h4>

                                            @foreach($protocol['files'] as $file)
                                                <p>
                                                    <a href="{{ $file['url'] }}" target="_blank">{{ $file['arquivo'] }}</a>
                                                </p>
                                            @endforeach
                                        @endif
                                    @else
                                        Ainda não há resposta para este pedido.
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-offset-5 col-md-2">
                <a href="{{ URL::previous() }}" class="btn btn-block btn-primary voltar"> <i class="fa fa-step-backward" aria-hidden="true"></i> Voltar</a>
            </div>
        </div>
    </div>
@stop
