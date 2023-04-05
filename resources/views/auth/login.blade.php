
@extends('layouts.auth')

@section('content')

      
      <!-- Page content -->
      <div class="page-content">
        <div class="min-vh-100 py-5 d-flex align-items-center">
          <div class="w-100">
            <div class="row justify-content-center">
              <div class="col-sm-8 col-lg-4">
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">
                    <div class="mb-5 text-center">
                      <h6 class="h3">Login</h6>
                      <p class="text-muted mb-0">Sign in to your account to continue.</p>
                    </div>
                    <span class="clearfix"></span>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                      <div class="form-group">
                        <label class="form-control-label">Email address</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                          </div>
                          <input type="email" name = "email" class="form-control" id="input-email" placeholder="name@example.com">
                        </div>
                      </div>


                      <div class="form-group mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <label class="form-control-label">Password</label>
                          <div class="mb-2">
                          @if (Route::has('password.request'))
                            <a class="small text-muted text-underline--dashed border-primary" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                           @endif
                          </div>
                        </div>

                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-key"></i></span>
                          </div>
                          <input type="password" name = "password" class="form-control" id="input-password" placeholder="Password">
                        </div>
                      </div>
                      <div class="mt-4">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                          <span class="btn-inner--text">Sign in</span>
                        </button></div>
                    </form>
                  </div>
                  <div class="card-footer px-md-5"><small>Not registered?</small><a href="{{route('register')}}" class="small font-weight-bold">Create account</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  @endsection