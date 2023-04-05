@extends('layouts.quiz.app')
@section('content')


<div class="row">
<div class="col-md-3">

    <div class="card border-0">
        <div class="text-white">
            <img alt="Image placeholder" class="img-fluid rounded" src='{{asset("$quiz->poster")}}'>
            <div class="card-img-overlay d-flex align-items-end">
                <div class="col text-center">
                    <a href="#" class="h5 text-white ">{{$quiz->created_at}}</a>
                </div>
            </div>
        </div>
    </div><!-- END OF CARD  -->

    <div class="card bg-dark">
        <div class="card-body text-white">{{$quiz->title}}</div>
    </div><!-- END OF CARD  -->
    <div class="card bg-dark">
        <div class="card-body  text-white">{{$quiz->subject_related}}</div>
    </div><!-- END OF CARD  -->
    
    <div class="card bg-dark">
        <div class="card-body  text-white">{{$quiz->level}}</div>
    </div><!-- END OF CARD  -->
    
    <div class="card bg-dark">
        <div class="card-body text-center">
            <a class=" text-white " href="/Quiz/edit/{{$quiz->id}}" > تجدید کورس <i class="fas fa-edit"></i></a>
        </div>
    </div><!-- END OF CARD  -->

    <div class="card bg-dark  ">
        <div class="card-body text-center p-3">
            <form class="" action="/Quiz/delete/{{$quiz->id}}" method="post">
                @csrf  @method('DELETE')
                <button 
                    type="submit" 
                    onclick = "return confirm('آیا مطمیعن استید برای خذف کردن ؟')" 
                    class = "btn btn-danger ">
                    <i class="fas fa-trash-alt"></i> {{__('quiz.delete')}}
                </button>
            </form>
        </div>
    </div><!-- END OF CARD  -->

</div><!-- END OF COL  -->

