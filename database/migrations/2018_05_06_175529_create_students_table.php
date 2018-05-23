<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id')->index();;
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->date('year');
            $table->string('from');
            $table->string('country');
            $table->string('faculty');
            $table->integer('course');
            $table->bigInteger('phone');
            $table->string('mail');
            $table->string('place');
            $table->boolean('payment');
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
