
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="ESAWAD">
  <title>Esawad</title>
  <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-pro/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/purpose.css')}}" id="stylesheet">
</head>



<body class="">




<div class="container text-center my-3 border py-4">
    <h3> Hi, {{auth()->user()->name}}</h3>
</div>


<div class="row">
    <div class="col">
        
      <!-- Page content -->
      <div class="page-content">
        <div class="min-vh-100 py-5 d-flex align-items-center">
          <div class="w-100">
            <div class="row justify-content-center">
              <div class="col-sm-8 col-lg-5">
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">
                    
                    <form  method="POST" action="{{ route('register') }}">
                    @csrf
                      <div class="form-group">
                        <label class="form-control-label">Username</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                          </div>
                          <input type="text" name="name" class="form-control" id="" placeholder="Ahmad" value = ""  required autofocus autocomplete="name" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Email address</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                          </div>
                          <input type="email" name = "email" class="form-control" id="input-email" placeholder="name@example.com">
                        </div>
                      </div>

                      <div class="form-group ">
                        <label class="form-control-label">Password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-key"></i></span>
                          </div>
                          <input type="password" name = "password" class="form-control" id="input-password" placeholder="********">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Confirm password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-key"></i></span>
                          </div>
                          <input type="password"  name = "password_confirmation" class="form-control" id="input-password-confirm" placeholder="********">
                        </div>
                      </div>
                    
                      <div class= "py-3 pl-3 border" style = "border-radius:4px;">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="1" name="who" value = "Student"class="custom-control-input active"  >
                          <label class="custom-control-label" for="1">I am student</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="2" name="who" value = "Teacher" class="custom-control-input" >
                            <label class="custom-control-label" for="2">I am teacher</label>
                        </div>
                      </div>



                      <div class="mt-4">
                        <button type="submit" class="btn btn-lg text-white" style = "background-color:#0ddaff;">
                          <span class="btn-inner--text">Create my account</span>
                        </button>
                      </div>
                    </form>


                  </div>
              
                  </div>
                 
                  <div class="card-footer px-md-5"><small>Already have an acocunt?</small>
                    <a href="{{route('login')}}" class="small font-weight-bold text-info">Sign in</a>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
</div>







  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <!-- <script src="{{asset('/assets/js/purpose.core.js')}}"></script> -->
  <!-- Purpose JS -->
  <!-- <script src="{{asset('assets/js/purpose.js')}}"></script> -->
</body>
</html>











