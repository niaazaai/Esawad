<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveLesson extends Model
{
    use HasFactory;
    protected $table = 'live_lessons';
    // protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    
    public function LiveCourse(){
        return $this->belongsTo(LiveCourse::class);
      }
}
