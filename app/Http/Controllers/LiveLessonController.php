<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiveLesson;
use Illuminate\Support\Facades\DB;

class LiveLessonController extends Controller
{
  
  public function index(){
      $lessons = DB::table('live_lessons')->get();
      return view("Live.LiveLesson.index" , ['lessons' => $lessons ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create($course_id = null) {
      return view("Live.LiveLesson.create" , ['course_id' => $course_id ]);
  }

  
  public function store(Request $request) {
    // check if the record is in the database

    $this->validate($request , [
      'title' => 'required|min:10|max:60' ,
      'description' => 'required|min:50|max:2500 ' ,
      'start_date' => 'required' ,
      'start_time' => 'required',
      'instructor' => 'required|min:10|max:60' ,
    ]);
    
    if($request->lesson_type == "LL") {
      $request->live_course_id = null;
    }

   $lesson = Livelesson::create([
      'title' =>  $request->title,
      'description' =>  $request->description,
      'course_poster' =>  $request->course_poster,
      'start_date' =>  $request->start_date,
      'start_time' =>  $request->start_time,
      'lesson_type' =>  $request->lesson_type,
      'instructor' => $request->instructor, 
      'duration' => $request->duration,
      'live_course_id' =>  $request->live_course_id
    ]);
    
    $lesson->save();

    if($request->lesson_type == 'LL') {
      $id = DB::getPdo()->lastInsertId();
      return redirect()->route('livelesson.show', ['id' => $id])->with('success' , 'Live Lesson added Successfully');
    }
    
    return redirect()->route('livecourse.show', ['id' => $request->live_course_id])->with('success' , 'Course Live Lesson added Successfully');

  }// end of store function

  public function show($id) {
      $lesson = LiveLesson::find($id);
      return view('Live.LiveLesson.show' , ['lesson' => $lesson]);
  }

  public function edit($id) {


    $lesson = LiveLesson::find($id);
    return view('Live.LiveLesson.edit' ,['lesson' => $lesson  ]);
  }

  public function update(Request $request, $id) {

    $this->validate($request , [
      'title' => 'required|min:10|max:60' ,
      'description' => 'required|min:50|max:2500 ' ,
      'start_date' => 'required' ,
      'start_time' => 'required',
      'instructor' => 'required|min:10|max:60' ,
    ]);

   
    $lesson = LiveCourse::find($id);
    $lesson->title = $request->title;
    $lesson->description = $request->description;
    $lesson->course_poster = $request->course_poster;
    $lesson->start_date = $request->start_date;
    $lesson->start_time = $request->start_time;
    $lesson->lesson_type = $request->lesson_type;
    $lesson->instructor = $request->instructor;
    $lesson->duration = $request->duration;
    $lesson->live_course_id = $request->live_course_id;
    $lesson->save();
    return redirect('/LiveLesson');

    // return redirect()->route('course.show', ['id' => $request->course_id]);
  }

  public function destroy($id) {
    $course = LiveCourse::find($id);
    $course->delete();
    return redirect('/LiveCourse');

  }

}
