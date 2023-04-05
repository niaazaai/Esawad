<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizDragFill;
use DB; 

class QuizDragFillController extends Controller
{
    public function create($id){
        return view('Quizzes.DragFill.create' , ['id' => $id]);
    }

    public function store(Request $request){
        $this->validate($request , [
          'question_start' => 'required|max:255|min:10', 
          'gap' => 'max:4|min:1|numeric',
          'question_end' => 'required|max:255|min:1',
          'score' => 'required|numeric|max:100|min:1',
          'ans1' => 'max:255|min:1',
          'ans2' => 'max:255|min:1',
          'ans3' => 'max:255|min:1',
          'ans4' => 'max:255|min:1',
          'type' => 'string|required|max:10|min:3'
        ]);
    
        $Df  = QuizDragFill::create([
          'question_start' =>  $request->question_start,
          'gap' => $request->gap ,
          'question_end' => $request->question_end ,
          'score' => $request->score ,
          'ans1' => $request->ans1 ,
          'ans2' => $request->ans2 ,
          'ans3' => $request->ans3 ,
          'ans4' => $request->ans4 ,
          'time' => $request->time,
          'type' => $request->type,
          'quiz_id' => $request->quiz_id,
        ]);

        $Df->save();
        return  redirect('Quiz/show/'.$request->quiz_id )->with('success' ,'سوال موفقانه ایجاد شد');
    }//end of store method

    public function update(Request $request ){
        // validate all field
        $this->validate($request , [
            'question_start' => 'required|max:255|min:10', 
            'gap' => 'max:4|min:1|numeric',
            'question_end' => 'required|max:255|min:1',
            'score' => 'required|numeric|max:100|min:1',
            'ans1' => 'max:255|min:1',
            'ans2' => 'max:255|min:1',
            'ans3' => 'max:255|min:1',
            'ans4' => 'max:255|min:1',
            'type' => 'string|required|max:10|min:3'
          ]);
    
        DB::table('quiz_drag_fills')->where('id', $request->id)
        ->update([
            'question_start' =>  $request->question_start,
            'gap' => $request->gap ,
            'question_end' => $request->question_end ,
            'score' => $request->score ,
            'ans1' => $request->ans1 ,
            'ans2' => $request->ans2 ,
            'ans3' => $request->ans3 ,
            'ans4' => $request->ans4 ,
            'time' => $request->time,
            'type' => $request->type,
            'quiz_id' => $request->quiz_id,
        ]);
        return redirect('/Quiz/show/'.$request->quiz_id)->with('success' ,'سوال موفقانه تجدید شد');
    }//end of store method

    public function edit($id){
        $df = QuizDragFill::find($id);
        return view('Quizzes.DragFill.edit' ,['df' => $df ]);
    }
    public function destroy($id){
        $df = QuizDragFill::find($id);
        $df->delete();
        return redirect()->back()->with('warning','امتحان موفقانه حذف شد');
    }//end of Destroy function 
}
