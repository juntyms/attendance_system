<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
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
            $table->string('student_id');
            $table->string('student_name');
            $table->string('email');
            $table->string('mobile_no');
            $table->string('civilno');
            $table->unsignedBigInteger('building_id')->nullable();
            $table->timestamp('date_of_joining')->useCurrent();
            $table->string('emergency_contact_person')->nullable();
            $table->string('emergency_no')->nullable();
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
    }
}