
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin</title>





  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('site/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/jquery-ui.css') }}">				
	<link rel="stylesheet" href="{{ asset('site/css/nice-select.css') }}">							
	<link rel="stylesheet" href="{{ asset('site/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">				
	<link rel="stylesheet" href="{{ asset('site/css/main.css') }}"> -->





  <link rel="stylesheet" href="{{asset('vendor/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">  
  <link rel="stylesheet" href="{{asset('vendor/bower_components/font-awesome/css/font-awesome.min.css')}}">  
  <link rel="stylesheet" href="{{asset('vendor/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/dist/css/skins/skin-blue.min.css')}}">

    @yield('css')


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{route('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>XX</b>XX</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>XX</b> XX</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!--messages-menu -->

          <!-- Notifications Menu -->
          
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- <img src="/vendor/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <!-- <img src="/vendor/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                <p>
                  {{ Auth::user()->name }}
                  
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Minha Conta</a>
                </div> -->
                <div class="pull-right">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

          
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
       
        </ul>
      </div>
    </nav>
  </header>
    @include('admin.layouts.template.partes.menu-esquerdo')


  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      @yield('content-header')
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      @yield('content')
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      xxx
    </div>
    <!-- Default to the left -->
    <strong>Desenvolvido <a href="#">Desenvolvido para xxx</strong>
  </footer>

  
      
     
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ asset('vendor/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/dist/js/adminlte.min.js') }}"></script>

<script src="{{asset('vendor/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>



      <!-- <script src="{{ asset('site/js/vendor/jquery-2.2.4.min.js') }}"></script>
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
			<script src="{{ asset('site/js/main.js') }}"></script> -->


@yield('js')
</body>
</html>