<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('vendor/site/images/favicon.ico')}}" rel="icon" type="image/png">    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">    
    <link href="{{ asset('vendor/argon-dash/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">    
    <link type="text/css" href="{{ asset('vendor/argon-dash/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    @yield('css')
    @yield('style')
</head>

<body>

<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{route('osc.index')}}">
            <img src="{{asset('vendor/site/images/coopvidapreta_logo.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->


        <ul class="nav align-items-center d-md-none">


        </ul>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">

            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{route('osc.index')}}">
                        <img src="{{asset('vendor/site/images/coopvidapreta_logo.png')}}" class="navbar-brand-img" alt="...">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>


            <!-- Navigation -->

            @include('admin.layouts.menu')

        </div>
    </div>
</nav>

<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
           
			<ul class="navbar-nav align-items-center d-none d-md-flex">



            </ul>



        </div>

    </nav>

    <!-- Header -->
    @yield('cabecalho')


    <!-- Page content -->
    <div class="container-fluid mt--7">
        @yield('conteudo')

     
        <footer class="footer">
            
        </footer>
    </div>
</div>
<!-- Argon Scripts -->

<script src="{{ asset('vendor/argon-dash/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/js/argon.js?v=1.0.0') }}"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>
<script src="{{asset('js/jquery.mask.min.js')}}"> </script>
<script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
@include('sweet::alert')
@yield('js')
</body>

</html>
