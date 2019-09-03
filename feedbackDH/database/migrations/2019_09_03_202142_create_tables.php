<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gitlink');
            $table->tinyInteger('commission_id');
            $table->timestamps();
        });

        Schema::create('group_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('student_id');
            $table->tinyInteger('group_id');
            $table->timestamps();
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course');
            $table->timestamps();
        });

        Schema::create('commissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
            $table->tinyInteger('course_id');
            $table->timestamps();
        });

        Schema::create('commission_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('student_id');
            $table->tinyInteger('commission_id');
            $table->timestamps();
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->tinyInteger('stage_id');
            $table->timestamps();
        });

        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->tinyInteger('student_id');
            $table->tinyInteger('user_id');
            $table->tinyInteger('topic_id');
            $table->text('comment');
            $table->tinyInteger('approved');
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
        Schema::dropIfExists('students');
        Schema::dropIfExists('groups');
        Schema::dropIfExists('group_student');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('commissions');
        Schema::dropIfExists('commission_student');
        Schema::dropIfExists('stages');
        Schema::dropIfExists('topics');
        Schema::dropIfExists('feedback');
    }
}
