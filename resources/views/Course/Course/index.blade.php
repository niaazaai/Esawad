@extends('layouts.course.app')
@section('content')




<div class="container mt-5">

<div class="card">
    <div class="card-header align-items-center">
        <a href="/Course/create" class="btn btn-outline-info rounded-0 mt-1" >{{__('CourseCreate.createCourse')}}</a>
        <span class = "text-left float-left text-md text-dark font-weight-bold mt-2"> <h2>{{__('CourseCreate.allCourse')}}</h2></span>
    </div>
</div>

  <div class="row">
    @foreach($courses as $course)
    <div class="col-sm-12 col-md-4 col-lg-4">
    <div class="card">
         <div class="card-body text-center  ">
             <img class="card-img-top" src='{{asset("$course->course_poster")}}'  class="img-fluid">
             <h5 class="card-title mt-3">{{$course->title}}</h5>
             <a href="/Course/show/{{$course->id}}" class="btn btn-outline-primary "> دیدن کورس </a>
         </div>
         <div class=" card-footer text-center ">
            <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" 
            type="button" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false"> عملیه های کورس </button>
            <div class="dropdown-menu dropdown-menu-dark bg-dark">
                <a class="dropdown-item" href="/Course/edit/{{$course->id}}" > تجدید کورس <i class="fas fa-edit"></i></a>
                <a class="dropdown-item" href="/Course/edit/{{$course->id}}" > حذف کورس <i class="fas fa-trash-alt"></i></a>

            </div>
            </div>
         </div>
    </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
