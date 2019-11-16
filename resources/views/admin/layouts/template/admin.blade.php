<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Admin</title>
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
  @yield('css')
</head>
<body>

  @include('admin.layouts.template.header')  
  @yield('content-header')
  @yield('content')
  @include('admin.layouts.template.footer')

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