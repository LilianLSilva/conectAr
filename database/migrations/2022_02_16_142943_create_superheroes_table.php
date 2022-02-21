<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("fullName")->nullable();
            $table->integer("strength")->nullable();
            $table->integer("speed")->nullable();
            $table->integer("durability")->nullable();
            $table->integer("power")->nullable();
            $table->integer("combat")->nullable();
            $table->string('race')->nullable();
            $table->string('height/0')->nullable();
            $table->string('height/1')->nullable();
            $table->string('weight/0')->nullable();
            $table->string('weight/1')->nullable();
            $table->string('eyeColor')->nullable();
            $table->string('hairColor')->nullable();
            $table->string('publisher')->nullable();
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
        Schema::dropIfExists('superheroes');
    }
}
