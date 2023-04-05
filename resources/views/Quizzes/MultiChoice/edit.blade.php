
@extends('layouts.quiz.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 text-center py-4 ">
        <h3 class="mb-4">{{__('quiz.quizMultiChoiceTitle')}}</h3>
        <form action="/Mc/update" method="post"  enctype="multipart/form-data"  >
        @csrf  @method('put')

        <input type="hidden" value = "{{$mc->quiz_id}}" name = "quiz_id">
        <input type="hidden" value = "{{$mc->id}}" name = "id">

        <div class="form-row">
        <div class="col-md-12 col-sm-12 col-lg-12 ">
            <input type="text" name="question" 
            class="form-control @error('question') is-invalid @enderror " id="" 
            placeholder="{{__('quiz.question')}}" value="{{ $mc->question }}" >
            @error('question') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div><!-- END OF FORM COL -->
        </div><!-- END OF FORM ROW -->

        <div class="form-row mt-3">
        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="form-group">
                <input 
                type="text" 
                name="ans1" 
                class="form-control @error('ans1') is-invalid @enderror " 
                id="ans1" 
                placeholder="{{__('quiz.ans1')}}" 
                value="{{ $mc->ans1 }}" >
                @error('ans1') <div class="invalid-feedback">{{ $message }} </div> @enderror
            </div>
        </div><!-- end of col  -->
        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="form-group">
                <input 
                type="text" 
                name="ans2" 
                class="form-control @error('ans2') is-invalid @enderror " 
                id="ans2" 
                placeholder="{{__('quiz.ans2')}}" 
                value="{{ $mc->ans2 }}" >
                @error('ans2') <div class="invalid-feedback">{{ $message }} </div> @enderror
            </div>
        </div><!-- end of col  -->
        </div><!-- END OF FORM ROW -->


        <div class="form-row">
        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="form-group">
                <input 
                type="text" 
                name="ans3" 
                class="form-control @error('ans3') is-invalid @enderror " 
                id="ans3" 
                placeholder="{{__('quiz.ans3')}}" 
                value="{{ $mc->ans3 }}" >
                @error('ans3') <div class="invalid-feedback">{{ $message }} </div> @enderror
            </div>
        </div><!-- end of col  -->
        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="form-group">
                <input 
                type="text" 
                name="ans4" 
                class="form-control @error('ans4') is-invalid @enderror " 
                id="ans4" 
                placeholder="{{__('quiz.ans4')}}" 
                value="{{ $mc->ans4 }}" >
                @error('ans4') <div class="invalid-feedback">{{ $message }} </div> @enderror
            </div>
        </div><!-- end of col  -->
        </div><!-- END OF FORM ROW -->


        <div class="form-row">
        <div class="col-md-4 col-sm-12 col-lg-4">
            <div class="form-group">
            <select name="time" dir = "ltr" class="custom-select"  >
                <option value="{{ $mc->time }}">{{ $mc->time }} sec </option>
                <option value = "5">5 sec</option>
                <option value = "10">10 sec</option>
                <option value = "15">15 sec</option>
                <option value = "20">20 sec</option>
                <option value = "30">30 sec</option>
                <option value = "45">45 sec</option>
                <option value = "60">60 sec</option>
                <option value = "75">75 sec</option>
                <option value = "120">120 sec</option>
                <option value = "300">300 sec</option>
            </select>
            @error('time') <div class="invalid-feedback">{{ $message }} </div> @enderror
            </div>
        </div><!-- end of col  -->
        <div class="col-md-4 col-sm-12 col-lg-4">
            <div class="form-group">
                <input 
                type="number" 
                name="score" 
                class="form-control @error('score') is-invalid @enderror " 
                id="score" 
                placeholder="{{__('quiz.score')}}" 
                value="{{ $mc->score }}" >
                @error('score') <div class="invalid-feedback">{{ $message }} </div> @enderror
            </div>
        </div><!-- end of col  -->
        <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="form-group">
            <select name="correct" dir = "ltr" class="custom-select"  >
            
            <option selected value = "{{ $mc->correct }}">{{ $mc->correct }}</option>
                <option value = "1">{{__('quiz.correct_1')}}</option>
                <option value = "2">{{__('quiz.correct_2')}}</option>
                <option value = "3">{{__('quiz.correct_3')}}</option>
                <option value = "4">{{__('quiz.correct_4')}}</option>
            </select>
            </div>
        </div><!-- end of col  -->
        </div><!-- END OF FORM ROW -->
        <button class="btn btn-primary float-right mr-0" type="submit" >{{__('CourseCreate.save')}}</button>
        <button class="btn btn-danger float-right mr-3" type="reset">{{__('quiz.clear')}}</button>
        <a href="/Quiz/show/{{$mc->quiz_id}}" class="btn btn-outline-dark rounded-0 float-left" >برگشت</a>
        </form>
    </div>
</div>

@endsection 
