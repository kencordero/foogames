<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function(Blueprint $table) {
             $table->increments('id');
             $table->timestamps();
             $table->string('title');
             $table->integer('year_released');
             $table->string('image_url')->nullable();
        });

        Schema::create('platforms', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('make');
            $table->integer('year_released');
            $table->string('logo_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
        Schema::drop('platforms');
    }
}
