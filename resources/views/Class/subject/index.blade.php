@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
  <h2>{{__('class.subjectPageTitle')}}</h2> 
  <div class="text-right">
    <div class="actions">
      <a class="action-item" href="/Subject/create/{{$class_id}}" >
      <button type="button" class="btn btn-primary btn-icon-label  rounded-0">
        <span class="btn-inner--icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="btn-inner--text">{{__('class.subjectCreate')}}</span>
      </button>
      </a>
    </div>
  </div>
</div>
</div>

<hr>

<div class="row flex-sm-fill">
@foreach($subjects as $subject)
<div class="col-md-4 col-sm-12 col-lg-4">
  
<div class="card bg-dark opacity-container text-white overflow-hidden shadow border-0">
  <a href="/Subject/lesson/show/{{$subject->id}}">
    <div class="card-img-bg" style="background-image: url('{{$subject->subject_poster}}');"></div>
    <span class="mask bg-gradient-primary opacity-6 hover-opacity-1"></span>
    <div class="card-body px-5 py-5 d-flex  justify-content-center">
        <div style="padding:50px 0 ;" style = "">
            <h3 class="h2 text-white font-weight-bold ">{{$subject->title}}</h3>
        </div>
    </div>
  </a>
</div>

<div class="card py-3 text-center" >
  <div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" 
   type="button" data-toggle="dropdown" 
   aria-haspopup="true" aria-expanded="false"> عملیه ها </button>
      <div class="dropdown-menu dropdown-menu-dark ">
          <a class="dropdown-item" href="/Subject/edit/{{$subject->id}}" > تجدید مضمون <i class="fas fa-edit"></i></a>
          <form class="" action="/Subject/delete/{{$subject->id}}" method="post">
          @csrf  @method('DELETE')
          <button type="submit" onclick = "return confirm('آیا مطمیعن استید ؟')"; class = "dropdown-item ml-0"> حذف کردن مضمون <i class="fas fa-trash-alt"></i> </button>
          </form>
      </div>
  </div><!-- end of dropdown  -->
</div><!-- end of card  -->

</div> <!-- end of col  -->
@endforeach 
</div><!-- end of row  -->


<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <!-- <h2></h2>  -->
    <div class="text-right">
        <a class="action-item" href="/ClassModule" >
        <button type="button" class="btn btn-outline-dark rounded-0">
            <span class="btn-inner--text">برگشت</span>
        </button>
        </a>
    </div>
  </div>
</div>
@endsection