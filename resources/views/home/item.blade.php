@extends('templates.default')

@section('h2-title')
    <h2>{{ $item['section']['title'] }}</h2>
@stop

@section('content')
    <div class="row content-transparencia">
        <div class="offset-md-1 col-md-10 text-center">

            <div class="box-content-item">
                <h3 class="">{{ $item['title'] }}</h3>

                @if ($body = $item['html'] ?: $item['body'])
                    <div class="introduction">
                        {!! $body !!}
                    </div>
                @endif
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button
                            class="accordion-button"
                            type="button"
                            data-mdb-toggle="collapse"
                            data-mdb-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne"
                        >
                            Accordion Item #1
                        </button>
                    </h2>
                    <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-mdb-parent="#accordionExample"
                    >
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is hidden by default,
                            until the collapse plugin adds the appropriate classes that we use to style each
                            element. These classes control the overall appearance, as well as the showing and
                            hiding via CSS transitions. You can modify any of this with custom CSS or
                            overriding our default variables. It's also worth noting that just about any HTML
                            can go within the <strong>.accordion-body</strong>, though the transition does limit
                            overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-mdb-toggle="collapse"
                            data-mdb-target="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo"
                        >
                            Accordion Item #2
                        </button>
                    </h2>
                    <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-mdb-parent="#accordionExample"
                    >
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we use to
                            style each element. These classes control the overall appearance, as well as the
                            showing and hiding via CSS transitions. You can modify any of this with custom CSS
                            or overriding our default variables. It's also worth noting that just about any
                            HTML can go within the <strong>.accordion-body</strong>, though the transition does
                            limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-mdb-toggle="collapse"
                            data-mdb-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree"
                        >
                            Accordion Item #3
                        </button>
                    </h2>
                    <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-mdb-parent="#accordionExample"
                    >
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default,
                            until the collapse plugin adds the appropriate classes that we use to style each
                            element. These classes control the overall appearance, as well as the showing and
                            hiding via CSS transitions. You can modify any of this with custom CSS or
                            overriding our default variables. It's also worth noting that just about any HTML
                            can go within the <strong>.accordion-body</strong>, though the transition does limit
                            overflow.
                        </div>
                    </div>
                </div>
            </div>

            {{--

                        @if (isset($item['files']) && $item['files']->count())
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                @foreach ($item['files'] as $year => $files)
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading-{{ $year }}">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $year }}" aria-expanded="true" aria-controls="collapse-{{ $year }}">
                                                    {{ $year }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-{{ $year }}" class="panel-collapse collapse {{ ! isset($in) ? $in = 'in' : '' }}" role="tabpanel" aria-labelledby="heading-{{ $year }}">
                                            <div class="panel-body">
                                                @foreach ($files as $group)
                                                    <div class="row linha-mes">
                                                        <div class="col-xs-5 offset-md-3 col-md-3 mes-label">
                                                            {{ $group[0]['title'] }}
                                                        </div>

                                                        <div class="col-xs-7 col-md-3 tipos-downloads">
                                                            @foreach($group as $file)
                                                                <a href="{{ $file['url'] }}" download>
                                                                    <i class="btn fa fa-file-{{ $file['file_type'] }}-o" aria-hidden="true">
                                                                        <span class="label-dowload-tipo">{{ $file['file_type'] }}</span>
                                                                    </i>
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

            --}}




        </div>





        <div class="row">
            <div class="col-xs-offset-3 col-xs-6 offset-md-5 col-md-2">
                <a href="{{ URL::previous() }}" class="btn btn-block btn-primary voltar"> <i class="fa fa-step-backward" aria-hidden="true"></i> Voltar</a>
            </div>
        </div>
    </div>
@stop
