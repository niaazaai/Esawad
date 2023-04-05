@extends('layouts.app')
@section('content')
<div class="container my-3">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-body">
            <h4 class=" ">{{__('CourseCreate.formTitle')}}</h4>
            <hr>
            <form action="/Course/store" method="post"  enctype="multipart/form-data" >
            @csrf
            <div class="form-row">
              <div class="col-md-8 mb-3">
                <label for="1011">{{__('CourseCreate.title')}}</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="1011" placeholder="{{__('CourseCreate.titlePlaceholder')}}" value="{{ old('title') }}" >
                @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
              <div class="col-md-2 mb-3">
               <label for="1011">{{__('CourseCreate.duration')}}</label>
               <input type="number" name="duration" class="form-control @error('duration') is-invalid @enderror"  value="{{ old('duration') }}" placeholder="{{__('CourseCreate.durationPlaceholder')}}"  >
               @error('duration') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
              <div class="col-md-2 mb-3">
               <label for="1011">{{__('CourseCreate.lectures')}}</label>
               <input type="number" name="lectures" class="form-control @error('lectures') is-invalid @enderror"  value="{{ old('lectures') }}" placeholder="{{__('CourseCreate.lecturesPlaceholder')}}"  >
               @error('lectures') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>
            <div class="form-row">             
              <div class="col-md-12 mb-3">
                <label for="validationDefault02">{{__('CourseCreate.description')}}</label>
                <textarea name="description" rows="8" cols="80" class="form-control @error('description') is-invalid @enderror" id="validationDefault02" placeholder = "{{__('CourseCreate.descriptionPlaceholder')}}" >{{ old('description') }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="">{{__('CourseCreate.date')}}</label>
                <input type="text" name="date" class="form-control @error('date') is-invalid @enderror"  value="{{ old('date') }}" data-toggle="date" placeholder="2021-01-01">
                @error('text') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
              <div class="col-md-4 mb-3">
                <label for="">{{__('CourseCreate.level')}}</label>
                <select name="level" class="custom-select"   >
                    <option value="{{__('CourseCreate.Beginner')}}" selected >{{__('CourseCreate.Beginner')}}</option>
                    <option value="{{__('CourseCreate.Intermediate')}}">{{__('CourseCreate.Intermediate')}}</option>
                    <option value="{{__('CourseCreate.Advanced')}}">{{__('CourseCreate.Advanced')}}</option>
                </select>
              </div>
             <div class="col-md-4 mb-3">
              <label for="">{{__('CourseCreate.catagory')}}</label>
               <input type="text" name="catagory" class="form-control @error('catagory') is-invalid @enderror"  value="{{ old('catagory') }}" placeholder="{{__('CourseCreate.catagoryPlaceholder')}}"  >
               @error('catagory') <div class="invalid-feedback">{{ $message }} </div> @enderror
             </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="requirement01">{{__('CourseCreate.requirement')}}</label>
                <textarea name="requirement" rows="5" cols="80" class="form-control @error('requirement') is-invalid @enderror"    id="requirement01"  placeholder="{{__('CourseCreate.requirementPlaceholder')}}"> {{ old('requirement') }}</textarea>
                @error('requirement') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>
            <button class="btn btn-primary" type="submit">{{__('CourseCreate.save')}}</button>
            <button class="btn btn-danger" type="reset">{{__('CourseCreate.clear')}}</button>
          </form>
        </div> <!-- end card-body-->
      </div> <!-- end card-->
    </div> <!-- end col -->
  </div>
</div>
@endsection
