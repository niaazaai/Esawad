<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuizResults extends Migration
{
    public function up(){
        Schema::create('quiz_results', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id')->nullable();
        $table->unsignedBigInteger('quiz_id')->nullable();
        $table->unsignedTinyInteger('score');
        $table->string('grade' , 3);
        $table->timestamps();

    });
    }

  
    public function down()
    {
        //
    }
}
