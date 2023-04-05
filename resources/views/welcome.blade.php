@extends('layouts.websiteApp')
@section('content')
<header class="header header-transparent" id="header-main">
  <!-- Topbar -->
  <div id="navbar-top-main" class="navbar-top  navbar-dark border-bottom">
    <div class="container px-0">
      <div class="navbar-nav align-items-center">
        <div class="d-none d-lg-inline-block">
        <a class="navbar-brand" href="#"><object data="{{asset('assets/img/brand/logo.svg')}}" width="70" height="70" > </object></a>
        </div>
        <div class="mr-auto">
          <ul class="nav">
            @if (Route::has('login'))
              @auth
                <li class="nav-item">
                  <a href="{{ url('/dashboard') }}" class="nav-link text-sm text-gray-700 underline">Dashboard</a>
                </li>
              @else
                <li class="nav-item">
              <a href="{{ route('login') }}" class=" nav-link text-sm  text-gray-700 underline"> ورود </a>
              </li>
                @if (Route::has('register'))
                  <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link  text-sm text-gray-700 underline">راجستر </a>
                  </li>
                @endif
              @endauth
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="main-content">
<section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main" style="padding-top: 147.4px;" dir = "rtl">
  <div class="section-inner bg-info-light "></div>
  <div class="pt-7 position-absolute middle left-0 col-lg-7 col-xl-6 d-none d-lg-block">
    <figure class="w-100" >
      <object data="{{asset('assets/img/website/main-section-white.svg')}}" style="max-width: 100%;" width="900" height="" > </object>
    </figure>
  </div>
  <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
  </div>
  <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100" >
    <div class="col">
      <div class="row">
        <div class="col-lg-5 col-xl-6 text-center text-lg-right">
            <h2 class="text-white mb-4" >
              <span class="display-4 font-weight-light"> Better Education Better Life</span>
              <span class="d-block">هدف اساسی ما <strong class="font-weight-light">پیشرفت است </strong></span>
            </h2>
            <p class="lead text-white">هدف اساسی ما این پیشرفت در عرصه تعلیم و تربیه اطفال و بزرگسالان این جامعه می باشد</p>
            <p class="lead text-white">این زیربنای تعلیمی تحت توسعه است  </p>
            
           
        </div>
      </div>
    </div>
  </div>
</section>

