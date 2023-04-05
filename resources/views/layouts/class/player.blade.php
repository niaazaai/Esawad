<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir = "rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Esawad') }}</title>  
    <link rel="stylesheet" href="{{asset('css/class/player/purpose.css')}}" id="stylesheet">
    <link href="{{asset('css/class/player/videojs.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/class/player/fantasy-theme.min.css')}}" rel="stylesheet">   
    <link href="{{asset('css/class/player/quality-selector.css')}}" rel="stylesheet">
    <link href="{{asset('css/class/player/videojs-playlist-ui.vertical.css')}}" rel="stylesheet">
    <style type="text/css"> @font-face {font-family: Amiri-Bold;src: url('{{asset('assets/fonts/Amiri-Bold.ttf') }}');font-weight:bold;}.customfont {font-family: "Amiri-Bold";}</style> 
    <link rel="stylesheet" href="{{asset('/assets/libs/@fortawesome/fontawesome-free/player/all.min.css')}}">
</head>
  <body class="customfont text-right">
    @include('layouts.navbar')
    <!-- Page Content -->
    <div class = "container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-offset-md-3">
          @include('layouts.message')
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
          @endif
        </div>
      </div>
    </div>        
    <div class = "container " style = "margin-bottom:25px;">
      @yield('content')
    </div> 
    <footer style = "height:100%; background-color:#e8f2ff;" class = "d-flex justify-content-center" >
    <p>© 2020-2021 All rights reserved </p><a class="navbar-brand" href="#"><object data="{{asset('assets/img/brand/logo.svg')}}" width="40" height="40" > </object></a> 
    </footer>














    <!-- <script src="{{asset('assets/js/purpose.core.js')}}"></script> -->
    <!-- <script src="{{asset('assets/js/purpose.js')}}"></script> -->
  </body>
</html>



