<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseFaq;
use App\Models\CoursePreq;
use App\Models\CourseLesson;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller {

  public function index() {
      // get it asec
      $course = DB::table('courses')->paginate(5);
      return view("/Course.Course.index" , ['courses' => $course ]);
  }

  public function create(){
      return view("Course.Course.create");
  }
 
  public function store(Request $request){
    
    // check if the record is in the database
    // validate all field
    $this->validate($request , [
      'title' => 'required|max:60' ,
      'description' => 'required|min:50|max:2500 ' ,
      'date' => 'required|date' ,
      'catagory' => 'required|min:3|max:20' ,
      'requirement' => 'max:800',
      'duration' => 'required|numeric|min:1|max:50' , 
      'lectures' => 'required|numeric|min:1|max:50'
    ]);

   $course  = Course::create([
      'title' =>  $request->title,
      'description' =>  $request->description,
      'course_poster' =>  "temporary",
      'date' =>  $request->date,
      'catagory' =>  $request->catagory,
      'level' =>  $request->level,
      'requirement' => $request->requirement,
      'duration' => $request->duration, 
      'lectures' => $request->lectures
    ]);
 
    $course->save();
    $course_id = DB::getPdo()->lastInsertId();
    return redirect()->route('create.poster', ['course_id' => $course_id]);

  }

  public function CreatePoster($course_id){
    return view("Course.Course.course_poster" , ['course_id' => $course_id]);
  }

  public function StorePoster(Request $request){
      $this->validate($request , [
        'course_poster' => 'required|max:10048 ' , 
      ]);
        
      if($request->hasFile('course_poster')){
        $poster = $request->file('course_poster'); 
        $path = public_path(). '/Poster/Course/';
        $poster_name = time() ."_". $request->course_poster->getClientOriginalName();
        $poster->move($path , $poster_name);
        $poster_path = '/Poster/Course/'.$poster_name; 
      }
      
      $course = Course::find($request->course_id);
      $course->course_poster = $poster_path;
      $course->save();

      // return redirect('course_show' , ['id' => $request->course_id]);
      return redirect()->route('course.show', ['id' => $request->course_id]);
  }


  public function show($id) {
    $course = Course::find($id);
    return view('Course.Course.show' , [
      'course' => $course,
      'course_faq' => $course->CourseFaq ,
      'course_preq' => $course->CoursePreq,
      'lessons'=> $course->CourseLesson,
    ]);
  }

  public function edit($id)
  {
    $course = Course::find($id);
    return view('Course.Course.edit' ,['course' => $course ]);
  }


  public function update(Request $request, $id)
  {

    $this->validate($request , [
      'title' => 'required|max:255' ,
      'description' => 'required|max:2500 ' ,
      'date' => 'required' ,
      'catagory' => 'required|max:20|min:3' ,
      'level' => 'required',
      'requirement' => 'max:800',
      'duration' => 'required' , 
      'lectures' => 'required'
    ]);


    $course = Course::find($id);
    $course->title = $request->title;
    $course->description = $request->description;
    $course->date = $request->date;
    $course->catagory = $request->catagory;
    $course->requirement = $request->requirement;
    $course->duration = $request->duration;
    $course->lectures = $request->lectures;

    $course->save();
    return redirect('/Course/show/'. $course->id)->with('success' ,'کورس موفقانه تجدید شد');
  }

  public function destroy($id)
  {

    $course = Course::find($id);
    $course->delete();
    return redirect('/Course');
  }


  // public function download($file){
  //   return response()->downlaod('storage/'.$file);  
  // }


}
