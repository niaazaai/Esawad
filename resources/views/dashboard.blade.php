<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="NIAZAAI">
  <title>Esawad</title>
<style>
  @font-face {font-family: Amiri-Bold;src: url('{{asset('assets/fonts/Amiri-Bold.ttf') }}');font-weight:bold;}.customfont {font-family: "Amiri-Bold";}</style>
</style>
  <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
  <link rel="stylesheet" href="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.css')}}">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
</head>

<body class="application application-offset customfont" >

  <!-- Application container -->
  <div class="container-fluid container-application ">
    <!-- Sidenav -->
    <div class="sidenav " id="sidenav-main">
      <!-- Sidenav header -->
      <div class="sidenav-header d-flex align-items-center">
          <a class="navbar-brand" href="#"><object data="{{asset('assets/img/brand/logo.svg')}}" width="70" height="70" > </object></a>                                  
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- User mini profile -->
      <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
        <!-- Avatar -->
        <div>
          <a href="" class="avatar rounded-circle avatar-xl">
            <img alt="Image placeholder" src="../assets/img/theme/light/team-1-800x800.jpg" class="">
          </a>
          <div class="mt-4">
            <h5 class="mb-0 text-white">{{auth()->user()->name}}</h5>
            <span class="d-block text-sm text-white opacity-8 mb-3">{{auth()->user()->who}}</span>
          </div>
        </div>
        
      </div>
      <!-- Application nav -->
      <div class="nav-application clearfix">
        <a href="home.html" class="btn btn-square text-sm active">
          <span class="btn-inner--icon d-block"><i class="far fa-home fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">{{__('dashboard.home')}}</span>
        </a>
        <a href="/Course" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-project-diagram fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">{{__('dashboard.course')}}</span>
        </a>
        <a href="/ClassModule" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-tasks fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">{{__('dashboard.class')}}</span>
        </a>
        <a href="/LiveCourse" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-columns fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">{{__('dashboard.livestream')}}</span>
        </a>
        <a href="/profile" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-user-ninja fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">{{__('dashboard.profile')}}</span>
        </a>
        <a href="Quiz" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="far fa-receipt fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">{{__('dashboard.quiz')}}</span>
        </a>
      </div>

    </div>
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <nav class="navbar navbar-main navbar-expand-lg bg-info-light " id="navbar-main">
        <div class="container-fluid">
          <!-- Brand + Toggler (for mobile devices) -->
          <button class="navbar-toggler bg-dark py-2 ml-3" type="button" style = "background-color:transparent;" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
          </button>
          <!-- User's navbar -->
          <div class="navbar-user d-lg-none ml-auto">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item text-white">
                <a href="" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="far fa-bars"></i></a>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="home.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/light/team-4-800x800.jpg">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                 
                  <a href="user/profile.html" class="dropdown-item">
                    <i class="far fa-user"></i>
                    <span>My profile</span>
                  </a>
                  <a href="account/settings.html" class="dropdown-item">
                    <i class="far fa-cog"></i>
                    <span>Settings</span>
                  </a>
                 
                  <div class="dropdown-divider"></div>
                  <a href=""   class="dropdown-item">
                    <i class="far fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>

                </div>
              </li>
            </ul>
          </div>

          <!-- Navbar nav -->
          <div class="collapse navbar-collapse navbar-collapse-fade bg-info-light navbar-info-light" style = "background-color:" id="navbar-main-collapse">
            <ul class="navbar-nav align-items-lg-center " style = "background-color:" >
              <!-- Overview  -->
            
              <li class="border-top opacity-2 my-2"></li>
              <!-- Home  -->
              <li class="nav-item ">
                <a class="nav-link pl-lg-0" href="/dashboard">
                {{__('dashboard.home')}}
                </a>
              </li>
              <!-- Application menu -->
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link" href="/Course" >
                  {{__('dashboard.course')}}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ClassModule">
                {{__('dashboard.class')}}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/Quiz">
                {{__('dashboard.quiz')}}
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/LiveCourse">
                {{__('dashboard.livestream')}}
                </a>
              </li>
             
            </ul><!-- Right menu -->
            <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
              <li class="nav-item">
                <a href="home.html#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="far fa-bars"></i></a>
              </li>

              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="home.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media media-pill align-items-center">
                    <span class="avatar rounded-circle">
                      <img alt="Image placeholder" src="../assets/img/theme/light/team-4-800x800.jpg">
                    </span>
                    <div class="ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name}}</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <!-- <a href="home.html#!" class="dropdown-item">
                    <i class="far fa-cog"></i>
                    <span>Settings</span>
                  </a> -->
                  <div class="dropdown-divider"></div>
                  <form class="" action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" 
                    class = "btn btn-sm btn-warning btn-icon d-none d-lg-inline-flex " 
                    name="button"> <span class="btn-inner--icon mr-1">
                    <i class="far fa-sign-out-alt"></i></span>Logout</button>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Page content -->
      <div class="page-content">
        <!-- Page title -->

        <div class="page-title">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 mb-2 mb-md-0">
              <h5 class="h3 font-weight-400 mb-0 text-white">Salam , {{auth()->user()->name}} !</h5>
            </div>
          </div>
        </div>
        @if(auth()->user()->who == 'student')

        @endif 
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="card card-fluid">
              <div class="card-body">
              

                  @foreach($NumberOfQuiz as $quiz)
                  <div class="row align-items-center mb-4">
                    <div class="col-auto">
                      <div class="progress-circle progress-sm" id="progress-1" data-progress="{{$quiz->score}}" data-color="info"></div>
                    </div>
                    <div class="col">
                      <a class="d-block h6 mb-0">{{$quiz->score}} Score</a>
                      <a class="text-sm text-muted">Your Grade was {{$quiz->grade}}</a>
                    </div>
                  </div>
                  @endforeach
              </div>
            </div>
          </div><!-- END OF COL 4  -->
          <div class="col-lg-4 col-sm-6">
            <div class="card card-fluid">
              <div class="card-body text-center d-flex flex-column justify-content-center">
                <h5 class="mb-4">Congratulations!</h5>
                <div class="progress-circle progress-lg mx-auto" id="progress-4" data-progress="78" data-text="23" data-textclass="h1" data-color="primary"></div>
                <p class="mt-4 mb-0">
                 test test.
                </p>
              </div>
            </div>
          </div><!-- END OF COL 4  -->
          </div>


          <div class="row">
          <div class="col-lg-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="mb-0">آخرین کورس ها  </h6>
                </div>
              </div>
            </div>
            <div class="list-group list-group-flush">
            @foreach($EnrolledCourses as $course)
            <a href="" class="list-group-item list-group-item-action">
                <div class="media align-items-center">
                  <div class="mr-3">
                    <img alt="Image placeholder" src="{{$course->course_poster}}" class="avatar  rounded-circle">
                  </div>
                  <div class="media-body">
                    <h6 class="text-sm d-block text-limit mb-0">{{$course->title}}</h6>
                    <span class="d-block text-sm text-muted">{{$course->catagory}}</span>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-md text-dark font-weight-bold ml-3">
                      {{$course->enrolled}}
                    </span>
                  </div>
                </div>
            </a>
              @endforeach
            </div>
          </div>
          </div><!-- END OF COL 4  -->
          </div>



          </div><!-- end of page content -->

      <!-- Footer -->
      <div class="footer pt-5 pb-4 footer-light" id="footer-main">
        <div class="row text-center text-sm-left align-items-sm-center">
          <div class="col-sm-6">
            <p class="text-sm mb-0">&copy; 2021 <a href="" class="h6 text-sm" target="_blank">Esawad</a>. All rights reserved.</p>
          </div>
          <div class="col-sm-6 mb-md-0">
            <ul class="nav justify-content-center justify-content-md-end">
              <!-- <li class="nav-item dropdown border-right">
                <a class="nav-link" href="home.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img alt="Image placeholder" src="../assets/img/icons/flags/us.svg">
                  <span class="h6 text-sm mb-0">Dari</span>
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link text-dark" href="">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark" href="">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark pr-0" href="">Privacy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="{{asset('assets/js/purpose.core.js')}}"></script>
  <!-- Page JS -->
  <script src="{{asset('assets/libs/progressbar.js/dist/progressbar.min.js')}}"></script>
  <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <!-- <script src="{{asset('assets/libs/moment/min/moment.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script> -->
  <!-- Purpose JS -->
  <script src="{{asset('assets/js/purpose.js')}}"></script>
  <!-- Demo JS - remove it when starting your project -->
  <!-- <script src="{{asset('assets/js/demo.js')}}"></script> -->

</body>

</html>
