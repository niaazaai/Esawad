<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizTrueFalse;
use DB; 
class QuizTrueFalseController extends Controller
{

    public function create($id){
        return view('Quizzes.TrueFalse.create' , ['id' => $id]);
    }
    public function store(Request $request){
        // validate all field
        $this->validate($request , [
          'question' => 'required|max:255|min:10', 
          'state' => 'max:10',
          'score' => 'numeric|required|max:100|min:1' , 
          'time' => 'required|max:500'
        ]);
    
        $tf  = QuizTrueFalse::create([
          'question' =>  $request->question,
          'state' =>  $request->state,
          'score' =>  $request->score,
          'time' =>  $request->time,
          'quiz_id' => $request->quiz_id
        ]);
    
        $tf->save();
        // $quizId = DB::getPdo()->lastInsertId();
        return  redirect()->back()->with('success' ,'سوال موفقانه ایجاد شد');
    }//end of store method
    public function update(Request $request ){
        // validate all field
        $this->validate($request , [
          'question' => 'required|max:255|min:10', 
          'state' => 'max:10',
          'score' => 'numeric|required|max:100|min:1' , 
          'time' => 'required|max:500'
        ]);
    
        DB::table('quiz_true_falses')->where('id', $request->id)
        ->update([
            'question' =>  $request->question,
            'state' =>  $request->state,
            'score' =>  $request->score,
            'time' =>  $request->time,
        ]);
        return redirect('/Quiz/show/'.$request->quiz_id)->with('success' ,'سوال موفقانه تجدید شد');
    }//end of store method
    public function edit($id){
        $quiz = QuizTrueFalse::find($id);
        return view('Quizzes.TrueFalse.edit' ,['quiz' => $quiz ]);
    }
    public function destroy($id){
        $class = QuizTrueFalse::find($id);
        // if(File::exists(public_path($class->class_poster))){
        //   File::delete(public_path($class->class_poster));
        // }
        $class->delete();
        return redirect()->back()->with('warning','امتحان موفقانه حذف شد');
    }//end of Destroy function 
}
