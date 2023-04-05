 <!-- Page Heading -->
 <header class="" dir = "ltr">
    <nav id="navbar-main" class="navbar navbar-expand-lg "  style = "border-bottom: 0px solid black;  ">
    <div class="container-fluid">
    <!-- -->
    <!-- Brand logo -->
    <a class="navbar-brand" href="#"><object data="{{asset('assets/img/brand/logo.svg')}}" width="70" height="70" > </object></a>                                  
    <!-- sandwich button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>                     
    <!-- Navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style = "font-size:36px;">
        <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}"  style = "font-size:17px;"><i class="fas fa-home " style = ""></i> خانه </a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('course')}}"   style = "font-size:17px;"> کورس ها</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('livecourse')}}"  style = "font-size:17px;">پخش زنده</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('classmodule')}}"  style = "font-size:17px;">صنف ها</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('quiz')}}"  style = "font-size:17px;">امتحانات</a></li>              
    </ul>
    <!-- Logout Button  -->
    <form class="" action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" class = "btn btn-sm btn-outline-info rounded-0  " > 
        <span class="btn-inner--icon mr-1"><i class="fa fa-logout"></i></span>خروج</button>
    </form>

    </div>
    </div>
    </nav>
</header>