<div class="col-md-9">
    <nav class="nav nav-pills nav-pills-icon nav-justified mb-2">

        <a class="nav-item nav-link py-3 bg-dark" href="/Mc/create/{{$quiz->id}}">
            <span class="d-block">
                <i class="far fa-check-square fa-3x text-info"></i>
            </span>
            <span class="d-none d-sm-block mt-2 text-white">{{__('quiz.multichoice')}}</span>
        </a>

        <a class="nav-item nav-link py-3 bg-dark " href="/Tf/create/{{$quiz->id}}">
            <span class="d-block">
                <i class="fas fa-chalkboard fa-3x  text-success"></i>
            </span>
            <span class="d-none d-sm-block mt-2 text-white">{{__('quiz.trueFalse')}}</span>
        </a>

        <a class="nav-item nav-link py-3 ml-2 bg-dark " href="/Df/create/{{$quiz->id}}">
            <span class="d-block">
                <i class="fas fa-microscope fa-3x text-primary"></i>
            </span>
            <span class="d-none d-sm-block mt-2 text-white">{{__('quiz.dragDrop')}}</span>
        </a>

        <a class="nav-item nav-link py-3 bg-dark" href="#">
            <span class="d-block">
                <i class="fas fa-shapes fa-3x text-warning"></i>
            </span>
            <span class="d-none d-sm-block mt-2 text-white">{{__('quiz.fillBlank')}}</span>
        </a>

    </nav>
    <hr style = "border-bottom:3px solid black;">

    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">

    <div class="card py-3 px-2 bg-dark text-white "> سولات صحیح و غلط</div>

    @foreach($truefalse as $tf )
        <div class="list-group ">
        <div class="list-group-item bg-dark mb-3">
            <div class="row align-items-center">
            <div class="col-auto">
                <!-- Avatar -->
                <div class=" avatar rounded-circle icon text-white icon-sm ">
                <?php  echo $tf->state == "on" ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>' ?>
                </div>
            </div>
            <div class="col ml-n2">
                <span class="d-block h5 text-white mt-2 mb-3">{{$tf->question}}</span>
                <span class="badge badge-info mr-2 mt-2 ">
                شماره :  {{$tf->score}}  
                </span>
                <span class="badge badge-info mr-2 mt-3">
                زمان : {{$tf->time}} ثانیه    
                </span>
            </div>
            <div class="col-auto">
                <a class="btn btn-success btn-sm mb-1 float-left" href="/Tf/edit/{{$tf->id}}" >
                    <i class="fas fa-edit"></i> تجدید  
                </a>    
                <form class="" action="/Tf/delete/{{$tf->id}}" method="post">
                @csrf  @method('DELETE')
                <button 
                    type="submit" 
                    onclick = "return confirm('آیا مطمیعن استید برای خذف کردن ؟')" 
                    class = "btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i> {{__('quiz.delete')}}
                </button>
                </form>
            </div>
            </div>
        </div>
        </div>

    @endforeach


    <div class="card py-3 px-2 bg-dark text-white "> سولات  چهارجوابه </div>

    <?php $counter = 1; ?>
    @foreach($multichoice as $mc )
    <ul class="list-group  pr-0 mb-3 ">
        <li class="list-group-item d-flex justify-content-between align-items-center bg-dark ">
            <h6 class = "mb-0 text-white">{{$mc->question}}</h6>
            <span class="badge badge-info badge-pill">{{$counter++}}</span>
        </li>
        <li class="list-group-item justify-content-between align-items-center  bg-dark">
            <div class="row text-white">
                <div class="col-md-6 col-lg-6 col-sm-12 {{$mc->correct == 1 ? 'text-danger' : ''}}">{{$mc->ans1}}</div>   
                <div class="col-md-6 col-lg-6 col-sm-12 {{$mc->correct == 2 ? 'text-danger' : ''}}">{{$mc->ans2}}</div>
            </div>
        </li>
        <li class="list-group-item  justify-content-between align-items-center  bg-dark">
            <div class="row text-white">
                <div class="col-md-6 col-lg-6 col-sm-12 {{$mc->correct == 3 ? 'text-danger' : ''}}">{{$mc->ans3}}</div>   
                <div class="col-md-6 col-lg-6 col-sm-12 {{$mc->correct == 4 ? 'text-danger' : ''}}">{{$mc->ans4}}</div>
            </div>
        </li>
        <li class="list-group-item  justify-content-between align-items-center  bg-dark">
            <span class="badge badge-info ">
                زمان : {{$mc->time}} ثانیه    
            </span>
            <span class="badge badge-info mr-2 mt-2 ">
            شماره :  {{$mc->score}}  
            </span>
            <span class="badge badge-info mr-2 mt-2 ">
                جواب درست : {{$mc->correct}}
            </span>
        </li>
        <li class="list-group-item d-flex justify-content-between  bg-dark">
            <a class="btn btn-sm btn-success mr-0" href="/Mc/edit/{{$mc->id}}" >
                <i class="fas fa-edit"></i> تجدید  
            </a>
            <form class="" action="/Mc/delete/{{$mc->id}}" method="post">
            @csrf  @method('DELETE')
            <button 
                type="submit" 
                onclick = "return confirm('آیا مطمیعن استید برای خذف کردن ؟')" 
                class = "btn btn-sm btn-danger">
                <i class="fas fa-trash-alt"></i> {{__('quiz.delete')}}
            </button>
            </form>
        </li>
    </ul>
    @endforeach



    <div class="card py-3 px-2 bg-dark text-white "> سولات  کش و گیر </div>

    <?php $counter = 1; ?>
    @foreach($dragfill as $df )
      
    <ul class="list-group  pr-0 mb-3 ">
        <li class="list-group-item d-flex justify-content-between align-items-center bg-dark ">
            <h6 class = "mb-0 text-white ml-0">{{$df->question_start}} ___________  {{$df->question_end}} </h6>
            <span class="badge badge-info badge-pill">{{$counter++}}</span>
        </li>
        <li class="list-group-item justify-content-between align-items-center  bg-dark">
            <div class="row text-white">
                <div class="col-md-6 col-lg-6 col-sm-12 {{$df->gap == 1 ? 'text-danger' : ''}}">{{$df->ans1}}</div>   
                <div class="col-md-6 col-lg-6 col-sm-12 {{$df->gap == 2 ? 'text-danger' : ''}}">{{$df->ans2}}</div>
            </div>
        </li>
        <li class="list-group-item  justify-content-between align-items-center  bg-dark">
            <div class="row text-white">
                <div class="col-md-6 col-lg-6 col-sm-12 {{$df->gap == 3 ? 'text-danger' : ''}}">{{$df->ans3}}</div>   
                <div class="col-md-6 col-lg-6 col-sm-12 {{$df->gap == 4 ? 'text-danger' : ''}}">{{$df->ans4}}</div>
            </div>
        </li>
        <li class="list-group-item  justify-content-between align-items-center  bg-dark">
            <span class="badge badge-info ">
                زمان : {{$df->time}} ثانیه    
            </span>
            <span class="badge badge-info mr-2 mt-2 ">
            شماره :  {{$df->score}}  
            </span>
            <span class="badge badge-info mr-2 mt-2 ">
                جواب درست : {{$df->gap}}
            </span>
            <span class="badge badge-info mr-2 mt-2 ">
                نوعیت  : {{$df->type == "fill" ? "Fill The Blank" : "Drag and Drop"}}
            </span>
        </li>
        <li class="list-group-item d-flex justify-content-between  bg-dark">
            <a class="btn btn-sm btn-success mr-0" href="/Df/edit/{{$df->id}}" >
                <i class="fas fa-edit"></i> تجدید  
            </a>
            <form class="" action="/Df/delete/{{$df->id}}" method="post">
            @csrf  @method('DELETE')
            <button 
                type="submit" 
                onclick = "return confirm('آیا مطمیعن استید برای خذف کردن ؟')" 
                class = "btn btn-sm btn-danger">
                <i class="fas fa-trash-alt"></i> {{__('quiz.delete')}}
            </button>
            </form>
        </li>
    </ul>
      
      @if($df->type == "drag") 
      {{$df->type}}
      {{$df->question_start}} ===   {{$df->gap}} === {{$df->question_end}}   <br>
      @elseif($df->type == "fill")
      {{$df->type}}
      {{$df->question_start}} ===   {{$df->gap}} === {{$df->question_end}}   <br>
      @endif 
            
    @endforeach



    </div><!-- END OF COL  -->
    </div><!-- END OF ROW INSIDE COL  -->


</div><!-- END OF COL  -->

</div><!-- END OF ROW -->
<!-- END OF COL  -->



<div class="card">
    <div class="card-header">
         <a href="/Quiz" class="btn btn-outline-dark rounded-0" >برگشت</a>
    </div>
</div>
@endsection 
