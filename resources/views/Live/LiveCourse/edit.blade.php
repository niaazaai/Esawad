@extends('layouts.app')
@section('content')
<div class="container my-3">
  <div class="card">
  <div class="card-header">{{__('LivestreamCreate.formTitle')}}</div>
    <div class="card-body">
      <form class="" action="/LiveCourse/update/{{$courses->id}}" method="post"  enctype="multipart/form-data">
      @csrf
      @method('PUT')

        
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="2011">{{__('LivestreamCreate.title')}}</label>
            <input type="text" 
                  name="title" 
                  class="form-control @error('title') is-invalid @enderror " 
                  id="2011" placeholder="{{__('LivestreamCreate.titlePlaceholder')}}"  
                  value="{{$courses->title}}"  
                  required>
            @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>
        </div>


        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="3011">{{__('LivestreamCreate.description')}}</label>
            <textarea name="description" 
                      rows="8" 
                      cols="80" 
                      class="form-control @error('description') is-invalid @enderror " 
                      id="3011" 
                      placeholder="{{__('LivestreamCreate.descriptionPlaceholder')}}" >
                      {{$courses->description}}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>
        </div>

        <div class="form-row">
          
          <div class="col-md-6 mb-3">
            <label for="4011">{{__('LivestreamCreate.start_date')}}</label>
            <input type="text"  
                id = "4011" 
                name="start_date" 
                data-toggle="date" 
                class="form-control @error('start_date') is-invalid @enderror "  
                placeholder="1-1-2021" 
                value = "{{ $courses->start_date }}" >
            @error('start_date') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>

          <div class="col-md-6 mb-3">
            <label for="5011">{{__('LivestreamCreate.start_time')}}</label>
            <input  type="text" 
                    id = "5011" 
                    name="start_time" 
                    class="form-control  @error('start_time') is-invalid @enderror" 
                    data-toggle="time"
                    placeholder="8:00" 
                    value = "{{$courses->start_time}}" >
            @error('start_time') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>
         
        </div> <!-- end of form row  -->

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <input type="text" 
            id = "5011" 
                   name="instructor" 
                   class="form-control @error('instructor') is-invalid @enderror "  
                   placeholder="{{__('LivestreamCreate.instructor')}}"  
                   value = "{{ $courses->instructor }}"
                   required>
            @error('instructor') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>

          <div class="col-md-6 mb-3">
          
            <input type="file" 
                   name="course_poster" 
                   id="file-1" 
                   class="custom-input-file"  />
            <label for="file-1">
                <i class="fa fa-upload"></i>
                <span>{{__('LivestreamCreate.course_poster')}}</span>
            </label>
          </div>

        </div><!-- end of form row  -->


        <button class="btn btn-primary" type="submit">{{__('LivestreamCreate.save')}}</button>
        <button class="btn btn-danger" type="submit">{{__('LivestreamCreate.clear')}}</button>
      </form>
    </div>
  </div>
</div>
@endsection 




