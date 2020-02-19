<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('street_brgy');
            $table->string('student_id');
            $table->string('town');
            $table->string('province');
            $table->date('b_day');
            $table->string('course');
            $table->integer('year');
            $table->string('block');
            $table->string('phone');
            $table->string('email');
            $table->string('hash');
            $table->string('biometics');
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
