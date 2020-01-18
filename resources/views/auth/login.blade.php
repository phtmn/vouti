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
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">   -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC&display=swap" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/argon-dash/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    @yield('css')
    @yield('style')
</head>

<body>
    <div class="main-content   opacity-8 ">
        <!-- Header -->
        <div class="header bg-success-dark  opacity-8 py-7 py-lg-4 pt-lg-5">
            <div class="container ">
                <div class="header-body  text-center mb-8">
                    <div class="row justify-content-center">
                        <!-- <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-white">Use these awesome forms to login or create new account in
                                your project for free.</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card  border-3 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 "><small><img
                                        src="{{asset('vendor/argon-dash/assets/img/brand/2.png')}}"
                                        class="img-fluid" style="width:350px; height:150px"></small></div>
                            <!-- <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div> -->
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                <small>Módulo Gestor</small>
              </div>
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
                                <div class=" ">
                                    <!-- <input class="custom-control-input" id=" customCheckLogin" type="checkbox"> -->
                                    <!-- <label class="" >
                                        <span class="text-muted">Esqueci minha senha</span>
                                    </label> -->
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary my-4">Entrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-6">
              <a href="#" class="text-light "><small class="font-weight-bold">Esqueci minha senha</small></a>
            </div> -->
            <!-- <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div> -->
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