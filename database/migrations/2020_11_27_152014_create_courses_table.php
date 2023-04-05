<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('title' ,200)->unique();
            $table->string('description' , 2500)->nullable();
            $table->string('requirement' , 800)->nullable();
            $table->string('catagory' , 30)->nullable()->default('Not Available');
            $table->string('course_poster' , 255)->nullable()->default('add default path');
            $table->date('date')->nullable();
            $table->unsignedTinyInteger('lectures')->nullable()->default(1);
            $table->unsignedTinyInteger('enrolled')->nullable()->default(1);
            $table->unsignedTinyInteger('duration')->nullable()->default(1);

            $table->string('level' , 50)->nullable()->default('Beginner');

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
        Schema::dropIfExists('courses');
    }
}
