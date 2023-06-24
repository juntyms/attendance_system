<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
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
        Schema::dropIfExists('student_rooms');
    }
}
