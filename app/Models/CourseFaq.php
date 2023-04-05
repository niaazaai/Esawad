<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFaq extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;


    public function Course(){
      return $this->belongsTo(Course::class);
    }
}
