<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectLessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title' ,255);
            $table->string('video_poster' , 255)->nullable();
            $table->string('_360p' , 500)->nullable();
            $table->string('_480p' , 500)->nullable();
            $table->string('_720p' , 500)->nullable();
            $table->unsignedTinyInteger('duration')->nullable();
            // $table->unsignedBigInteger('sub_cur_id')->nullable()->length(20);
        
            $table->unsignedBigInteger('subject_id')->nullable()->length(20);
            $table->foreign('subject_id')->references('id')->on('class_module_subjects')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_lessons');
    }
}
