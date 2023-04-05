<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Esawad') }}</title>
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
      <!-- Font Awesome 5 -->
      <!-- <link rel="stylesheet" href="{{asset('/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}"> -->
      <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
      <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
    </head>
<body>
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif

  

<div class="container-fluid mt-5">

  <div class="row">
    <div class="col-sm-12 col-md-3">
      <!-- <img src="{{asset('/CoursePoster/home/1610211473_undraw_Social_life_re_x7t5.png')}}" width = '300px' height = "100px" alt=""> -->
    </div>
    <div class="col-sm-12 col-md-9">
    <h2 class = "my-4">{{$lesson->title}}</h2>
    </div>
  </div>



  <div class="row">
  
   <div class="col-sm-12 col-md-3">
    <ul class="list-group ">
    
    <?php 
    $var = 1; 
    ?>
    @foreach($lessons as $les)
      <li class="list-group-item"> {{$var++}} <a href="/Course/lesson/{{$les->id}}">{{$les->title}}</a></li>
    @endforeach
    </ul>
   </div><!-- end of col-4 -->

   <div class="col-sm-12 col-md-9">
   <div style = "width: 720p">

   <video id="my-video"
    class="video-js m-1 vjs-big-play-centered"
    controls
    width="728p" 
    height="" 
    preload="auto"
    data-setup="{}"
    poster="{{asset('/CoursePoster/home/1610211473_undraw_Social_life_re_x7t5.png')}}" 
    
    >
    <source src='{{asset("$lesson->video_lesson")}}' type="video/mp4" />
    <source src="MY_VIDEO.webm" type="video/webm" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <!-- <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a> -->
    </p>
  </video>
  </div>
 
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <button class="btn btn-outline-primary rounded-0" id = "" onclick = "" >Play</button>
          <button class="btn btn-outline-primary rounded-0" id = "" onclick = "" >Pause</button>
        </div>
      </div>


      <div class = "mt-4">
        <a href = "/Course/lesson/{{$pid}}" class="btn btn-md rounded-0 btn-outline-danger">Back</a>
        <a href = "/Course/lesson/{{$aid}}" class="btn btn-md rounded-0 btn-outline-primary">Next</a>
      </div>
    
   </div><!-- end of col-6 -->

  </div><!-- end of row  -->
</div><!-- end of contianer fluid  -->

<div class="row">
  <div class="col-sm-12 col-md-3">
  </div><!-- end of col-3 -->
  <div class="col-sm-12 col-md-9">
  </div><!-- end of col-9 -->
</div><!-- end of row  -->

 <!-- Purpose Scripts -->
 <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
 <script src="{{asset('assets/js/purpose.core.js')}}" ></script>
 <!-- Purpose JS -->
 <script src="{{asset('assets/js/purpose.js')}}"></script>
 <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>



 <script>
  var video = videojs('my-video' , {
    autoplay: "muted" , 
    controls: true , 
    // fluid: true , 
    // aspectRatio: '4:3 '  ,
    playbackRates :[0.25, 0.5 , 1 , 1.25, 1.5 ,2  , 3] , 
    userAction : {
      hotkeys: true
    }
    , 
    bigButton: true
  });
  


  // video.play();
  // video.pause(); 



</script>


            


    </body>
</html>

