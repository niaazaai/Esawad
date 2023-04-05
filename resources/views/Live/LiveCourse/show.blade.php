@extends('layouts.app')
@section('content')

<div class="card hover-shadow-lg text-right ">
  <div class="card-header">
    <div class="d-flex align-items-center">
    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle avatar-lg hover-shadow-lg hover-scale-110">
    <div class="avatar-content mr-3">
       <h6 class="mb-0">{{$course->title}}</h6>
       <small class="d-block text-muted font-weight-bold">توسط استاد: <span class = "text-danger">{{$course->instructor}}</span>  </small>
       <span class="text-muted"><i class="fas fa-clock ml-2"></i>{{$course->start_time}}</span>
     </div>
    </div>
  </div>
  <div class="card-body"> 
    {{$course->description}}
  </div><!-- end of card-body  -->
    <hr style = "border-bottom:3px solid black">

<div dir = "ltr" class="table-responsive">
    <table class="table table-cards align-items-center ">
        @foreach($lessons as $lesson)
        <tr >
            <td ><a class="btn btn-outline-danger rounded-0">{{__('LivestreamCreate.watchNow')}}</a></td>
            <td><h5 class = "m-0">{{$lesson->title}}</h5> </td>
            </tr>
        <tr class="table-divider"></tr>
        @endforeach
    </table>
</div>































<!-- end of card -->
</div><!-- end of card -->

<!-- <div class="row justify-content-center">
 <button class="btn btn-outline-danger btn-lg rounded-0">{{__('LivestreamCreate.watchNow')}}</button>
</div> -->

@endsection

