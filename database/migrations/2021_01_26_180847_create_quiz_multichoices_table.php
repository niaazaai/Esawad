<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizMultichoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_multichoices', function (Blueprint $table) {
            $table->id();
            $table->String("question", 200);
            $table->String("audio", 150)->nullable();
            $table->String("image", 150)->nullable();
            $table->String("question_type", 50)->nullable();
            $table->mediumInteger("time")->nullable();
            $table->String("correct", 10)->nullable();
            $table->mediumInteger("score")->nullable();
            $table->String("ans1")->nullable();
            $table->String("ans2")->nullable();
            $table->String("ans3")->nullable();
            $table->String("ans4")->nullable();
            $table->String("audio1")->nullable();
            $table->String("audio2")->nullable();
            $table->String("audio3")->nullable();
            $table->String("audio4")->nullable();
            $table->unsignedBigInteger("quiz_id");
            // $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onUpdate('cascade')->onDelete('cascade'); 
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_multichoices');
    }
}
