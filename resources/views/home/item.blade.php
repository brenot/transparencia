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



            @if (isset($item['files']) && $item['files']->count())
                <div id="accordion" role="tablist" aria-multiselectable="true" class="accordion-alerj">



                    @foreach ($item['files'] as $year => $files)
                        <div class="card">
                            <div class="card-header" id="heading-{{ $year }}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{ $year }}" aria-expanded="true" aria-controls="collapse-{{ $year }}">
                                        {{ $year }}
                                    </button>
                                </h5>
                            </div>


                            <div id="collapse-{{ $year }}" class="collapse {{ ! isset($in) ? $in = 'in' : '' }}"  aria-labelledby="heading-{{ $year }}"  data-parent="#accordion">
                                <div class="card-body">
                                    @foreach ($files as $group)
                                        <div class="row linha-mes">
                                            <div class="col-5 offset-md-3 col-md-3 mes-label">
                                                {{ $group[0]['title'] }}
                                            </div>

                                            <div class="col-7 col-md-3 tipos-downloads">
                                                @foreach($group as $file)
                                                    <a href="{{ $file['url'] }}" download>
                                                        <i class="btn fas fa-file-{{ $file['file_type'] }}" aria-hidden="true">
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


                    {{-- <div class="card">
                         <div class="card-header" id="headingTwo">
                             <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     Collapsible Group Item #2
                                 </button>
                             </h5>
                         </div>
                         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                             <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                             </div>
                         </div>
                     </div>


                     <div class="card">
                         <div class="card-header" id="headingThree">
                             <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                     Collapsible Group Item #3
                                 </button>
                             </h5>
                         </div>
                         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                             <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                             </div>
                         </div>
                     </div>
                 </div>
                 --}}


                    @endif


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
                                                                <div class="col-5 offset-md-3 col-md-3 mes-label">
                                                                    {{ $group[0]['title'] }}
                                                                </div>

                                                                <div class="col-7 col-md-3 tipos-downloads">
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
        </div>
    </div>

    <div class="row">
        <div class="col-offset-3 col-6 offset-md-5 col-md-2">
            <a href="{{ URL::previous() }}" class="btn btn-block btn-primary voltar"> <i class="fa fa-step-backward" aria-hidden="true"></i> Voltar</a>
        </div>
    </div>


@stop
