@extends('layouts.auth')
@section('content')

      <!-- Page content -->
      <div class="page-content">
        <div class="min-vh-100 py-5 d-flex align-items-center">
          <div class="w-100">
            <div class="row justify-content-center">
              <div class="col-sm-8 col-lg-5">
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">
                    <div class="mb-2">
                      <h6 class="h3">Create account</h6>
                      <span class = "m-3">
                       @include('layouts.message')
                      </span>
                    </div>

                    <form  method="POST" action="{{ route('register') }}">
                    @csrf
                      <div class="form-group">
                        <label class="form-control-label">Username</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                          </div>
                          <input type="text" name="name" class="form-control" id="" placeholder="Ahmad" value = "{{old('name')}}"  required autofocus autocomplete="name" >
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
                    
                      <!-- <div class= "py-3 pl-3 border" style = "border-radius:4px;">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="1" name="who" value = "Student"class="custom-control-input active"  >
                          <label class="custom-control-label" for="1">I am student</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="2" name="who" value = "Teacher" class="custom-control-input" >
                            <label class="custom-control-label" for="2">I am teacher</label>
                        </div>
                      </div> -->



                      <div class="mt-4">
                        <button type="submit" class="btn btn-lg text-white" style = "background-color:#0ddaff;">
                          <span class="btn-inner--text">Create my account</span>
                        </button>
                      </div>
                    </form>


                  </div>
                  <div class="mx-3">
                  @if ($errors->any())
                    <div class="alert alert-danger mb-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div> 
                  @endif
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
      
@endsection