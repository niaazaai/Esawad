<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseFaq;
use Illuminate\Support\Facades\DB;
class CourseFaqController extends Controller
{

  public function index() {
      // $course = DB::table('courses')->get();
      // return view("/Course.Course.index" , ['courses' => $course ]);
  }


  public function create(){
      return view("Course.Course.create");
  }

  public function store(Request $request )
  {
    // check if the record is in the database
    // validate all field
    $this->validate($request , [
      'question' => 'required|max:255' ,
      'answer' => 'required|max:255 ' ,
    ]);

    // return $request->all();
   $course_faqs = CourseFaq::create([
        'question' =>  $request->question,
        'answer' =>  $request->answer,
        'course_id' =>  $request->course_id,
    ]);
    $course_faqs->save();
    // return redirect('/Course');
    return redirect()->back()->with('success' , 'سولات و جوابات موفقانه درج سیستم شد');

  }

  // public function edit($id)
  // {
  //   $course = LiveCourse::find($id);
  //   return view('Live.LiveCourse.edit' ,['courses' => $course ]);
  // }


  // public function update(Request $request, $id)
  // {
  //   $course = LiveCourse::find($id);
  //   $course->title = $request->title;
  //   $course->save();
  //   return redirect('/LiveCourse');
  // }

  // public function destroy($id)
  // {
  //   $course = LiveCourse::find($id);
  //   $course->delete();
  //   return redirect('/LiveCourse');
  // }
}
