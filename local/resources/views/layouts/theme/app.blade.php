<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{ \App\Models\Setting::getName() ? \App\Models\Setting::getName() :config('app.name', 'Laravel') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="{{asset('theme/assets/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/css/bootstrap-responsive.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/css/docs.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/js/google-code-prettify/prettify.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/css/flexslider.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/css/sequence.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/color/default.css')}}" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="{{asset('theme/assets/ico/favicon.ico')}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('theme/assets/ico/apple-touch-icon-144-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('theme/assets/ico/apple-touch-icon-114-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('theme/assets/ico/apple-touch-icon-72-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{asset('theme/assets/ico/apple-touch-icon-57-precomposed.png')}}">

  <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('theme/assets/js/infiniteslidev2.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style type="text/css">
    .carousel-caption h3{
      color: #fff;
      text-align: center;
    }
    .dotted_line {
      margin: 10px 0 10px 0;
    }
    .icon-square{
      width: auto; 
     height: auto;
    }
    .scroll2{
      display: none;
    }
    .scroll2 img {
      vertical-align: bottom;
    }
    .scroll2 .scroll_item {
      position: relative;
    }
    .scroll2 .scroll_item h3 {
      position: absolute;
      left: 0;
      top: 0;
      padding: 10px;
      color: #fff;
      background: rgba(0,0,0,0.5);
      width: 100%;
      box-sizing: border-box;
    }
  </style>
</head>

<body>
    @include('layouts.theme.header')
    @include('sweet::alert')
    @yield('content')
    
    @include('layouts.theme.footer')