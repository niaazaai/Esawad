<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTrueFalsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_true_falses', function (Blueprint $table) {
            $table->id();
            $table->String("question", 200);
            $table->String("state", 10)->nullable();
            $table->mediumInteger("score")->nullable();
            $table->tinyInteger("time")->nullable();
            $table->unsignedBigInteger("quiz_id");
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('quiz_true_falses');
    }
}
