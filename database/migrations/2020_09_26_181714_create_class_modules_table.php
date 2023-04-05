<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassModulesTable extends Migration
{
    
    public function up()
    {
        Schema::create('class_modules', function (Blueprint $table) {
            $table->id();
            $table->string('title' ,60)->unique();
            $table->string('description' , 2500)->nullable();
            $table->date('start_date')->nullable()->useCurrent();
            $table->tinyInteger('subject_count')->nullable();
            $table->string('class_poster' , 255)->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('class_modules');
    }
}
