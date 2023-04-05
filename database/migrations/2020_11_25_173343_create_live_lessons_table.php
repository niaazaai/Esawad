<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('lesson_type',8)->nullable()->default('LL');
            $table->string('title',60);
            $table->string('description' , 2500)->nullable();
            $table->string('course_poster' , 255)->nullable();
            $table->date('start_date')->nullable();
            $table->time('start_time' , 0)->nullable();
            $table->tinyInteger('duration')->nullable(); 
            $table->string('instructor' , 50)->nullable();
            $table->unsignedBigInteger('live_course_id')->nullable();
            $table->foreign('live_course_id')->references('id')->on('live_course')->onDelete('cascade')->onUpdate('cascade');

            // lesson_slides varchar() -- unknown

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_lessons');
    }
}
