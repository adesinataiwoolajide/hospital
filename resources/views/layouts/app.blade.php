

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Hospital, , , , ">
  <meta name="keywords" content="">
  <meta name="author" content="GLORIOUS EMPIRE TECH">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Adeoyo Maternity Hospital</title>
  <link rel="apple-touch-icon" href="{{asset('website/app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/app-assets//images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/vendors/css/forms/icheck/custom.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/app.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/pages/login-register.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets//assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/style.css')}}">
</head>
<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <div class="">
      @yield('content')
    </div>
    <script src="{{asset('website/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('website/app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('website/app-assets/js/core/app.min.js')}}"></script>
    <script src="{{asset('website/app-assets/js/scripts/forms/form-login-register.min.js')}}"></script>
</body>
</html>
