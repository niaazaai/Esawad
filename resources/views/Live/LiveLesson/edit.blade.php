@extends('layouts.app')
@section('content');
      <div class="card">
      <div class="card-header">{{__('LivestreamCreate.lessonFormTitle')}}</div>
        <div class="card-body">
          <form class="" action="/LiveLesson/store" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="live_course_id" value="{{$lesson->course_id}}">

            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="781">{{__('LivestreamCreate.lessonTitle')}}</label>
                <input type="text" 
                id="781" 
                name="title" 
                class="form-control @error('title') is-invalid @enderror "
                placeholder="{{__('LivestreamCreate.lessonTitlePlace')}}"
                value="{{ $lesson->title }}"
                required  
                required>
                @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="782">{{__('LivestreamCreate.lessonDescription')}}</label>
                <textarea name="description" 
                rows="8" 
                cols="80" 
                class="form-control @error('description') is-invalid @enderror "
                placeholder="{{__('LivestreamCreate.lessonDescriptionPlace')}}"
                id="782" required>{{$lesson->description  }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>

            <div class="form-row">
      
              <div class="col-md-6 mb-3">
              <label for="783">{{__('LivestreamCreate.lessonStartDate')}}</label>
                <input type="text" 
                name="start_date" 
                data-toggle="date" 
                class="form-control @error('start_date') is-invalid @enderror "
                placeholder="1-1-2021"
                value="{{ $lesson->start_date }}"
                required>
                @error('start_date') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>

              <div class="col-md-6 mb-3">
                <label for="784">{{__('LivestreamCreate.lessonStartTime')}}</label>
                <input type="text" 
                id = "784"
                name="start_time" 
                data-toggle="time" 
                class="form-control @error('start_time') is-invalid @enderror "
                placeholder="8:00 AM"
                value="{{ $lesson->start_time }}"
                required>
                @error('start_time') <div class="invalid-feedback">{{ $message }} </div> @enderror
              </div>
            </div>
<!-- end of form row  -->
            
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <input type="text" 
            id = "5011" 
                   name="instructor" 
                   class="form-control @error('instructor') is-invalid @enderror "  
                   placeholder="{{__('LivestreamCreate.instructor')}}"  
                   value = "{{ $lesson->instructor }}"
                   required>
            @error('instructor') <div class="invalid-feedback">{{ $message }} </div> @enderror
          </div>

          <div class="col-md-6 mb-3">
          
            <input type="file" 
                   name="course_poster" 
                   id="file-1" 
                   value = '{{ $lesson->course_poster }}'
                   class="custom-input-file"  />
            <label for="file-1">
                <i class="fa fa-upload"></i>
                <span>{{__('LivestreamCreate.lessonPoster')}}</span>
            </label>
          </div>

        </div><!-- end of form row  -->
        
      

            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <select name="lesson_type" class="custom-select"  >
                      <option value = "LL">{{__('LivestreamCreate.independantLiveLesson')}}</option>
                      <option value = "CLL">{{__('LivestreamCreate.courseLiveLesson')}}</option>
                  </select>
               </div>
             </div>
            
             <div class="col-md-6">
                <div class="form-group">
                  <select name="duration" class="custom-select"  >
                      <option value = "10">10 Minutes</option>
                      <option value = "20">20 Minutes</option>
                      <option value = "30">30 Minutes</option>
                      <option value = "60">60 Minutes</option>
                      <option value = "120">120 Minutes</option>
                  </select>
               </div>
             </div>

            </div><!-- end of form row  -->

          <button class="btn btn-primary" type="submit">{{__('LivestreamCreate.save')}}</button>
          <button class="btn btn-danger" type="submit">{{__('LivestreamCreate.clear')}}</button>
          </form>
        </div>
      </div>


     
        

@endsection 