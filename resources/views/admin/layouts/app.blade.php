<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}"> -->


            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"> 
		
			<link rel="stylesheet" href="{{ asset('site/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('site/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('css/app.css') }}">
			<link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('site/css/jquery-ui.css') }}">				
			<link rel="stylesheet" href="{{ asset('site/css/nice-select.css') }}">							
			<link rel="stylesheet" href="{{ asset('site/css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">				
			<link rel="stylesheet" href="{{ asset('site/css/main.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right ">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('listaConvenios') }}">Convênios</a></li>
                            <li><a href="{{ route('agendamento') }}">Agendamento</a></li>                           
                            <li><a href="{{ route('carteira') }}">Carteira de Associado</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->




    <script src="{{ asset('site/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="{{ asset('js/app.js') }}"></script>
			<script src="{{ asset('site/js/popper.min.js') }}"></script>
			<script src="{{ asset('site/js/vendor/bootstrap.min.js') }}"></script>
  			<script src="{{ asset('site/js/easing.min.js') }}"></script>			
			<script src="{{ asset('site/js/hoverIntent.js') }}"></script>
			<script src="{{ asset('site/js/superfish.min.js') }}"></script>	
			<script src="{{ asset('site/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>	
    		<script src="{{ asset('site/js/jquery.tabs.min.js') }}"></script>						
			<script src="{{ asset('site/js/jquery.nice-select.min.js') }}"></script>	
            <script src="{{ asset('site/js/isotope.pkgd.min.js') }}"></script>			
			<script src="{{ asset('site/js/waypoints.min.js') }}"></script>
			<script src="{{ asset('site/js/jquery.counterup.min.js') }}"></script>
			<script src="{{ asset('site/js/simple-skillbar.js') }}"></script>							
			<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>							
			<script src="{{ asset('site/js/mail-script.js') }}"></script>	
			<script src="{{ asset('site/js/main.js') }}"></script>
</body>
</html>
