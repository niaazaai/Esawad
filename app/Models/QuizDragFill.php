<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizDragFill extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function Quiz(){
        return $this->belongsTo(Quiz::class);
    }
}
