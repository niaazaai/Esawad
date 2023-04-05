<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoursePreq;
use Illuminate\Support\Facades\DB;
class CoursePreqController extends Controller
{

  public function store(Request $request)
  {
    // check if the record is in the database

    // validate all field
    $this->validate($request , [
      'course_name' => 'required|max:255' ,
      'success_rate' => 'numeric|max:100|min:0' ,
    ]);
    // return $request->all();
   $course_preq = CoursePreq::create([
        'course_name' =>  $request->course_name,
        'success_rate' =>  $request->success_rate,
        'course_id' =>  $request->course_id,
    ]);
    $course_preq->save();
    return redirect()->back()->with('success' , 'پریکویزت  موفقانه درج سیستم شد');

  }

}
