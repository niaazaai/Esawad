<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModule;
use App\Models\ClassModuleSubject;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ClassModuleController extends Controller {
   
public function index() {
  $class = DB::table('class_modules')->paginate(12);
  return view("/Class.class.index" , ['classes' => $class ]);
}
public function show($id){
    $class = ClassModule::find($id);
    return view("Class.class.show" ,['class' => $class]);
}
public function create(){
    return view("Class.class.create");
}
public function store(Request $request){
  
  // check if the record is in the database
  // validate all field
  $this->validate($request , [
    'title' => 'required|max:60' ,
    'description' => 'required|min:50|max:2500 ' ,
    'start_date' => 'required|date' ,
    'subject_count' => 'min:1|max:25' ,
    'class_poster' => 'max:9048'
  ]);

  
  if($request->hasFile('class_poster')){
    $poster = $request->file('class_poster'); 
    $path = public_path(). '/Poster/Subject/';
    $poster_name = time() ."_". $request->class_poster->getClientOriginalName();
    $poster->move($path , $poster_name);
    $poster_path = '/Poster/Subject/'.$poster_name; 
  }
  else {
    $poster_path = 'no photo'; 
  }
 $course  = ClassModule::create([
    'title' =>  $request->title,
    'description' =>  $request->description,
    'class_poster' =>  $poster_path ,
    'start_date' =>  $request->start_date,
    'subject_count' =>  $request->subject_count,

  ]);

  $course->save();
  $id = DB::getPdo()->lastInsertId();
  return redirect()->route('classmodule.show', ['id' => $id])->with('success' , 'صنف موفقانه درج سیستم شد');

}
public function edit($id) {
  $class = ClassModule::find($id);
  return view('Class.class.edit' ,['class' => $class ]); 
}
public function update(Request $request, $id) {

  $this->validate($request , [
    'title' => 'required|max:60' ,
    'description' => 'required|min:50|max:2500 ' ,
    'start_date' => 'required|date' ,
    'subject_count' => 'min:1|max:25' ,
    'class_poster' => 'max:9048',
  ]);

  if($request->hasFile('class_poster')){
    $poster = $request->file('class_poster'); 
    $path = public_path(). '/Poster/Class/';
    $poster_name = time() ."_". $request->class_poster->getClientOriginalName();
    $poster->move($path , $poster_name);
    $poster_path = '/Poster/Class/'.$poster_name; 
  }
  else {
    $poster_path = $request->poster; 
  }

  DB::table('class_modules')->where('id', $id)
  ->update([
    'title' => $request->title,
    'description' => $request->description ,
    'subject_count' => $request->subject_count ,
    'start_date' => $request->start_date , 
    'class_poster' => $poster_path
  ]);
  return redirect('/ClassModule/show/'. $id)->with('success' ,'صنف موفقانه تجدید شد');
}
public function destroy($id){
  $class = ClassModule::find($id);
  if(File::exists(public_path($class->class_poster))){
    File::delete(public_path($class->class_poster));
  }
  $class->delete();
  return redirect('/ClassModule')->with('warning','صنف موفقانه حذف شد');
}//end of SubjectDestroy function 
public function subject($id){
  // return $id;
  $subjects = DB::table('class_module_subjects')
                ->where('class_id','=', $id )
                ->get();
  return view('Class.subject.index' , ['subjects' => $subjects , 'class_id' => $id ]); 
}//end of subject function 
public function subjectCreate($id){
  return view('Class.subject.create' , ['id' => $id]);
}//end of subjectCreate function 
public function subjectStore(Request $request){
  // return $request->all();
  $this->validate($request , [
    'title' => 'required|min:3|max:50' ,
    'subject_poster' => 'max:9048 ' , 
  ]);

  if($request->hasFile('subject_poster')){
    $poster = $request->file('subject_poster'); 
    $path = public_path(). '/Poster/Subject/';
    $poster_name = time() ."_". $request->subject_poster->getClientOriginalName();
    $poster->move($path , $poster_name);
    $poster_path = '/Poster/Subject/'.$poster_name; 
  }
  

  $cms  = ClassModuleSubject::create([
    'title' =>  $request->title,
    'subject_poster' =>  $poster_path,
    'class_id' => $request->class_id
  ]);

  $cms->save();
  $id = DB::getPdo()->lastInsertId();
  return redirect('/Subject/show/'. $request->class_id)->with('success' ,'مضمون  موفقانه علاوه شد');
}//end of subjectStore function 
public function subjectEdit($id){
  $subject = ClassModuleSubject::find($id);
  return view('Class.subject.edit' , ['subject' => $subject]); 
}//end of subjectEdit function 
public function subjectUpdate(Request $request ){

  $this->validate($request , [
    'title' => 'required|min:3|max:50' ,
    'subject_poster' => 'max:9048 ' 
  ]);

  if($request->hasFile('subject_poster')){
    $poster = $request->file('subject_poster'); 
    $path = public_path(). '/Poster/Subject/';
    $poster_name = time() ."_". $request->subject_poster->getClientOriginalName();
    $poster->move($path , $poster_name);
    $poster_path = '/Poster/Subject/'.$poster_name; 
  }
  else {
    $poster_path = $request->poster; 
  }

  DB::table('class_module_subjects')->where('id', $request->id)
  ->update([
    'title' => $request->title,
    'subject_poster' => $poster_path
  ]);

  return redirect('/Subject/show/'. $request->class_id)->with('success' ,'مضمون موفقانه تجدید شد');
  //  return $request->all();
}//end of subjectUpdate function 
public function SubjectDestroy($id){
  // $class_id = $subject->class_id; 
  // return redirect('/Subject/show/'. $class_id)->with('error' ,'کورس موفقانه حذف شد');
  $subject = ClassModuleSubject::find($id);
  if(File::exists(public_path($subject->class_poster))){
    File::delete(public_path($subject->class_poster));
  }
  $subject->delete();
  return back()->with('warning','مضمون موفقانه حذف شد');
 

}//end of SubjectDestroy function 
public function createSubjectLesson($id){
  return view('Class.lesson.create' , ['subject_id' => $id]);
}
public function showSubjectLesson($id){
  $lessons = DB::table('subject_lessons')
  ->where('subject_id','=', $id )
  ->get();
  return view('Class.subject.show' , [
    'lessons' => $lessons ,
    'subject_id' => $id ]);
}

}// end of class 


