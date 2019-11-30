<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>xxx</title>
  <!-- Tell the browser to be responsive to screen width -->
  <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
  
  <!-- <link rel="shortcut icon" href="site/img/favicon.ico"> -->
  
  <link rel="stylesheet" href="{{ asset('vendor/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('vendor/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('vendor/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="{{ asset('vendor/dist/css/AdminLTE.min.css') }}"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="{{ asset('vendor/plugins/iCheck/square/blue.css') }}"> -->

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<!-- <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      		
		    	</div>
		    </div>
		  </header> -->



<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" ></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">						
																										
						</div>
						<div class="col-lg-8">
            <form action="{{ route('login') }}" method="post">
             @csrf
								<div class="row">	
									<div class="col-lg-6 form-group">
                  <!-- <h3 class="mb-30">Form Element</h3> -->
                  <center><img src="{{ asset('site/img/logo.png') }}" alt="" title=""  style="width:150px" /> </center>
                  <br>
                  <!-- </br> <p class="login-box-msg">Realize o Login para entrar no Sistema</p> -->
                  <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>	      
                  <input type="email" name="email"  placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" class="single-input mb-20  {{ $errors->has('email') ? ' is-invalid' : '' }}" required="" type="email">
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>

								<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>	
                <input type="password" name="password"  placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'" class="single-input mb-20  {{ $errors->has('password') ? ' is-invalid' : '' }}" required="" type="text">
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
        @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
             
            <div class="input-group-icon mt-10">
            <div class="alert-msg" style="text-align: left;"></div>
                  <center>  <button type="submit" class="primary-btn text-uppercase " >Entrar </button>	 </center>
                 
            </div>


										<!-- <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text"> -->
									</div>
									<div class="col-lg-6">
										
									</div>
									<div class="col-lg-12">
										<!-- <div class="alert-msg" style="text-align: left;"></div>
										<button type="submit" class="genric-btn primary" style="float: center;">Entrar </button>											 -->
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
      </section>
      
    





<!-- jQuery 3 -->
<script src="{{ asset('vendor/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('vendor/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
