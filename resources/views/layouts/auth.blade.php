<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="ESAWAD">
  <meta name="author" content="Webpixels">
  <title>Esawad</title>
  <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-pro/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
</head>



<body class="application application-offset">

  <!-- Application container -->
  <div class="container-fluid container-application">
    <div class="main-content position-relative">
      @yield('content')
    </div>
  </div>

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="{{asset('/assets/js/purpose.core.js')}}"></script>
  <!-- Purpose JS -->
  <script src="{{asset('assets/js/purpose.js')}}"></script>
</body>
</html>
