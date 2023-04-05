 <!-- Page Heading -->
 <header class="" dir = "ltr">
    <nav id="navbar-main" class="navbar navbar-expand-lg "  style = "border-bottom: 5px solid black">
    <div class="container-fluid">
    
    <!-- Brand logo -->
    <a class="navbar-brand" href="#"><object data="{{asset('assets/img/brand/logo.svg')}}" width="70" height="70" > </object></a>                                  
    <!-- sandwich button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>                     
    <!-- Navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}">خانه </a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('course.create')}}">ایجاد  کورس</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('livecourse')}}">پخش زنده</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('classmodule')}}">صنف ها</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('quiz')}}">امتحانات</a></li>              
    </ul>
    <!-- Logout Button  -->
    <form class="" action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" class = "btn btn-sm btn-primary btn-icon d-none d-lg-inline-flex " name="button"> <span class="btn-inner--icon mr-1"><i class="fas fa-logout"></i></span>خروج</button>
    </form>

    </div>
    </div>
    </nav>
</header>