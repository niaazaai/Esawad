<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    
    public function index(){

        $NumberOfQuiz = DB::table('quiz_results')
        ->where('user_id','=', auth()->user()->id )
        ->limit(3)->get();

        $EnrolledCourses = DB::table('courses')
        ->limit(3)->get();

        // $EnrolledCourses =   DB::table('courses')->where()
        // dd($NumberOfQuiz);;
        
        return view('dashboard' , ['NumberOfQuiz' => $NumberOfQuiz , 'EnrolledCourses' => $EnrolledCourses]);

    }
}