<section class="slice slice-lg">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col">
          <p class = "display-3 text-info">Why Esawd</p>
      </div>
    </div>
    <div class="row row-grid mt-5">
      <div class="col-lg-4">
        <div class="text-center">
          <div class="px-4 py-5">
              <img alt="Image placeholder" src="{{asset('assets/img/website/why-section-1.svg')}}" class="img-fluid" style="height:190px;">
          </div>
          <div class="px-4 pb-4">
            <h5>
              <a href="sections.html#">Online Examination</a>
            </h5>
            <p class="text-muted">Combine blocks from a range of categories to build pages that are rich in visual style and interactivity Combine blocks from a range .</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="text-center">
          <div class="px-4 py-5">
              <img alt="Image placeholder" src="{{asset('assets/img/website/why-section-2.svg')}}" class="img-fluid" style="height:190px;">
          </div>
          <div class="px-4 pb-4">
            <h5>
              <a href="sections.html#">Online Class</a>
            </h5>
            <p class="text-muted">Combine blocks from a range of categories to build pages that are rich in visual style and interactivity Combine blocks from a range.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="text-center">
          <div class="px-4 py-5">
              <img alt="Image placeholder" src="{{asset('assets/img/website/why-section-3.svg')}}" class="img-fluid" style="height:190px;">
          </div>
          <div class="px-4 pb-4">
            <h5>
              <a href="sections.html#">Courses</a>
            </h5>
            <p class="text-muted">Combine blocks from a range of categories to build pages that are rich in visual style and interactivity Combine blocks from a range.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="slice slice-lg" dir = "ltr">
  <span class="mask  opacity-7"></span>
  <div class="container">
  <div class="row text-center mb-5">
    <div class="col">
        <p class = "display-3 text-info">Our Services</p>
    </div>
  </div>

    <div class="row row-grid">
      <div class="col-lg-6">
      <div class="card mb-4 bg-info-light">
          <div class="card-body text-white">
            <div class="row">
              <div class="col-md-2">
                <span class="d-block text-center h1 mb-0" style="font-family: 'Oswald', sans-serif;">22</span>
              </div>
              <div class="col-md-10 text-center text-md-left">
                <h3 class="h5 mb-0 text-white">Isle of Wight Festival</h3>
                <p class="mb-0">Meet at United Kingdom on June 20th at 20:00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4 bg-primary-light">
          <div class="card-body text-white">
            <div class="row">
              <div class="col-md-2">
                <span class="d-block text-center h1 mb-0" style="font-family: 'Oswald', sans-serif;">22</span>
              </div>
              <div class="col-md-10 text-center text-md-left">
                <h3 class="h5 mb-0 text-white">Isle of Wight Festival</h3>
                <p class="mb-0">Meet at United Kingdom on June 20th at 20:00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4 bg-danger">
          <div class="card-body text-white">
            <div class="row">
              <div class="col-md-2">
                <span class="d-block text-center h1 mb-0" style="font-family: 'Oswald', sans-serif;">25</span>
              </div>
              <div class="col-md-10 text-center text-md-left">
                <h3 class="h5 mb-0  text-white">Isle of Wight Festival</h3>
                <p class="mb-0">Meet at United Kingdom on June 20th at  20:00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4 bg-success-light">
          <div class="card-body text-white">
            <div class="row">
              <div class="col-md-2">
                <span class="d-block text-center h1 mb-0" style="font-family: 'Oswald', sans-serif;">03</span>
              </div>
              <div class="col-md-10 text-center text-md-left">
                <h3 class="h5 mb-0  text-white">Isle of Wight Festival</h3>
                <p class="mb-0">Meet at United Kingdom on June 20th at 20:00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4 bg-white">
          <div class="card-body text-white">
            <div class="row">
              <div class="col-md-2">
                <span class="d-block text-center h1 mb-0" style="font-family: 'Oswald', sans-serif;">05</span>
              </div>
              <div class="col-md-10 text-center text-md-left">
                <h3 class="h5 mb-0  text-dark">Isle of Wight Festival</h3>
                <p class="mb-0 text-dark">Meet at United Kingdom on June 20th at 20:00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4 bg-warning">
          <div class="card-body">
            <div class="row">
              <div class="col-md-2">
                <span class="d-block text-center h1 mb-0" style="font-family: 'Oswald', sans-serif;">05</span>
              </div>
              <div class="col-md-10 text-center text-md-left">
                <h3 class="h5 mb-0  text-white">Isle of Wight Festival</h3>
                <p class="mb-0 text-white">Meet at United Kingdom on June 20th at 20:00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="slice slice-lg">
  <div class="container">
    <div class="row row-grid justify-content-around align-items-center">
      <div class="col-lg-6">
        <div class="">
          <h5 class=" h3">A simple quotes about Student in this platform</h5>
          <p class="lead my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et facilis voluptas asperiores nulla aperiam nostrum sequi eos! Adipisci quam facere, provident possimus incidunt non sapiente aliquid voluptatum excepturi sed.</p>
          <a href="sections.html#" class="link link-underline- font-weight-bold">Join as Student</a>
        </div>
      </div>
      <div class="col-lg-6">
        <img alt="Image placeholder" src="{{asset('assets/img/website/student-section.svg')}}" class="img-fluid img-center">
      </div>
    </div>
  </div>
</section>



