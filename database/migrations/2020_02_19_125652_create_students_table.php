<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateStudentsTable extends Migration
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
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('street_brgy')->nullable();
            $table->string('student_id');
            $table->string('town')->nullable();
            $table->string('province')->nullable();
            $table->string('zip_code')->nullable();
            $table->date('b_day')->nullable();
            $table->string('course');
            $table->integer('year');
            $table->string('block')->nullable();
            $table->string('major')->nullable();
            $table->string('phone')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_student')->default(false);
            $table->rememberToken();
            $table->string('hash')->nullable();
            $table->string('password')->nullable();
            $table->string('biometics')->nullable();
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
