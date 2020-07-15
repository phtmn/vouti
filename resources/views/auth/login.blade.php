<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('vendor/argon-dash/assets/img/brand/favicon.ico')}}" rel="icon" type="image/png">
     
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC&display=swap" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/argon-dash/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    @yield('css')
    @yield('style')
</head>

<body class="header bg-gradient-secondary">
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-dark py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <!-- <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Choose the best plan for your business</h1>
            </div>
          </div>
        </div> -->
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-dark" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--9 pb-0">
      <div class="row justify-content-center">
        <div class="col-lg-10 ">
          <div class="pricing card-group flex-column flex-md-row mb-0 ">
            <div class="card card-pricing border-0 text-center mb-4 ">
            
              <div class="card-body  px-lg-7 mt-9">
                <div class="display-1 text-dark">
                Acesse sua conta
                </div>
                            
                <span class="text-muted "><h4 class="text-uppercase ls-1 text-dark py-3 mb-0"> módulo <span class="badge badge-pill badge-success">Gestor</span></h4></span>   
               
              </div>
              
            </div>
            <div class="card card-pricing bg-gradient-white zoom-in shadow-lg  text-center mb-4">
              <div class="card-header bg-transparent">
                <h4 class="text-uppercase ls-1 text-dark py-3 mb-0"> <img src="{{asset('vendor/argon-dash/assets/img/brand/logo3.png')}}" style="width:300px; height:130px" class="navbar-brand-img" class="img-fluid" alt="..."> </h4>
              </div>
              <div class="card-body px-lg-7">
              <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="E-mail" name="email" type="email">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Senha" name="password" type="password">
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                               
                                <div class="form-group">
											<div class="form-group" style="margin-left: 25px">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" name="termo" value="ACEITO" checked disabled>
													<label class="form-check-label" >Aceito os <a href="{{url('/termo-de-uso')}}" > Termos de Uso </a></label>
												</div>
											</div>
										</div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary my-4">Entrar</button>
                                </div>
                            </form>
               
              </div>
              <div class="card-footer bg-transparent">
                <span class="text-muted"><a href="{{ route('password.request') }}">Esqueci minha senha</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="{{ asset('vendor/argon-dash/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/argon-dash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <script src="{{ asset('vendor/argon-dash/assets/js/argon.js?v=1.0.0') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>

    @yield('js')
</body>

</html>