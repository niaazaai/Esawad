<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModuleSubject extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $primaryKey = 'id'
    // public function CourseLesson(){
    //     return $this->hasMany(CourseLesson::class);
    // }

    public function CourseLesson(){
        return $this->hasMany(CourseLesson::class);
    }

}
