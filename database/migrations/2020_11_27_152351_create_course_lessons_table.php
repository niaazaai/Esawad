<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('course_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title' ,255);
            $table->string('video_poster' , 255)->nullable();
            // $table->json('sources')->nullable();
            $table->string('_360p' , 500)->nullable();
            $table->string('_480p' , 500)->nullable();
            $table->string('_720p' , 500)->nullable();

            $table->unsignedTinyInteger('duration')->nullable();
            // $table->unsignedBigInteger('sub_cur_id')->nullable()->length(20);
        
            $table->unsignedBigInteger('course_id')->nullable()->length(20);

            // subject table connection  
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('course_lessons');
    }
}
