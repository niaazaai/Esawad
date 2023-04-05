@extends('layouts.course.app')
@section('content')

  <!-- Navbar primary -->
  <nav class="navbar navbar-horizontal navbar-expand-lg bg-primary">
      <div class="container">
          <a class="navbar-brand" href="#">Edit Section</a>
          <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-primary">
              <ul class="navbar-nav ml-lg-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/Course/create/{{$course->id}}">
                        <button type="button" class="btn btn-sm btn-outline-white" >
                          علاوه نمودن درس <i class="fas fa-plus"></i> 
                        </button>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" >
                        <button type="button" class="btn btn-sm btn-outline-white" data-toggle="modal" data-target="#exampleModal1">
                          علاوه نمودن پیش زمینه <i class="fas fa-plus"></i> 
                        </button>
                      </a>
                  </li>
                  <li  class="nav-item">
                    <a class="nav-link" >
                    <button type="button" class=" btn btn-sm btn-outline-white" data-toggle="modal" data-target="#exampleModal">
                      علاوه نمودن سولات و جوابات <i class="fas fa-plus"></i> 
                    </button>
                    </a>
                  </li>

                  <li  class="nav-item">
                    <a class="nav-link " href="/Course/edit/{{$course->id}}"> 
                    <button type="button" class=" btn btn-sm btn-outline-white" >
                    تجدید کورس <i class="fas fa-edit"></i> 
                    </button>
                    </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
  @endif

