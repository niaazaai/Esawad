<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModule extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function CourseLesson(){
        return $this->hasMany(CourseLesson::class);
    }
}
