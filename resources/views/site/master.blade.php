<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('site/img/favicon.ico')}}"   >
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Serben Social</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
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
		  <header id="header">
		  	
		  
		  
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="{{url('/')}}"><img src="{{asset('/images/logotipo.png')}}" alt="" title=""  style="width:150px" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{url('/')}}">Home</a> </li>
			          
			            <!-- <ul>
			              <li><a href="#">História</a></li>
			              <li><a href="#">Missão</a></li>
			              <li><a href="#">Visão</a></li>
			              <li><a href="#">Valor</a></li>
			            </ul> -->
			          </li>	
			    
			         <!-- <li> <a href="#">2ª Via Boleto</a></li> -->
                      <li> <a href="{{ route('contato') }}">Contato</a></li>
					  @guest
						<li ><a href="{{route('login')}}">Acesso ao Sistema</a>
						<!--<li class="menu-has-children"><a href="{{route('login')}}">Acesso ao Sistema</a>
						<ul>
							<li><a href="{{route('login')}}">Sindicatos</a></li>
							<li><a href="{{route('login')}}">Empresas</a></li>
							<li><a href="{{route('login')}}">Trabalhadores</a></li>
							</ul>						
						</li> -->
					  @else	
					  	<!-- <li class="menu-has-children"><a href="#">Bem vindo(a), {{Auth()->user()->name}}</a> -->
						<li class="menu-has-children"><a href="#">Bem vindo(a)</a>					
							<ul>
							<li>{{ auth()->user()->name }}</li>
							<ln>
							<li><a href="{{route('painel')}}">Painel</a></li>
							<!--<li><a href="#">Meus Dados</a></li>	 -->		              
							<li><a href="{{ route('logout') }}"
									onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Sair</a></li>
							</ul>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>						
			          	</li>			          			          					          		          
			          @endguest
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
			
		  </header><!-- #header -->
				@yield('content')
            <!-- start footer Area -->
		
			
           
			
            <!-- End footer Area -->

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
			@yield('js')	
		</body>
	</html>