<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaldataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('personaldata')) {
            Schema::create('personaldata', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('userId');
                $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
                $table->integer('provinceId')->unsigned();
                $table->foreign('provinceId')->references('id')->on('provinces')->onDelete('cascade');
                $table->integer('cantonId')->unsigned();
                $table->foreign('cantonId')->references('id')->on('cantons')->onDelete('cascade');
                $table->integer('districtId')->unsigned();
                $table->foreign('districtId')->references('id')->on('districts')->onDelete('cascade');
                $table->string('address');
                $table->integer('phoneNumber');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personaldata');
    }
}
