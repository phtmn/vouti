<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"
        rel="stylesheet">

    <link href="{{asset('vendor/site/images/favicon.ico')}}" rel="icon" type="image/png">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">   -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC&display=swap" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/argon-dash/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">

    <link type="text/css" src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }} ">



</head>

<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand pt-0" href=" ">
                <img src="{{asset('vendor/argon-dash/assets/img/brand/33.png')}}" class="navbar-brand-img" class="img-fluid" style="width:350px; height:150px"
                    alt="...">
            </a>
            <ul class="nav align-items-center d-md-none">
            </ul>
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href=" ">
                                <img src="{{asset('vendor/argon-dash/assets/img/brand/mandala.png')}}"
                                    class="navbar-brand-img" alt="...">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <!-- <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button> -->
                        </div>
                    </div>
                </div>


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
		<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-danger opacity-6"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="display-3 text-white">Olá, {{ auth()->user()->name }}</h1>
                    <p class="text-white " align="justify" style="text-indent: 35px;">Infelizmente você acessou o sistema onde não deveria!</p>                   
                    <p class="text-white" align="justify" style="text-indent: 35px;">Para acessar o sistema na URL correta, favor clicar 
					<a class="text-white font-weight-500" href="{{ route('cabo.session.login') }}">AQUI.</a>  </p>
					<p class="text-white" align="justify" style="text-indent: 35px;">Se deseja voltar para o Módulo Gestor, favor clicar 
					<a class="text-white font-weight-500" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">AQUI.</a>  </p>
                    <p class="text-white font-weight-500" align="justify" style="text-indent: 35px;">Boa sorte!

					           
                                                         
                       
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
					</p>
                   
                </div>
            </div>
        </div>
    </div>
      


        <!-- Page content -->
        <div class="container-fluid mt--7">
            


            <footer class="footer pt-0">
        
            </footer>
        </div>
    </div>



       

    

	<script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/js/argon.js?v=1.0.0') }}"></script>
    
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script type="text/javascript" src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>



    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <!-- <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script
        src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendor/argon-dash/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}">
    </script> -->

<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> -->
    </script>
    @yield('js')
</body>

</html>