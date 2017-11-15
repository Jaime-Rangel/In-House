<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('checkIn');
            $table->dateTime('checkOut');
            $table->decimal('total');
            $table->integer('fk_idownership')->unsigned()->nullable();
            $table->integer('fk_idoccupant')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('fk_idownership')->references('id')->on('ownerships');
            $table->foreign('fk_idoccupant')->references('id')->on('occupants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
