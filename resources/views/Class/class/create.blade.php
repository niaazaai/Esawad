@extends('layouts.app')
@section('content')
<div class="container my-3">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-body">
            <h4 class=" ">{{__('class.formTitle')}}</h4>
            <hr>
            <form action="/ClassModule/store" method="post"  enctype="multipart/form-data" >
            @csrf

            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="1021">{{__('class.title')}}</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="1021" placeholder="{{__('class.titlePlaceholder')}}" value="{{ old('title') }}" >
                @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div><!-- end of form row  -->

          <div class="form-row">   

            <div class="col-md-4 mb-3">
                <label for="">{{__('class.start_date')}}</label>
                <input type="text" name="start_date" class="form-control @error('start_date') is-invalid @enderror"  value="{{ old('start_date') }}" data-toggle="date" placeholder="2021-01-01">
                @error('start_date') <div class="invalid-feedback">{{ $message }} </div> @enderror
            </div>

            <div class="col-md-4 mb-3">
               <label for="1011">{{__('class.subject_count')}}</label>
               <input type="number" name="subject_count" class="form-control @error('subject_count') is-invalid @enderror"  value="{{ old('subject_count') }}" placeholder="4"  >
               @error('subject_count') <div class="invalid-feedback">{{ $message }} </div> @enderror
             </div>
            
             <div class="col-md-4 ">
             <label for="file-1">تصویربرای صنف</label>
                <input type="file" 
                    name="class_poster" 
                    id="file-1" 
                    class="custom-input-file "  />
                <label for="file-1">
                  <i class="fa fa-upload"></i>
                  <span>{{__('class.class_poster')}}</span>
                </label>
             </div><!-- end of col  -->

          </div><!-- end of form row  -->

            <div class="form-row">             
              <div class="col-md-12 mb-3">
                <label for="10212">{{__('class.description')}}</label>
                <textarea name="description" rows="8" cols="80" class="form-control @error('description') is-invalid @enderror" id="10212" placeholder = "{{__('class.descriptionPlaceholder')}}" >{{ old('description') }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div><!-- end of form row  -->

            <button class="btn btn-primary" type="submit">{{__('CourseCreate.save')}}</button>
            <button class="btn btn-danger" type="reset">{{__('CourseCreate.clear')}}</button>
          
          </form>
        </div> <!-- end card-body-->
      </div> <!-- end card-->
    </div> <!-- end col -->
  </div>
</div>
@endsection
