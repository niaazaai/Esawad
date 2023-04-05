<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_course', function (Blueprint $table) {
            $table->id();
            $table->string('title' ,60)->unique();
            $table->string('description' , 2500)->nullable();
            $table->string('course_poster' , 255)->nullable()->default('add default path');
            $table->date('start_date')->nullable()->useCurrent();
            $table->time('start_time' , 0)->nullable()->useCurrent();
            $table->string('instructor' , 50)->nullable();
            // $table->tinyInteger('session_count' , 3)->nullable();
            // session_count  tinyint(3) null single simple
            // session_duration  tinyint(3) null single simple

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_course');
    }
}
