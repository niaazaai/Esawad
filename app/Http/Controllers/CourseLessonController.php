<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseLesson;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CourseLessonController extends Controller {

public function show($id){
  $lessons = DB::table('course_lessons')
  ->where('course_id','=', $id )
  ->get();

  if(is_null($lessons)){
    return redirect()->back()->with('warning','دروس در این کورس وجود ندارد');
  }//end of if 
  else {
    return view('Course.lesson.show' , ['lesson' => $lessons , 'course_id' => $id] );
  }
}// end of show function 

public function store(Request $request) {


  // return $request->all();
  // validate all field
  $this->validate($request , [
    'title' => 'required|max:255' , 
    'video_lesson' => 'required|file|mimes:mp4',
    'video_poster'=> 'file|mimes:jpeg,png' , 
    'duration' => 'required|min:1'  
  ]);

  // switch between course and subject forms 
  switch ($request->type) { 
    case 0:
      $lesson_place = '/Lessons/SubjectLessons/';
      $foriegn_id = $request->type;
      break;
   case 1:
     $lesson_place = '/Lessons/CourseLessons/';
     $foriegn_id = $request->type;
     break;
    default:
      return redirect()->back()->with('error' , 'Wrong Request , Contact System Admin');
      break;
  }
   

  // you have to change the path + video path 
  // add new column to 
    // dd($lesson_place);
  if($request->hasFile('video_lesson')){
    $video = $request->file('video_lesson'); 
    $path = public_path(). $lesson_place;
    $video_name = time() ."_". $request->video_lesson->getClientOriginalName();
    $video->move($path , $video_name);
    $video_path = $lesson_place . $video_name; 
  }
  

 $lesson = CourseLesson::create([
    'title' =>  $request->title,
    'video_lesson' =>  $video_path ,
    'course_id' =>  $request->course_id,
    'subject_id' => $request->subject_id , 
    'video_poster' => $request->video_poster, 
    'duration' => $request->duration, 
    '_360p' => $request->sources, 
  ]);
  
  $lesson->save();
  return redirect()->back()->with('success' , 'درس جدید درج سیستم شد');

}// end of store method
function destroy($id){
 $lesson = CourseLesson::find($id); 
 if(File::exists(public_path($lesson->course_poster))){
  File::delete(public_path($lesson->course_poster));
  }
    $lesson->destroy(); 
    return back()->with('warning','درس موفقانه حذف شد');
}
public function create($id ){
  return view('Course.lesson.create' , ['course_id' => $id]);
}
public function uploadvideo (Request $request){
  
  $table_name = ''; 
  $id = NULL; 
  $table_id = '' ;

  if($request->type == 1) {
    $table_name = 'course_lessons'; 
    $id = $request->course_id; 
    $table_id = 'course_id';
    $lesson_place = '/Lessons/SubjectLessons/';
    $lesson_place = '/Lessons/CourseLessons/';
  }
  else if($request->type == 0){
    $table_name = 'subject_lessons';
    $id = $request->subject_id; 
    $table_id = 'subject_id';
    $lesson_place = '/Lessons/SubjectLessons/';
  }
  else {
    dd('Wrong Request : This Incident will be reported'); 
  }
  
    if($request->hasFile('file_0')){
      $video_0 = $request->file('file_0'); 
      $path_0 = public_path(). $lesson_place;
      $video_name_0 = time() ."_". $video_0->getClientOriginalName();
      $video_0->move($path_0 , $video_name_0);
      $video_path_0 = $lesson_place . $video_name_0; 
    } else { $video_path_0 = NULL; }
    if($request->hasFile('file_1')){
      $video_1 = $request->file('file_1'); 
      $path_1 = public_path(). $lesson_place;
      $video_name_1 = time() ."_". $video_1->getClientOriginalName();
      $video_1->move($path_1 , $video_name_1);
      $video_path_1 = $lesson_place . $video_name_1; 
    } else { $video_path_1 = NULL; }
    if($request->hasFile('file_2')){
      $video_2 = $request->file('file_2'); 
      $path_2 = public_path(). $lesson_place;
      $video_name_2 = time() ."_". $video_2->getClientOriginalName();
      $video_2->move($path_2 , $video_name_2);
      $video_path_2 = $lesson_place . $video_name_2; 
    } else { $video_path_2 = NULL; }
    if($request->hasFile('file_3')){
      $video_3 = $request->file('file_3'); 
      $path_3 = public_path(). $lesson_place;
      $video_name_3 = time() ."_". $video_3->getClientOriginalName();
      $video_3->move($path_3 , $video_name_3);
      $video_path_3 = $lesson_place . $video_name_3; 
    } else { $video_path_3 = NULL; }

    $title = $request->title; 
    $video_poster = $video_path_0; 
    $_360p = $video_name_1; 
    $_480p = $video_name_2; 
    $_720p = $video_name_3; 
    
  
    // dd($table_name . '- ' . $id );


    DB::table($table_name)->insert([
      'title' => $title,
      'video_poster' => $video_poster,
      '_360p' => $_360p,
      '_480p' => $_480p,
      '_720p' => $_720p,
      $table_id => $id,
      // 'course_id' => $request->course_id,
    ]); 

    dd("Lesson Added Successfully");
   

    // foreach ($data as $key => $value) {
    //   print_r($value);
    // }

} // end of function 
public function ajax (Request $request){
  return view('Class.lesson.test');
}
public function ajax_upload (Request $request){
  
    $validation = Validator::make($request->all(), [
      'select_file' => 'required|file|mimes:jpeg,png,jpg,gif,mp4|max:155500'
    ]);
    // image
    if($validation->passes()){
    $image = $request->file('select_file');
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images'), $new_name);
    return response()->json([
     'message'   => 'Image Upload Successfully',
    //  'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
     'class_name'  => 'alert-success'
    ]);
   }
   else{
    return response()->json([
     'message'   => $validation->errors()->all(),
     'uploaded_image' => '',
     'class_name'  => 'alert-danger'
    ]);
   }
}

}//end of class
