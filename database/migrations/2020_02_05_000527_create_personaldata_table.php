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
                $table->integer('userId')->unique();
                $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
                $table->integer('provinceId')->unique();
                $table->foreign('provinceId')->references('id')->on('provinces')->onDelete('cascade');
                $table->integer('cantonId')->unique();
                $table->foreign('cantonId')->references('id')->on('cantons')->onDelete('cascade');
                $table->integer('districtId')->unique();
                $table->foreign('districtId')->references('id')->on('districts')->onDelete('cascade');
                $table->string('address');
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
