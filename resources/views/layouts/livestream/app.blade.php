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
      <style type="text/css"> @font-face {font-family: ElMessiri-Bold;src: url('{{asset('assets/fonts/ElMessiri-Bold.ttf') }}');font-weight:bold;}.customfont {font-family: "ElMessiri-Bold";}</style>
  </head>
  <body class="customfont text-right">
    @include('layouts.livestream.navbar')
    <!-- Page Content -->
    <div class = "container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-offset-md-3">
          @include('layouts.message')
        </div>
      </div>
    </div>        
            
    <main>
      @yield('content')
    </main>
    <script src="{{asset('js/cooked.js')}}"></script>
  </body>
</html>