<div class="container mt-5">

  <!-- TITLE for the course  -->
  <div class="row mb-4  ">
    <div class="col-md-12">
      <p class="display-3 font-weight-bold text-dark text-right">{{$course->title}}</p>
    </div>
  </div>

  <div class="row">
  <div class="col-md-9">
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-tabs nav-bordered mb-3 customtab">
            <li class="nav-item">
                <a href="#home-b1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">{{__('CourseCreate.desc')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#curriculum1" data-toggle="tab" aria-expanded="true" class="nav-link ">
                    <i class="mdi mdi-home-variant d-lg-none d-block "></i>
                    <span class="d-none d-lg-block"> {{__('CourseCreate.curr')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#faq_tab" data-toggle="tab" aria-expanded="false" class="nav-link ">
                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">{{__('CourseCreate.faq')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#settings-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">{{__('CourseCreate.preq')}}</span>
                </a>
            </li>
        </ul>

        <!-- course image  -->
        <div class="tab-content">
        <div class="tab-pane show active" id="home-b1">
        <div class="card border-0">
            <div class="text-white">
                <img alt="Image placeholder" class="img-fluid " src='{{asset("$course->course_poster")}}'>
                <div class="card-img-overlay d-flex align-items-end">
                    <div class="col text-left">
                        <a href="#" class="h4 text-white d-block">{{$course->catagory}}</a>
                        <a href="#" class="text-white">
                          {{ \Carbon\Carbon::parse($course->date)->diffForHumans() }}
                        </a>
                    </div>
                </div>
            </div>
        </div> 
        <hr class="divider divider-icon" />
        <div class="text-justify">
            <p class="lead mt-2 ">{{$course->description}}</p>
        </div>
        </div><!-- END OF TAB PANE -->


        <!-- FAQ TAB ACCORDION -->
        <div class="tab-pane" id="faq_tab">
          <div id="accordion-1" class="accordion accordion-stacked">
            @foreach($course_faq as $faq)
               <div class="card">
                 <div class="card-header py-4" id="heading-1-1"
                 data-toggle="collapse" role="button" data-target="#collapse-1-1"
                 aria-expanded="false" aria-controls="collapse-1-1">
                     <h6 class="mb-0"><i class="fas fa-bookmark mr-5"></i> {{$faq->question}}</h6>
                 </div>
                 <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                     <div class="card-body">
                         <p>{{$faq->answer}}</p>
                     </div>
                 </div>
               </div>
             @endforeach
           </div><!-- END OF ACCORDION -->
          </div>
          <!--END OF  FAQ TAB ACCORDION -->


          <!-- PREQ TAB  -->
          <div class="tab-pane" id="settings-b1">
          <div class="list-group">
          @foreach($course_preq as $preq)
            <div class="list-group-item mb-3">
              <div class="d-flex align-items-center justify-content-between ">
                <div class="flex-fill pl-3 text-limit ">
                    <!-- <h6 class="progress-text mb-3 text-sm d-block text-limit">{{$preq->course_name}} </h6> -->
                    <div class="d-flex justify-content-between  text-muted text-right mt-1">
                      <span class="font-weight-bold text-warning">{{$preq->course_name}}</span>
                      {{$preq->success_rate}}%
                    </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
          </div>
          <!--END OF  PREQ TAB  -->

          <!-- CURRECULUM TAB  -->
          <div class="tab-pane" id="curriculum1">
            <div class="list-group">
              @foreach($lessons as $lesson)
            <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
            <div>
             <a href = "/Course/lesson/{{$lesson->id}}" class="text-lg text-muted">
              {{$lesson->title}}
             </a>
            </div>         
            <div class="text-right">
              <div class="actions">
                <a class="action-item" href="/Course/lesson/{{$lesson->course_id}}" >
              <button type="button" class="btn btn-primary btn-icon-label">
                  <span class="btn-inner--icon">
                      <i class="fas fa-play"></i>
                  </span>
                  <span class="btn-inner--text">Play now</span>
              </button>
              </a>
              </div>
            </div>
          </div>
            </div>
              @endforeach
            </div>

            

          </div><!-- end TAB PANE-->
          <!-- END OF CURRECULUM TAB -->
          </div><!-- END OF TAB CONTENT -->

      </div> <!-- end card-body-->
   </div> <!-- end card-->
</div><!-- END OF COL  -->

<div class="col-md-3 ">
  <div class="row">
    <div class="container mb-3 text-center">
      <a href = "/Course/lesson/1" class="btn btn-lg btn-outline-success rounded-0"  >
        شروع نمودن کورس 
      </a>
    </div>
  </div>
  

  <table class="table table-cards  ">
    <tr class= "">
    <td>
      
      <div class="media align-items-center">
        <div class="media-body text-limit">
            <h6 class="text-sm d-block text-limit mb-0">{{__('CourseCreate.enrolled')}}</h6>
            <span class="d-block text-sm text-muted">{{$course->enrolled}} شاگرد</span>
        </div>
        <div class="ml-3">
          <div class="icon text-success"><i class="fa fa-users icon-md" aria-hidden="true"></i></div>
        </div>
       
      </div>
      
    </td>
    </tr>
    <tr class= "table-divider"></tr>

    <tr class= "">

    <td>
      <div class="media align-items-center">
        <div class="media-body text-limit">
            <h6 class="text-sm d-block text-limit mb-0"> {{__('CourseCreate.duration')}} </h6>
            <span class="d-block text-sm text-muted">{{$course->duration}} ساعت</span>
        </div>
        <div class="">
          <div class="icon text-success"><i class="fa fa-hourglass-start icon-md" aria-hidden="true"></i></div>
        </div>
      </div>
    </td>

    </tr>

    <tr class= "table-divider"></tr>

    <tr class= "">
    <td>
      <div class="media align-items-center">
        
        <div class="media-body text-limit">
            <h6 class="text-sm d-block text-limit mb-0"> {{__('CourseCreate.lectures')}}</h6>
            <span class="d-block text-sm text-muted"> {{$course->lectures}} لکچر</span>
        </div>
        
        <div class="">
          <div class="icon text-success"><i class="fa fa-book icon-md" aria-hidden="true"></i></div>
        </div>
        
      </div>
    </td>
    </tr>

<tr class= "table-divider"></tr>

<tr class= "">
<td>
  <div class="media align-items-center">
    
    <div class="media-body text-limit">
        <h6 class="text-sm d-block text-limit mb-0">{{__('CourseCreate.level')}}</h6>
        <span class="d-block text-sm text-muted">{{$course->level}}</span>
    </div>

    <div class="">
      <div class="icon text-success"><i class="fa fa-bolt icon-md" aria-hidden="true"></i></div>
    </div>
  </div>
</td>
</tr>
<tr class= "table-divider"></tr>

<tr class= "">
<td>
  <div class="media align-items-center">
    
    <div class="media-body text-limit">
        <h6 class="text-sm d-block text-limit mb-0">{{__('CourseCreate.catagory')}}</h6>
        <span class="d-block text-sm text-muted">{{$course->catagory}}</span>
    </div>

    <div class="">
      <div class="icon text-success"><i class="fa fa-bookmark icon-md" aria-hidden="true"></i></div>
    </div>
  </div>
</td>
</tr>
</table>



  
</div><!-- END OF COL -->

</div><!-- END OF ROW  -->
</div><!-- END OF CONTAINTER  -->

  <!-- Navbar primary -->
  <nav class="navbar navbar-horizontal navbar-expand-lg bg-secondary">
      <div class="container">
          <div class="collapse navbar-collapse" id="navbar-primary">
              <ul class="navbar-nav ml-lg-auto">

                  <li  class="nav-item">
                    <a class="nav-link " href="/Course"> 
                    <button type="button" class=" btn btn-sm btn-outline-primary m-0" >
                     برگشت <i class="fas fa-chevron-left"></i> 
                    </button>
                    </a>
                  </li>

              </ul>
          </div>
          </div>
  </nav>

<!-- FAQ MODAL FORM  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">{{__('CourseCreate.faqFromTitle')}}</h5>

      </div>
      <form class="" action="/Course/faq/store" method="post">
      <div class="modal-body">
        @csrf
        <input type="hidden" name="course_id" value="{{$course->id}}">
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="question01">{{__('CourseCreate.faqQuestion')}}</label>
            <input type="text" name="question" class="form-control  @error('question') is-invalid @enderror" id="question01" placeholder="{{__('CourseCreate.faqQuestionPlaceholder')}}" required >
            @error('question') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="answer01">{{__('CourseCreate.faqAnswer')}}</label>
            <textarea name="answer" rows="5" cols="80" class="form-control  @error('answer') is-invalid @enderror" id="answer01"  placeholder="{{__('CourseCreate.faqAnswerPlaceholder')}}" required></textarea>
            @error('answer') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('CourseCreate.clear')}}</button>
        <button class="btn btn-primary mr-2" type="submit">{{__('CourseCreate.save')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- COURSE PREQ MODAL -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">{{__('CourseCreate.preqFromTitle')}}</h5>
      </div>
      <form class="" action="/Course/preqs/store" method="post">
      <div class="modal-body">
        @csrf
        <input type="hidden" name="course_id" value="{{$course->id}}">
        <div class="form-row">
          <div class="col-md-9 mb-3">
            <label for="course_name">{{__('CourseCreate.preqCourseName')}}</label>
            <input type="text" name="course_name" class="form-control  @error('course_name') is-invalid @enderror" id="course_name" placeholder="{{__('CourseCreate.preqCourseNamePlaceholder')}}" required >
            @error('course_name') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>

          <div class="col-md-3 mb-3">
            <label for="success_rate">{{__('CourseCreate.preqSuccessRate')}}</label>
            <input type="number" name="success_rate" class="form-control  @error('success_rate') is-invalid @enderror" id="success_rate" placeholder="{{__('CourseCreate.preqSuccessRatePlaceholder')}}%"  required>
              @error('success_rate') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('CourseCreate.clear')}}</button>
        <button class="btn btn-primary mr-2" type="submit">{{__('CourseCreate.save')}}</button>
      </div>
    </form>
    </div>
  </div>
</div>



@endsection