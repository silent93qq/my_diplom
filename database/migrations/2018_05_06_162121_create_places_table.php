<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id')
                  ->index();
            $table->integer('floor');
            $table->string('number');
            $table->string('type');
            $table->integer('count');
            $table->integer('busy')
                  ->default(0);
            $table->integer('dormitory_number')
                  ->references('dormitory_number')
                  ->on('users')
                  ->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('places');
    }
}
