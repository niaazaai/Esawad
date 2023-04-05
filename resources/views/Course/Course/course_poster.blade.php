
@extends('layouts.app')

@section('content')

<div class="container my-3">
    <form action="{{route('store.poster')}}"  method="post"  enctype="multipart/form-data" >
    @csrf
    <input type="hidden" name = "course_id" value = "{{$course_id}}">

    <div class="row">
     <div class="col-sm-12 col-md-6">
        <input type="file" name="course_poster" id="file-1" class="custom-input-file "  value="{{ old('course_poster') }}"  />
        <label for="file-1"><i class="fa fa-upload mb-1"></i><span>Choose a poster ...</span></label>
     </div>
     <button class = "btn btn-primary " type ="submit">Upload </button>
    </div>

    </form>
</div>

@endsection
