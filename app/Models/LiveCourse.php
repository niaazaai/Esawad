<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveCourse extends Model
{
    protected $table = 'live_course';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
    
    public function LiveLesson(){
        return $this->hasMany(LiveLesson::class);
    }
}
