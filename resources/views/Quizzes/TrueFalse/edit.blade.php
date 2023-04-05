
@extends('layouts.quiz.app')
@section('content')
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center py-4">
                        <h3 class="mb-4">{{__('quiz.quizModalTitle')}}</h3>
<form action="/Tf/update" method="post"  enctype="multipart/form-data"  >

<input type="hidden" value = "{{$quiz->quiz_id}}" name = "quiz_id">
<input type="hidden" value = "{{$quiz->id}}" name = "id">
@csrf  @method('put')
<div class="form-row ">
<div class="col-md-9 col-sm-12 col-lg-9 ">
    <input 
    type="text" 
    name="question" 
    class="form-control @error('question') is-invalid @enderror " 
    id="qq" 
    placeholder="{{__('quiz.question')}}" 
    value="{{$quiz->question }}" >
    @error('question') <div class="invalid-feedback">{{ $message }} </div> @enderror
</div><!-- END OF FORM COL -->
    
<!--<span class = "" style = "float:right">{{__('quiz.false')}}</span>  -->
<div class="col-md-3 col-sm-12 col-lg-3 mb-3">
    <div class="custom-control custom-switch">
        <input type="checkbox" name = "state" <?php echo $quiz->state == 'on' ? 'checked' : '';  ?>  class="custom-control-input" id="cs1">
        <label class="custom-control-label" for="cs1">{{__('quiz.true')}}</label>
    </div>
</div>

</div><!-- END OF FORM ROW -->
<div class="form-row mt-3">
    <div class="col-md-6 col-sm-12 col-lg-6">
        <div class="form-group">
            <input 
            type="number" 
            name="score" 
            class="form-control @error('score') is-invalid @enderror " 
            id="score" 
            placeholder="{{__('quiz.score')}}" 
            value="{{ $quiz->score }}" >
            @error('score') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>
    </div><!-- end of col  -->

    <div class="col-md-6 col-sm-6 col-lg-6 ">
    <div class="form-group">
    <select name="time" dir = "ltr" class="custom-select"  >
        <option value = "5">5 sec</option>
        <option value = "10">10 sec</option>
        <option value = "15">15 sec</option>
        <option value = "20">20 sec</option>
        <option value = "30">30 sec</option>
        <option value = "45">45 sec</option>
        <option value = "60">60 sec</option>
        <option value = "75">75 sec</option>
        <option value = "120">120 sec</option>
    </select>
    </div>
    </div><!-- END OF FORM COL -->

</div><!-- END OF FORM ROW -->

<button class="btn btn-primary float-right" type="submit" >{{__('CourseCreate.save')}}</button>
<button class="btn btn-danger float-right mr-3" type="reset">{{__('quiz.clear')}}</button>
<a href="/Quiz/show/{{$quiz->quiz_id}}" class="btn btn-outline-dark rounded-0 float-left" >برگشت</a>

</form>
                    </div>
                </div>

@endsection 
