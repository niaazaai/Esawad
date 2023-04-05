@extends('layouts.quiz.app')
@section('content')
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-outline-info rounded-0 mt-1" data-toggle="modal" data-target="#modal_1">
        {{__('quiz.createQuiz')}}
        </button>
        <span class = "text-left float-left text-md text-dark font-weight-bold mt-2"> <h2>{{__('quiz.allQuiz')}}</h2></span>
    </div>
</div>




<div class="row">
@foreach($quiz as $qz)
<div class="col-md-3 col-sm-12 col-lg-3">
    <div class="card">
        <a href="/Quiz/show/{{$qz->id}}">
            <img alt="Image placeholder" src="{{$qz->poster}}" class="card-img-top img-fluid" style="height:250px;">
        </a>
    
        <div class="list-group list-group-sm list-group-flush">
            <form class="" action="/Quiz/delete/{{$qz->id}}" method="post">
            @csrf  @method('DELETE')
            <button 
                type="submit" 
                onclick = "return confirm('آیا مطمیعن استید برای خذف کردن ؟')" 
                class = "list-group-item list-group-item-action">
                <i class="fas fa-trash-alt"></i> {{__('quiz.delete')}}
            </button>
            </form>
            <a class="list-group-item list-group-item-action" href="/Quiz/edit/{{$qz->id}}" >
                <i class="fas fa-edit"></i> تجدید کورس 
            </a>
            <a class="list-group-item list-group-item-action text-center" href="/Examination/{{$qz->id}}" >
                <i class="fas fa-play-circle fa-3x text-success"></i>   
            </a>
        </div>
        <div class="card-body text-center">
            <h5 class=" "><a href="/Quiz/show/{{$qz->id}}">{{$qz->title}}</a></h5>
        </div><!-- END OF CARD-BODY  -->
    </div><!-- END OF CARD  -->
</div><!-- END OF COL  -->
@endforeach
</div><!-- END OF ROW  -->


<!-- Modal -->
<div class="modal modal-fluid fade" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center py-4">
                        <h3 class="mb-4">{{__('quiz.quizModalTitle')}}</h3>
<form action="/Quiz/store" method="post"  enctype="multipart/form-data"  >
@csrf 
<div class="form-row">
<div class="col-md-12 col-sm-12 col-lg-12 ">
    <input 
    type="text" 
    name="title" 
    class="form-control @error('title') is-invalid @enderror " 
    id="qtitle" 
    placeholder="{{__('quiz.title')}}" 
    value="{{ old('title') }}" >
    @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
</div><!-- END OF FORM COL -->
</div><!-- END OF FORM ROW -->

<div class="form-row mt-3">
    <div class="col-md-6 col-sm-12 col-lg-6">
        <div class="form-group">
        <input type="file" name="poster"  id="poster"  class="custom-input-file"  />
        <label for="poster"><i class="fa fa-upload"></i>
            <span>{{__('quiz.posterP')}}</span>
        </label>
        </div>
    </div><!-- end of col  -->

    <div class="col-md-6 col-sm-6 col-lg-6 ">
    <div class="form-group">
    <select name="level" class="custom-select"  >
        <option value = "{{__('quiz.easy')}}">{{__('quiz.easy')}}</option>
        <option value = "{{__('quiz.medium')}}">{{__('quiz.medium')}}</option>
        <option value = "{{__('quiz.hard')}}">{{__('quiz.hard')}}</option>
    </select>
    </div>
    </div><!-- END OF FORM COL -->

</div><!-- END OF FORM ROW -->

<div class="form-row">
    <div class="col-md-12 col-sm-12 col-lg-12 " dir = "ltr">
        <div class="btn-group btn-group-toggle  my-4" data-toggle="buttons" >
            <label class="btn btn-success active">
                <input 
                type="radio" name="subject_related"  
                value = "{{__('quiz.math')}}"  id="rb1" 
                autocomplete="off" checked> {{__('quiz.math')}}
            </label>
            <label class="btn btn-success">
                <input 
                type="radio" name="subject_related" 
                value = "{{__('quiz.physic')}}"  id="rb2" 
                autocomplete="off"> {{__('quiz.physic')}}
            </label>
            <label class="btn btn-success">
                <input 
                type="radio" name="subject_related" 
                value = "{{__('quiz.dari')}}" id="rb3" 
                autocomplete="off"> {{__('quiz.dari')}}
            </label>
            <label class="btn btn-success ">
                <input 
                type="radio" name="subject_related"  
                value = "{{__('quiz.pashto')}}"  id="rb4" 
                autocomplete="off" > {{__('quiz.pashto')}}
            </label>
            <label class="btn btn-success">
                <input 
                type="radio" name="subject_related" 
                value = "{{__('quiz.geology')}}" id="rb5" 
                autocomplete="off"> {{__('quiz.geology')}}
            </label>
        </div>
    </div><!-- END OF FORM COL -->
</div><!-- END OF FORM ROW -->

<button class="btn btn-primary " type="submit" >{{__('CourseCreate.save')}}</button>
<button class="btn btn-danger" type="reset" data-dismiss="modal">{{__('quiz.close')}}</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="card">
    <div class="card-header">
        <a href="/dashboard" class="btn btn-outline-dark rounded-0" >برگشت</a>
    </div>
</div>
@endsection 
