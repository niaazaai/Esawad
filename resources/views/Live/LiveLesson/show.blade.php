@extends('layouts.app')
@section('content')

<div class="card hover-shadow-lg text-right ">
  <div class="card-header">
    <div class="d-flex align-items-center">
    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle avatar-lg hover-shadow-lg hover-scale-110">
    <div class="avatar-content mr-3">
       <h6 class="mb-0">{{$lesson->title}}</h6>
       <small class="d-block text-muted font-weight-bold">توسط استاد: <span class = "text-danger">{{$lesson->instructor}}</span> برای -  <span class = "text-danger"> {{$lesson->duration}} </span> دقیقه  </small>
       <span class="text-muted"><i class="fas fa-clock ml-2"></i>{{$lesson->start_time}}</span>
     </div>
    </div>
  </div>
  <div class="card-body"> 
    {{$lesson->description}}
  </div>
</div>

<div class="row justify-content-center">
 <button class="btn btn-outline-danger btn-lg rounded-0">{{__('LivestreamCreate.watchNow')}}</button>
</div>

@endsection