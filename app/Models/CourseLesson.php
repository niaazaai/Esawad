<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLesson extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Course(){
      return $this->belongsTo(Course::class);
    }
    public function Subject(){
      return $this->belongsTo(ClassModuleSubject::class);
    }

}
