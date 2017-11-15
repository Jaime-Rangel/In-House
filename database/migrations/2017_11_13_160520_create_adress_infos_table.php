<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adress_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('street');
            $table->string('sm');
            $table->integer('fk_idownership')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('fk_idownership')->references('id')->on('ownerships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adress_infos');
    }
}
