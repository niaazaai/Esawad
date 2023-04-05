@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header align-items-center">
        <a href="/ClassModule/create" class="btn btn-outline-info rounded-0" > {{__('class.classCreate')}}</a>
        <span class = "text-left float-left text-md text-dark font-weight-bold mt-2"> <h2>{{__('class.allClass')}}</h2></span>
    </div>
</div>

<div class="row flex-sm-fill">
@foreach($classes as $class)
<div class="col-md-4 col-sm-12 col-lg-4">
     
<div class="card bg-dark opacity-container text-white overflow-hidden shadow border-0">
  <a href="/ClassModule/show/{{$class->id}}">
    <div class="card-img-bg" style="background-image: url('{{$class->class_poster}}');"></div>
    <span class="mask bg-gradient-primary opacity-6 hover-opacity-1"></span>
    <div class="card-body px-5 py-5 d-flex  justify-content-center">
        <div style="padding:50px 0 ;" style = "">
            <h3 class="h2 text-white font-weight-bold ">{{$class->title}}</h3>
        </div>
    </div>
  </a>
</div>

<div class="card text-center py-3 ">
    <div class="dropdown">
    <button class="btn btn-dark dropdown-toggle" 
        type="button" data-toggle="dropdown" 
        aria-haspopup="true" aria-expanded="false"> عملیه های کورس </button>
        <div class="dropdown-menu dropdown-menu-dark ">
            <a class="dropdown-item" href="/ClassModule/edit/{{$class->id}}" > تجدید کورس <i class="fas fa-edit"></i></a>
            <form class="" action="/ClassModule/delete/{{$class->id}}" method="post">
            @csrf  @method('DELETE')
            <button type="submit" onclick = "return confirm('آیا مطمیعن استید برای خذف کردن ؟')"  class = "dropdown-item ml-0"> حذف کردن صنف <i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
</div><!-- end of card   -->
</div> <!-- end of col  -->

@endforeach 
</div><!-- end of row  -->
@endsection
