<?php

namespace App\Http\Controllers;
use App\Models\LiveCourse;
use App\Models\LiveLesson; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LiveCourseController extends Controller
{
    
    public function index()
    {   
      $course = DB::table('live_course')->get();

        // $liveLesson = DB::table('course_lessons')
        //         ->where('lesson_type', "'LL'")
        //         ->get();
        $liveLesson = LiveLesson::all();

        // dd($liveLesson);
        // $liveLesson = DB::select('SELECT * FROM course_lessons WHERE lesson_type = "?" ' , ['LL']);
        return view("Live.LiveCourse.index" , ['courses' => $course , 'liveLesson' => $liveLesson ]);
    }

    
    public function create() {
        return view("Live.LiveCourse.create");
    }

   
    public function store(Request $request) {

    $this->validate($request , [
      'title' => 'required|min:10|max:60' ,
      'description' => 'required|min:50|max:2500 ' ,
      'start_date' => 'required' ,
      'start_time' => 'required' ,
      'instructor' => 'required| min:10|max:50',
    ]);
    
    $liveCourse = LiveCourse::create([
      'title' =>  $request->title,
      'description' =>  $request->description,
      'course_poster' =>  $request->course_poster,
      'start_date' =>  $request->start_date,
      'start_time' =>  $request->start_time,
      'instructor' =>  $request->instructor,
      // 'session_count' =>  $request->session_count,
    ]);
      
      $liveCourse->save();
      $course_id = DB::getPdo()->lastInsertId();
      return redirect('/LiveCourse/show/'.$course_id)->with('success' , "Course Added Successfully!");

    }
    
    public function show($id){
      $course = LiveCourse::find($id);
      // dd();
      
      return view('Live.LiveCourse.show' ,['course' => $course , 'lessons' => $course->LiveLesson ]);
    }

    
    public function edit($id) {
      $course = LiveCourse::find($id);
      return view('Live.LiveCourse.edit' ,['courses' => $course]);
    }

    public function update(Request $request, $id){

      $course = LiveCourse::find($id);
      $course->title = $request->title;
      $course->description = $request->description;
      $course->course_poster = $request->course_poster;
      $course->start_date = $request->start_date;
      $course->start_time = $request->start_time;
      $course->instructor = $request->instructor;

      $course->save();
       return redirect('/LiveCourse/show/'.$course->id)->with('success' , "Course Edited Successfully!");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course = LiveCourse::find($id);
      $course->delete();
      return redirect('/LiveCourse');
    }
}// end of class
