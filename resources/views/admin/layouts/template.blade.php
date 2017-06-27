<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('admin.includes.navbar')
        <div class="container-fluid">
            <div class="row">

                    @include('admin.includes.sidebar')
                    <div class="col-md-10 display-area">
                        <div class="row text-center">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="content-box-large">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div><!--/Display area after sidenav-->

                </div>
        </div>
        

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('js/bootsrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
