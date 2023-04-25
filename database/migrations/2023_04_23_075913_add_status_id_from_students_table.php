<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusIdFromStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->after('mobile_no');
            $table->foreign('status_id')->references('id')->on('status');
            $table->unsignedBigInteger('nationality_id')->after('mobile_no');
            $table->foreign('nationality_id')->references('id')->on('nationalities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('status_id');
            $table->dropColumn('status_id');
            $table->dropColumn('nationality_id');
            $table->dropColumn('nationality_id');
        });
    }
}