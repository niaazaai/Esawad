<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePreq extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';
    protected $table = 'course_preqs';
    protected $guarded = [];

    public function Course(){
      return $this->belongsTo(Course::class);
    }
}
