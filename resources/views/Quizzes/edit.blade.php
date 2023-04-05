@extends('layouts.quiz.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8 text-center py-4">
        <h3 class="mb-4">{{__('quiz.quizModalTitle')}}</h3>

        <form action="/Quiz/update/{{$quiz->id}}" method="post"  enctype="multipart/form-data"  >
        @csrf 
        @method('put')
        <div class="form-row">
        <div class="col-md-12 col-sm-12 col-lg-12 ">
            <input 
            type="text" 
            name="title" 
            class="form-control @error('title') is-invalid @enderror " 
            id="qtitle" 
            placeholder="{{__('quiz.title')}}" 
            value="{{ $quiz->title}}" >
            @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div><!-- END OF FORM COL -->
        </div><!-- END OF FORM ROW -->

        <div class="form-row mt-3">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <input type="file" name="poster"  id="poster" class="custom-input-file"  />
                <label for="poster"><i class="fa fa-upload"></i>
                    <span>{{$quiz->poster}}</span>
                </label>
                <input type="hidden" name = "no_poster" value = "{{$quiz->poster}}" >
            </div><!-- end of col  -->

            <div class="col-md-6 col-sm-6 col-lg-6 ">
            <div class="form-group">
            <select name="level" class="custom-select"   >
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
        <button class="btn btn-danger" type="reset" data-dismiss="modal">{{__('quiz.clear')}}</button>
        <!-- <button type="button" class="btn btn-success" >Let's do this!</button> -->
        </form>
    
    
    </div>
</div>


<div class="card">
<div class="card-header">
  <a href="/Quiz/show/{{$quiz->id   }}" class="btn btn-outline-dark rounded-0" >برگشت</a>
</div>
</div>

@endsection