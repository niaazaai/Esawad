<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizDragFillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_drag_fills', function (Blueprint $table) {
            $table->id();
            $table->String("question_start", 200);
            $table->unsignedTinyInteger('gap')->default(1);
            $table->String("question_end", 200);
            $table->String("correct", 10)->nullable();
            $table->mediumInteger("time")->default(5);
            $table->mediumInteger("score")->nullable();

            $table->String("ans1")->nullable();
            $table->String("ans2")->nullable();
            $table->String("ans3")->nullable();
            $table->String("ans4")->nullable();

            $table->String('type')->default('drag'); // either drag or fill  
            $table->unsignedBigInteger("quiz_id");
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onUpdate('cascade')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_drag_fills');
    }
}
