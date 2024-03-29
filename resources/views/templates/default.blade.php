<!DOCTYPE html>
<html>
    <head>
        <title>Alerj - Transparência</title>
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" /><meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

        <link rel="stylesheet" type="text/css" href="/legislaqui/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="/legislaqui/colorpicker.css" />
        <link rel="stylesheet" type="text/css" href="/legislaqui/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="/legislaqui/lightbox.css" />
        <link rel="stylesheet" type="text/css" href="/legislaqui/jquery.jscrollpane.css" />
        <link rel="stylesheet" type="text/css" href="/legislaqui/jquery-ui.theme.css">
        <link rel="stylesheet" type="text/css" href="/legislaqui/jquery-ui.structure.css">
        <link rel="stylesheet" type="text/css" href="/legislaqui/estilos.css" />


        <!-- Styles -->
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">--}}
        <!-- Loading Bootstrap -->
        {{--
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
                --}}


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/custom.css" />
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/tabelas.css">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
{{--        <link href="{{mix('css/app.css')}}" rel="stylesheet">--}}

        @if (isApp())
            <link rel="stylesheet" href="/css/client-app.css">
        @endif

        <script src='https://www.google.com/recaptcha/api.js'></script>


    </head>

    <body>
        <div id="app">
            @if (!isApp())
                @include('templates.superior')

                @include('templates.menu')
            @endif

            <div class="fundo transparencia">
                <div class="container-full titulo-portal text-center">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <h1>Portal da Transparência</h1>
                            @yield('h2-title')

                        </div>
                        <div class="col-2 refresh-cache pull-right" >
                            <div class="">
                                <a href="{{ route('cache.clear') }}">
                                    <i class="fas fa-sync"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    @yield('content')

                </div>
            </div>
        </div>

        <script src="{{mix('js/app.js')}}"></script>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

        @yield('javascript')
        @include('partials.google-analytics')

    </body>
</html>

