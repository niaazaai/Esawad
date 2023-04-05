<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveCourseController;
use App\Http\Controllers\LiveLessonController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseFaqController;
use App\Http\Controllers\CoursePreqController;
use App\Http\Controllers\CourseLessonController;
use App\Http\Controllers\ClassModuleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizTrueFalseController;
use App\Http\Controllers\QuizMultichoiceController;
use App\Http\Controllers\QuizDragFillController; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessageController;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/profile', function () {
     return view('auth.profile' , []);
});


Route::get('/contact', function () { return view('contact');});
Route::get('/about', function () { return view('about');});
Route::get('/mission', function () { return view('mission');});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Live Stream Modules Routes - START
|--------------------------------------------------------------------------
*/
Route::get('LiveCourse', [LiveCourseController::class, 'index'])->name('livecourse');
Route::get('LiveCourse/show/{id}', [LiveCourseController::class, 'show'])->name('livecourse.show');
Route::get('LiveCourse/create', [LiveCourseController::class, 'create']);

Route::post('LiveCourse/store', [LiveCourseController::class, 'store']);
Route::get('LiveCourse/edit/{id}', [LiveCourseController::class, 'edit']);
Route::put('LiveCourse/update/{id}', [LiveCourseController::class, 'update']);
Route::delete('LiveCourse/delete/{id}', [LiveCourseController::class, 'destroy']);

Route::get('LiveLesson', [LiveLessonController::class , 'index']);
Route::get('LiveLesson/show/{id}', [LiveLessonController::class , 'show'])->name('livelesson.show');
Route::get('LiveLesson/create/{id?}', [LiveLessonController::class, 'create']);
Route::post('LiveLesson/store', [LiveLessonController::class, 'store']);

Route::get('LiveLesson/edit/{id}', [LiveLessonController::class, 'edit']);
Route::post('LiveLesson/update/{id}', [LiveLessonController::class, 'update']);

//--------------------------------------------------------------------------


/*
|--------------------------------------------------------------------------
| COURSE Modules Routes - START
|--------------------------------------------------------------------------
*/

Route::get('Course', [CourseController::class, 'index'])->name('course');
Route::get('Course/create', [CourseController::class, 'create'])->name('course.create');
Route::get('Course/create/poster/{course_id}', [CourseController::class, 'CreatePoster'])->name('create.poster');
Route::post('Course/store/poster', [CourseController::class, 'StorePoster'])->name('store.poster');

Route::get('Course/show/{id}', [CourseController::class, 'show'])->name('course.show');
Route::post('Course/store', [CourseController::class, 'store']);
Route::post('Course/faq/store', [CourseFaqController::class, 'store']);
Route::post('Course/preqs/store', [CoursePreqController::class, 'store']);
Route::post('Course/lesson/store' , [CourseLessonController::class , 'store'])->name('course.lesson.store');
Route::delete('Course/delete/{id}', [CourseController::class, 'destroy']);
Route::get('Course/edit/{id}', [CourseController::class, 'edit']);
Route::post('Course/update/{id}', [CourseController::class, 'update']);

Route::get('Course/lesson/{id}', [CourseLessonController::class,'show']);
Route::get('Course/create/{id}', [CourseLessonController::class,'create']);
Route::delete('Lesson/delete/{id}', [CourseController::class, 'destroy']);

// Route::get('LiveCourse/edit/{id}', [LiveCourseController::class, 'edit']);
// Route::put('LiveCourse/update/{id}', [LiveCourseController::class, 'update']);
// Route::delete('LiveCourse/delete/{id}', [LiveCourseController::class, 'destroy']);
//--------------------------------------------------------------------------


/*
|--------------------------------------------------------------------------
| Class Modules Routes - START
|--------------------------------------------------------------------------
*/
Route::get('ClassModule', [ClassModuleController::class, 'index'])->name('classmodule');
Route::get('ClassModule/show/{id}', [ClassModuleController::class, 'show'])->name('classmodule.show');
Route::get('ClassModule/create', [ClassModuleController::class, 'create'])->name('classmodule.create');
Route::post('ClassModule/store', [ClassModuleController::class, 'store'])->name('classmodule.store');
Route::get('ClassModule/edit/{id}', [ClassModuleController::class, 'edit'])->name('classmodule.edit');
Route::put('ClassModule/update/{id}', [ClassModuleController::class, 'update']);
Route::delete('ClassModule/delete/{id}', [ClassModuleController::class, 'destroy'])->name('classmodule.destroy');

