<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File; 
use App\Models\Quiz;
use App\Models\QuizResults; 

class QuizController extends Controller
{

  public function ExamCalculate(Request $request) {
   
    $score = 0; 
    $index = 0 ; 
    $grade = ''; 
    $mc_index = 0 ; 

    $quiz = Quiz::find($request->quiz_id);
    $truefalse = $quiz->TrueFalse; 
    $multichoice = $quiz->MultiChoice;

    // dd($multichoice[0]);
    // // dd(count($truefalse));
    // $arr = $request->except('quiz_id');
    // dd(count($arr) - 1);

    foreach ($request->except( ['quiz_id' , '_token']) as $key => $value) {

      if($key == 'tf_question_'.$index){
        if($value == $truefalse[$index]->state) {
          $score += $truefalse[$index]->score; 
          // echo "TF SCORE ADDED  - os : " . $truefalse[$index]->state . " us : " . $value ;
          // echo "<br>";
        }
        else {
          // echo "TF SCORE NOT ADDED ";
          // echo "<br>";
          }
        // echo "Tf -> " . $index . " KEY : " . $key; 
        // echo "<br>";
      }

      if($key == 'mc_question_'.$index){
        if($value == $multichoice[$mc_index]->correct) {
          $score += $multichoice[$mc_index]->score; 
          // echo "MC SCORE ADDED ";
          // echo "<br>";
        }
        else {
          // echo "MC SCORE NOT ADDED ";
          // echo "<br>";
          }
        // $score += $multichoice[$mc_index]->score; 
        // echo "MC -> " . $index . " KEY : " . $key; 
      }
      $index++ ;
    } // end of loop on request 

   if($score < 0 ||  $score > 100){
     dd("Please fix the scoring of your questions the score is : " . $score . " which is less than 0 or greater than 100");
   }

 
    if($score <= 100 && $score >= 80 ){
      $grade = 'A';      
    }
    else if($score < 80 && $score >= 60) {
      $grade = 'B';   
    }
    else if($score < 60 && $score >= 40) {
      $grade = 'C';   
    }
    else if($score < 40 && $score >= 0) {
      $grade = 'E';   
    }
    else {
      // DON'T KNOW WHAT TO DO CONCEPTUALLY NOT SYNTATICALLY 
    }

    // dd($score);
    $result = QuizResults::create([
      'user_id' =>  auth()->user()->id,
      'quiz_id' =>  (int) $request->quiz_id,
      'score' =>  $score,
      'grade' =>  $grade,
    ]);

    $quiz->save();
    $id = DB::getPdo()->lastInsertId();
    
 

    return redirect('Examination/result/'. $id)->with('success' ,'امتحان تمام شد');

    // echo "score: " . $score . " And grade is : " . $grade . " Last inserted ID : " . $resultID; 
  } // end of ExamCalculate method  

  public function ExamResults($id){
    $result = QuizResults::find($id);
    return view('Quizzes.result', ['result' => $result]);
  }

  public function index() {
    $quiz = DB::table('quizzes')->orderBy('created_at', 'desc')->get();
    return view("/Quizzes.index" , ['quiz' => $quiz ]);
  }//end of index method 
  public function store(Request $request){

    // validate all field
    $this->validate($request , [
      'title' => 'required|max:255|min:10', 
      'subject_related' => 'required',
      'poster' => 'max:50000|mimes:jpg,png,jpeg' , 
      'level' => 'max:30'
    ]);
    
    $image = ""; 
    if($request->hasFile('poster')){
      $poster = $request->file('poster'); 
      $path = public_path(). '/Poster/Quiz/';
      $poster_name = time() ."_". $request->poster->getClientOriginalName();
      $poster->move($path , $poster_name);
      $image = '/Poster/Quiz/'.$poster_name; 
    }
    else {
      $image = "/Poster/Quiz/default/quiz_def.jpg";
    }

    $quiz  = Quiz::create([
      'title' =>  $request->title,
      'subject_related' =>  $request->subject_related,
      'poster' =>  $image,
      'level' =>  $request->level,
    ]);

    $quiz->save();
    $quizId = DB::getPdo()->lastInsertId();
    return redirect('/Quiz/show/'. $quizId)->with('success' ,'امتحان موفقانه ایجاد شد');
  }//end of store method

  public function show($id) {
    $quiz = Quiz::find($id);
    
    return view('Quizzes.show' , [
      'quiz' => $quiz,
      'truefalse'=> $quiz->TrueFalse,
      'multichoice' => $quiz->MultiChoice,
      'dragfill' => $quiz->DragFill
    ]);
  }

  public function edit($id){
    $quiz = Quiz::find($id);
    return view('Quizzes.edit' ,['quiz' => $quiz ]);
  }
  public function update(Request $request, $id){

    $this->validate($request , [
      'title' => 'required|max:255|min:10', 
      'subject_related' => 'required',
      'poster' => 'max:50000|mimes:jpg,png,jpeg' , 
      'level' => 'max:30'
    ]);
    
    $image = ""; 
    if($request->hasFile('poster')){
      $poster = $request->file('poster'); 
      $path = public_path(). '/Poster/Quiz/';
      $poster_name = time() ."_". $request->poster->getClientOriginalName();
      $poster->move($path , $poster_name);
      $image = '/Poster/Quiz/'.$poster_name; 
    }
    else { $image = $request->no_poster; }

    $quiz = Quiz::find($id);
    $quiz->title = $request->title;
    $quiz->subject_related = $request->subject_related;
    $quiz->level = $request->level;
    $quiz->poster = $image;
    $quiz->save();
    return redirect('/Quiz/show/'. $id)->with('success' ,'امتحان موفقانه تجدید شد');
  }
  public function destroy($id){
    $quiz = Quiz::find($id);
    // return $quiz->poster; 

    if(File::exists(public_path($quiz->poster))){
      File::delete(public_path($quiz->poster));
    }
    $quiz->delete();
    return redirect('/Quiz')->with('warning','امتحان موفقانه حذف شد');
  }//end of SubjectDestroy function 

}//end of class 