<section class="slice slice-lg">
  <div class="container">
    <div class="row row-grid justify-content-around align-items-center">
      <div class="col-lg-6">
        <div class="">
          <h5 class=" h3">A simple quotes about teacher in this platform</h5>
          <p class="lead my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et facilis voluptas asperiores nulla aperiam nostrum sequi eos! Adipisci quam facere, provident possimus incidunt non sapiente aliquid voluptatum excepturi sed.</p>
          <a href="sections.html#" class="link link-underline- font-weight-bold">Join as Teacher</a>
        </div>
      </div>
      <div class="col-lg-6">
        <img alt="Image placeholder" src="{{asset('assets/img/website/teacher-section.svg')}}" class="img-fluid img-center">
      </div>
    </div>
  </div>
</section>




<section class="slice slice-lg">
  <div class="container">
    <div class="row row-grid align-items-center">
      <div class="col-lg-4">
      <img alt="Image placeholder" src="{{asset('assets/img/website/quiz-section.svg')}}" class="img-fluid img-center">
        <div class=" text-lg-left">
          <h3 class="mb-3">Our Quizzes</h3>
          <p class="lead lh-180">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis vel odio totam officiis fuga iste nulla e world's most popular </p>
        </div>
      </div>
      <div class="col-lg-7 ml-lg-auto ">
        <div class="row ml-5 mb-2">
          <div class="col ">
              <a href="" class = "btn btn-lg bg-primary text-white  h3  py-lg-4 font-weight-bold hover-shadow-lg" style = "font-size:24px; padding-left:100px; padding-right:100px;" > Quran Karim</a>
              <a href="" class = "btn btn-lg bg-info-light text-white h3 px-lg-5 py-lg-4 font-weight-bold " style = "font-size:24px;">English </a>
          </div>
        </div>
        <div class="row  ml-5 mb-2">
          <div class="col ">
              <a href="" class = "btn btn-lg btn-warning h3 px-lg-5 py-lg-4 font-weight-bold" style = "font-size:24px; "> Computer</a>
              <a href="" class = "btn btn-lg btn-info h3  py-lg-4 font-weight-bold " style = "font-size:24px; padding-left:85px; padding-right:85px;"> Mathematics</a>
          </div>
        </div>
        <div class="row  ml-5">
        <div class="col ">
              <a href="" class = "btn btn-lg btn-primary h3 px-lg-5 py-lg-4 font-weight-bold ml-5" style = "font-size:24px;"> Dari language </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer-main">
    <div class="footer footer-dark bg-info-light text-dark">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="index.html">
              <img src="{{asset('assets/img/brand/logo.svg')}}" alt="Footer logo" style="height: 100px;">
            </a>
            <p class = "text-dark "> <span class = "text-white">Esawad</span>
              Purpose is a unique and beautiful collection of Lorem ipsum dolor sit amet consectetur adipisicing elit. Error explicabo dolore incidunt iste distinctio ipsum eligendi 
             </p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Account</h6>
            <ul class="list-unstyled">
              <li><a href="" class = "text-dark">Profile</a></li>
              <li><a href="" class = "text-dark">Settings</a></li>
              <li><a href="" class = "text-dark">Billing</a></li>
              <li><a href="" class = "text-dark">Notifications</a></li>
            </ul>
          </div>


          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0 ">
            <h6 class="heading mb-3">About</h6>
            <ul class="list-unstyled text-small ">
              <li><a href="/about" class = "text-dark">About us</a></li>
              <li><a href="/mission" class = "text-dark">Mission</a></li>
              <li><a href="/contact" class = "text-dark">Contact</a></li>
              <li><a href="" class = "text-dark">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0 text-dark">
            <h6 class="heading mb-3">Company</h6>
            <ul class="list-unstyled">
              <li><a href=""  class = "text-dark">Terms</a></li>
              <li><a href=""  class = "text-dark">Privacy</a></li>
              <li><a href=""  class = "text-dark">Support</a></li>
            </ul>
          </div>

          

        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top ">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              © 2021 <a href="https://esawad.com" class="font-weight-bold" target="_blank">Esawad</a>. All rights reserved.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link text-danger" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link text-dark" href="https://www.facebook.com/Esawad-235990751107794" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-dark" href="" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>



@endsection










