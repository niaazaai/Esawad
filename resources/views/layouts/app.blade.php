<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir = "rtl">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Esawad') }}</title>
      <!-- Font Awesome 5 -->
      <link rel="stylesheet" href="{{asset('/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/cooked.css')}}" id="stylesheet">
      <style type="text/css"> 
      @font-face {font-family: Amiri-Bold;src: url('{{asset('assets/fonts/Amiri-Bold.ttf') }}');font-weight:bold;}.customfont {font-family: "Amiri-Bold";}</style>
  </head>
  <body class="customfont text-right">
    @include('layouts.navbar')
    <!-- Page Content -->
    <div class = "container" dir= "ltr" style = "text-align:left;">
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


    <div class = "container mb-3">
      @yield('content')
    </div> 
    <!--  Support Terms  Privacy-->
    <footer  dir= "ltr" style = "line-height:10px; height:100px; padding: 50px 0; text-align:center; background-color:#e8f2ff;"  >
      <p>© 2021  All rights reserved  </p>
    </footer>


    <script src="{{asset('js/cooked.js')}}"></script>
  </body>
</html>



