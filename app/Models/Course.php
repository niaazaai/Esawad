<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function CourseLesson(){
        return $this->hasMany(CourseLesson::class);
    }

    public function CourseFaq(){
        return $this->hasMany(CourseFaq::class);
    }

    public function CoursePreq(){
        return $this->hasMany(CoursePreq::class);
    }






}// end of class
