
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
  
</head>
<body class = "bg-dark" dir = "rtl">
<ul class="navbar nav justify-content-end bg-success">
  <li class="nav-item ">
    <a class="nav-link text-white" href="/Quiz">برگشت به صفحه امتحانات</a>
  </li>
</ul>

<div class="container">
  <div class="row justify-content-center " >
    <div class="col-sm-12 col-md-9 col-lg-8 mt-5 text-center text-white">
        <hr style = "border-top: 5px solid white;">
        <h3 class = " text-white">Your grade  </h3>
        <h1 class = "display-1 text-white">{{$result->grade}}</h1>
        <h2 class = "text-white">- {{$result->score}} -</h2>
        <hr style = "border-top: 5px solid white;">
    </div>
  </div>
</div>

<!-- <script src="{{asset('assets/js/purpose.core.js')}}"></script> -->
<!-- <script src="{{asset('assets/js/purpose.js')}}"></script> -->
</body>
</html>