@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('assets/libs/swiper/dist/css/swiper.min.css')}}">
  <section class="slice">
    <div class="container">
     <a href="LiveLesson/create" class = "btn btn-outline-primary">{{__('LivestreamCreate.addLesson')}}</a>
    </div>
    <hr>
    <div class="container">
      <div class="mb-0 text-center">
        <h3 class=" ">بخش دروس زنده</h3>
        <div class="fluid-paragraph mt-3">
          <p class="lead lh-180"> در این بخش تمام دروس زنده نشر می شود با فشار دادن یکی از این بخش ها شما میتوانید که به صنف های جاری اشتراک کنید  .</p>
        </div>
      </div>         

              <div class="row justify-content-center">
                <div class="col-lg-11">
                  <div class="swiper-js-container overflow-hidden">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3" style="cursor: grab;">
                      <div class="swiper-wrapper" style="transform: translate3d(-338.333px, 0px, 0px); transition-duration: 0ms;">
                        
                        @foreach($liveLesson as $lesson)
                        <div class="swiper-slide p-4" style="width: 338.333px;">
                          <a href="/LiveLesson/show/{{$lesson->id}}">
                          <div class="card bg-gradient-primary px-3 py-3 mb-0">
                          <div class="card-body">
                              <h5 class="h4 text-white">{{$lesson->title}}</h5>
                              <p class="mt-2 mb-0 text-white text-truncate">توسط: {{$lesson->instructor}}</p>
                              <hr class = "mt-3 mb-2">
                              <span class = "text-white">{{$lesson->start_date}} {{$lesson->start_time}}</span> 
                          </div>
                          </div><!-- end of card -->
                          </a>
                        </div><!-- end of swiper  -->
                        @endforeach
                      
                      </div><!-- end of swiper wraper  -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center swiper-pagination-clickable swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                  </div><!-- end of swiper container -->
                  
                </div>
              </div>
            </div>
          </section>

<hr style = 'border-bottom:3px solid black'>
<div class="container">
     <a href="LiveCourse/create" class = "btn btn-outline-primary">{{__('LivestreamCreate.addCourse')}}</a>
    </div>
    <hr>
<section class="slice">

    <div class="container">
      <div class="mb-0 text-center">
        <h3 class=" ">بخش کورس های زنده</h3>
        <div class="fluid-paragraph mt-3">
          <p class="lead lh-180"> در این بخش تمام کورس زنده نشر می شود با فشار دادن یکی از گزینه ها در این بخش ها شما میتوانید که به کورس  های جاری اشتراک کنید  .</p>
        </div>
      </div>         
              <div class="row justify-content-center">
                <div class="col-lg-11">
                  <div class="swiper-js-container overflow-hidden">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3" style="cursor: grab;">
                      <div class="swiper-wrapper" style="transform: translate3d(-338.333px, 0px, 0px); transition-duration: 0ms;">
                        @foreach($courses as $course)
                        <div class="swiper-slide p-4" style="width: 338.333px;">
                          <a href="/LiveCourse/show/{{$course->id}}">
                          <div class="card bg-gradient-primary px-3 py-3 mb-0">
                          <div class="card-body">
                              <h5 class="h4 text-white">{{$course->title}}</h5>
                              <p class="mt-2 mb-0 text-white text-truncate">توسط: {{$course->instructor}}</p>
                              <hr class = "mt-3 mb-2">
                              <span class = "text-white">{{$course->start_date}} {{$course->start_time}}</span> 
                          </div>
                          </div><!-- end of card -->
                          </a>
                        </div><!-- end of swiper  -->
                        @endforeach
                      </div><!-- end of swiper wraper  -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center swiper-pagination-clickable swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                  </div><!-- end of swiper container -->
                  
                </div>
              </div>
            </div>
          </section>
<script src="{{asset('assets/libs/swiper/dist/js/swiper.min.js')}}"></script>
@endsection