Route::get('Subject/show/{id}', [ClassModuleController::class, 'subject'])->name('subject.show');
Route::get('Subject/create/{id}', [ClassModuleController::class, 'subjectCreate']);
Route::get('Subject/edit/{id}', [ClassModuleController::class, 'subjectEdit']);
Route::post('Subject/store', [ClassModuleController::class, 'subjectStore']);
Route::put('Subject/update/{id}', [ClassModuleController::class, 'subjectUpdate']);
Route::delete('Subject/delete/{id}', [ClassModuleController::class, 'SubjectDestroy']);

Route::get('Subject/lesson/show/{id}' , [ClassModuleController::class, 'showSubjectLesson'])->name('lesson.show');
Route::get('Subject/lesson/create/{id}' , [ClassModuleController::class, 'createSubjectLesson']);
Route::post('Upload/subject' , [CourseLessonController::class, 'uploadvideo']);


//--------------------------------------------------------------------------



/*
|--------------------------------------------------------------------------
| Quiz Modules Routes - START
|--------------------------------------------------------------------------
*/
Route::get('Quiz', [QuizController::class, 'index'])->name('quiz');
Route::get('Quiz/show/{id}' ,[QuizController::class, 'show'] )->name('quiz.show');
Route::post('Quiz/store', [QuizController::class, 'store']);
Route::get('Quiz/edit/{id}', [QuizController::class, 'edit']);
Route::put('Quiz/update/{id}', [QuizController::class, 'update']);
Route::delete('Quiz/delete/{id}', [QuizController::class, 'destroy']);


//---------------- ACTUAL QUIZ ROUTES ---------------------------------------

Route::get('Examination/{id}', [QuizController::class, 'getExam']);
Route::post('Examination/calculate', [QuizController::class, 'ExamCalculate']);
Route::get('Examination/result/{id}', [QuizController::class, 'ExamResults']);


//---------------- TRUE FALSE ROUTES ---------------------------------------
Route::get('/Tf/create/{id}' , [QuizTrueFalseController::class, 'create']);
Route::get('Tf/edit/{id}', [QuizTrueFalseController::class, 'edit']);
Route::put('Tf/update', [QuizTrueFalseController::class, 'update']);
Route::delete('Tf/delete/{id}', [QuizTrueFalseController::class, 'destroy']);
Route::post('Tf/store', [QuizTrueFalseController::class, 'store']);

//---------------- MULTICHOICE ROUTES ---------------------------------------
Route::get('/Mc/create/{id}' , [QuizMultichoiceController::class, 'create']);
Route::get('Mc/edit/{id}', [QuizMultichoiceController::class, 'edit']);
Route::put('Mc/update', [QuizMultichoiceController::class, 'update']);
Route::delete('Mc/delete/{id}', [QuizMultichoiceController::class, 'destroy']);
Route::post('Mc/store', [QuizMultichoiceController::class, 'store']);


//---------------- MULTICHOICE ROUTES ---------------------------------------
Route::get('/Df/create/{id}' , [QuizDragFillController::class, 'create']);
Route::post('Df/store', [QuizDragFillController::class, 'store']);
Route::get('Df/edit/{id}', [QuizDragFillController::class, 'edit']);
Route::put('Df/update', [QuizDragFillController::class, 'update']);
Route::delete('Df/delete/{id}', [QuizDragFillController::class, 'destroy']);
//--------------------------------------------------------------------------






/*
|--------------------------------------------------------------------------
| Quiz Modules Routes - START
|--------------------------------------------------------------------------
*/



Route::get('Chat', function () {

    $users = User::where('id' , '!=' , Auth::id())->get();
    $this->data['Users'] = $users;
    return view('chat.index' , $this->data);
    
});


Route::get('Chat/{UserId}', [MessageController::class, 'index'])->name('chat.conversation');
Route::post('/SendMessage', [App\Http\Controllers\MessageController::class, 'SendMessage'])->name('SendMessage');



Route::get('conversation', function () {
    return view('chat-1.index');
    
});


//--------------------------------------------------------------------------
















/*
|--------------------------------------------------------------------------
| Test Routes for DONARS  - START
|--------------------------------------------------------------------------
*/
Route::get('lesson/2y10UF0OEJ4O/kbDdRw1sWGYOl27WgBz54hfDcu2lOAq32jqOxiADdM1Fy' , [ClassModuleController::class, 'donor']);

//--------------------------------------------------------------------------



// routes to be deleted

Route::get('ajax' , [CourseLessonController::class, 'ajax']);
Route::post('ajax_upload' , [CourseLessonController::class, 'ajax_upload'])->name('ajaxupload.action');;


Route::get('/videojs', function () {
    return view('video_test.video');
});


Route::get('/test', function () {
    return view('Course.Course.form_wizard');
});


Route::get('/locale/{lang?}',function($lang=null ){

    App::setlocale($lang);

    
    $locale = App::currentLocale();

    if (App::isLocale('en')) {
        //
    }
    return view('locale'); 
});