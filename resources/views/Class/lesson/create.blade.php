<html dir = "rtl" lang="dr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="_token" content="{!! csrf_token() !!}" />
  <title>Document</title>
  <!-- <link href="{{asset('assets/css/purpose.css')}}" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{asset('/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/cooked.css')}}" id="stylesheet">
</head>
<body dir = "rtl">


<form  
id = "upload_form"  
enctype="multipart/form-data" 
onsubmit="return formSubmit(event)"
method = "post">
@csrf

<div class="container mt-5">
  <div class="row justify-content-md-center  ">
    <div class="col-md-8 col-sm-12 col-md-offset-2">
    <div class="card">
    <div class="card-body">
        <h5>{{__('class.subjectLessonFormTitle')}}</h5>
     <hr>
      
      <div class="form-row">
        <div class="col-md-12 mb-3">
          <label for="title">{{__('CourseCreate.lessTitle')}}</label>
          <input type="text" name="title" id = "title" class="form-control"  placeholder="{{__('CourseCreate.lessTitlePlaceholder')}}" required >
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6  mb-3">
          <input type="file" name="video_lesson" id="poster" class="custom-input-file @error('video_poster') is-invalid @enderror "  value="{{ old('video_poster') }}"  required />
          <label for="poster">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.lessPoster')}}</span>
          </label>
          @error('video_lesson') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>
      
        <div class="col-md-6  mb-3">
          <input type="file" name="video_lesson" id="_360p" class="custom-input-file @error('video_lesson') is-invalid @enderror "   required />
          <label for="_360p">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.360')}}</span>
          </label>
          @error('video_lesson') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>
        
        <div class="col-md-6  mb-3">
          <input type="file" name="video_lesson" id="_480p" class="custom-input-file @error('video_lesson') is-invalid @enderror "  required  />
          <label for="_480p">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.480')}}</span>
          </label>
          @error('video_lesson') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>

        <div class="col-md-6  mb-3">
          <input type="file" name="video_lesson" id="_720p" class="custom-input-file @error('video_lesson') is-invalid @enderror "  required  />
          <label for="_720p">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.720')}}</span>
          </label>
          @error('video_lesson') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>


      </div><!-- end of row   -->

      <div class="form-row">
        <div class="col-md-12">
          <progress id = "progressBar" value = "0" max= "100" style = "width:100%; height:40px;"> </progress> 
          <h3 id = "status"></h3>
          <p id = "loaded_n_total"></p>
        </div>
      </div><!-- end of row  -->

      <div class="card-footer">
        <!-- <input type="submit" value=""> -->
        <button type="button"  class="btn btn-secondary" >{{__('CourseCreate.clear')}}</button>
        <!-- <input type="submit" value = "save"   > -->
        <button class="btn btn-primary mr-2" type="submit"  >{{__('CourseCreate.save')}}</button>
        <a href="/Subject/lesson/show/{{$subject_id}}" class="btn btn-primary mr-2"  >برگشت</a>
      </div>


    </div><!-- end of card body  -->
    </div><!-- end of card  -->
    </div><!-- end of col 8  -->
  </div><!-- end of row  -->
</div><!-- end of container  -->
  
</form>

<script>

function _(id ) {return document.getElementById(id); }
 
function formSubmit(e) { 
  e.preventDefault(); 
  try {
    uploadFiles();
    // up();
  } catch (e) {
   throw new Error(e.message);
  }
  return false;
}

function uploadFiles(){
 
  var formdata = new FormData(); 
  var title = _('title');
  var userfiles = document.getElementsByName('video_lesson');
 
  for (var i = 0; i < userfiles.length; i++) {
    var file = userfiles[i].files[0];
    if(file) {
      formdata.append("file_" + i , file); 
    }
  } // end of loop 
  
  formdata.append('type' , 0);
  formdata.append('subject_id' , '{{$subject_id}}');
  formdata.append('title' , title.value);

  // formdata.append('duration' , formdata.get('file_1').duration)
  console.log(formdata.get('subject_id'));

  var ajax = new XMLHttpRequest(); 
  ajax.upload.addEventListener("progress" , progressHandler , false); 
  ajax.addEventListener("load" , completeHandler, false); 
  
  ajax.open("POST" , "/Upload/subject"); 
  // ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.setRequestHeader('X-CSRF-Token', "{{csrf_token()}}");
  ajax.send(formdata);
}

function progressHandler(event){
  _("loaded_n_total").innerHTML = "Uploaded " +  Math.round(event.loaded) + " Byte of " + Math.round(event.total); 
  var percent = (event.loaded / event.total) * 100 ; 
  _("progressBar").value = Math.round(percent); 
  _("status").innerHTML = Math.round(percent) + " % uploading .. "
}// end of progress handler 

function completeHandler(event){
  _("status").innerHTML = event.target.responseText; 
  _("progressBar").value = 0 ; 
} // end of complete handler 

</script>

<script src="{{asset('assets/js/purpose.core.js')}}"></script>
<script src="{{asset('assets/js/purpose.js')}}"></script>
</body>
</html>

