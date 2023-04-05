<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassModuleSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_module_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('title' ,60);
            $table->string('subject_poster' , 255)->nullable();

            $table->unsignedBigInteger("class_id");
            $table->foreign('class_id')->references('id')->on('class_modules')->onDelete('cascade')->onUpdate('cascade'); 

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
        Schema::dropIfExists('class_module_subjects');
    }
}
