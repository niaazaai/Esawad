<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizMultichoice;
use DB; 

class QuizMultichoiceController extends Controller
{
    public function create($id){
        return view('Quizzes.MultiChoice.create' , ['id' => $id]);
    }
    public function store(Request $request){
        /* 
            id  question  audio image  question_type  duration  correct  
            score  ans1  ans2  ans3  ans4  audio1  audio2  audio3  audio4  quiz_id 
            LEFT 
            id  audio image  question_type  audio1  audio2  audio3  audio4  quiz_id 
        */
        
        $this->validate($request , [
          'question' => 'required|max:255|min:10', 
          'time' => 'max:300|min:5|numeric',
          'correct' => 'numeric|max:4|min:1',
          'score' => 'required|numeric|max:100|min:1',
          'ans1' => 'max:255|min:3',
          'ans2' => 'max:255|min:3',
          'ans3' => 'max:255|min:3',
          'ans4' => 'max:255|min:3',
        ]);
    
        $tf  = QuizMultichoice::create([
          'question' =>  $request->question,
          'time' => $request->time ,
          'correct' => $request->correct ,
          'score' => $request->score ,
          'ans1' => $request->ans1 ,
          'ans2' => $request->ans2 ,
          'ans3' => $request->ans3 ,
          'ans4' => $request->ans4 ,
          'quiz_id' => $request->quiz_id
        ]);
        $tf->save();
        return  redirect('Quiz/show/'.$request->quiz_id )->with('success' ,'سوال موفقانه ایجاد شد');
    }//end of store method

    public function update(Request $request ){
        // validate all field
        $this->validate($request , [
            'question' => 'required|max:255|min:10', 
            'time' => 'max:300|min:5|numeric',
            'correct' => 'numeric|max:4|min:1',
            'score' => 'required|numeric|max:100|min:1',
            'ans1' => 'max:255|min:3',
            'ans2' => 'max:255|min:3',
            'ans3' => 'max:255|min:3',
            'ans4' => 'max:255|min:3',
          ]);
    
        DB::table('quiz_multichoices')->where('id', $request->id)
        ->update([
            'question' =>  $request->question,
            'time' => $request->time ,
            'correct' => $request->correct ,
            'score' => $request->score ,
            'ans1' => $request->ans1 ,
            'ans2' => $request->ans2 ,
            'ans3' => $request->ans3 ,
            'ans4' => $request->ans4 ,
        ]);
        return redirect('/Quiz/show/'.$request->quiz_id)->with('success' ,'سوال موفقانه تجدید شد');
    }//end of store method

    public function edit($id){
        $mc = QuizMultichoice::find($id);
        return view('Quizzes.MultiChoice.edit' ,['mc' => $mc ]);
    }
    public function destroy($id){
        $class = QuizMultichoice::find($id);
        // if(File::exists(public_path($class->class_poster))){
        //   File::delete(public_path($class->class_poster));
        // }
        $class->delete();
        return redirect()->back()->with('warning','امتحان موفقانه حذف شد');
    }//end of Destroy function 
}
