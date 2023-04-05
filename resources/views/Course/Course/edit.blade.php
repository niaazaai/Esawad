@extends('layouts.app')
@section('content')


<div class="container my-3">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-body">
            <h4 class=" ">Course Builder</h4>
            <hr>
            <form action="/Course/update/{{$course->id}}" method="post"  enctype="multipart/form-data" >
            @csrf
            <div class="form-row">
              
              <div class="col-md-8 mb-3">
                <label for="1011">Course Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="1011" placeholder="i.e History " value="{{ $course->title }}" >
                @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>

              <div class="col-md-2 mb-3">
               <label for="1011">Duration</label>
               <input type="number" name="duration" class="form-control @error('duration') is-invalid @enderror"  value="{{ $course->duration }}" placeholder="1 hour"  >
               @error('duration') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>

              <div class="col-md-2 mb-3">
               <label for="1011">Lectures</label>
               <input type="number" name="lectures" class="form-control @error('lectures') is-invalid @enderror"  value="{{ $course->lectures }}" placeholder="3 videos"  >
               @error('lectures') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>

            </div>

            <div class="form-row">             
              <div class="col-md-12 mb-3">
                <label for="validationDefault02">Course Description</label>
                <textarea name="description" rows="8" cols="80" class="form-control @error('description') is-invalid @enderror" id="validationDefault02"  >{{$course->description }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>

            <div class="form-row">
            
              <div class="col-md-4 mb-3">
                <label for="">Course Date</label>
                <input type="text" name="date" class="form-control @error('date') is-invalid @enderror"  value="{{ $course->date }}" data-toggle="date" placeholder="2021-01-01">
                @error('text') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>

              <div class="col-md-4 mb-3">
                <label for="">Course Level</label>
                <select name="level" class="custom-select"   >
                    <option value="Beginner" selected >Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
              </div>

             <div class="col-md-4 mb-3">
              <label for="">Course Catagory</label>
               <input type="text" name="catagory" class="form-control @error('catagory') is-invalid @enderror"  value="{{ $course->catagory }}" placeholder="i.e Math"  >
               @error('catagory') <div class="invalid-feedback">{{ $message }} </div> @enderror
             </div>
             
            </div>

            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="requirement01">Write your course requirement</label>
                <textarea name="requirement" rows="5" cols="80" class="form-control @error('requirement') is-invalid @enderror"    id="requirement01"  placeholder="Here is your requirement"> {{ $course->requirement }}</textarea>
                @error('requirement') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
          </form>
        </div> <!-- end card-body-->
      </div> <!-- end card-->
    </div> <!-- end col -->
  </div>
</div>
@endsection
