@extends('layouts.app')
@section('content')
<div class="container my-3">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-body">
            <h4 class=" ">{{__('class.subjectCardTitle')}}</h4>
            <hr>
            <form action="/Subject/update/{{$subject->id}}" method="post"  enctype="multipart/form-data" >
            @csrf @method('PUT')
            <input type="hidden" name = "class_id" value = "{{$subject->class_id}}">

            <div class="form-row mb-3 mr-0">
              <div class="col-md-6 col-sm-12 col-lg-6 ">
                <label for="331">{{__('class.subjectTitle')}}</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="331" placeholder="{{__('class.subjectTitlePlace')}}" value="{{$subject->title}}" >
                @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>

             <div class="col-md-6 col-sm-12 col-lg-6">
             <input type="hidden" name = "poster" value = "{{$subject->subject_poster}}">
             <label for="file-1"> {{__('class.subjectPoster')}}</label>
                <input type="file" 
                    name="subject_poster" 
                    id="file-1" 
                    class="custom-input-file "  />
                <label for="file-1">
                  <i class="fa fa-upload"></i>
                  <span>{{__('class.subjectPoster')}}</span>
                </label>
             </div><!-- end of col  -->

            </div><!-- end of form row  -->
           
            <button class="btn btn-primary " type="submit">{{__('CourseCreate.save')}}</button>
            <button class="btn btn-danger" type="reset">{{__('CourseCreate.clear')}}</button>

          </form>
        </div> <!-- end card-body-->
      </div> <!-- end card-->
    </div> <!-- end col -->
  </div>
</div>
@endsection
