<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = true;

    public function TrueFalse(){
        return $this->hasMany(QuizTrueFalse::class);
    }

    public function MultiChoice(){
        return $this->hasMany(QuizMultiChoice::class);
    }

    public function DragFill(){
        return $this->hasMany(QuizDragFill::class);
    }


}
