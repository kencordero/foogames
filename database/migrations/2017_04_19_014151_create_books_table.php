<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('author');
            $table->integer('year_published');
            $table->string('image_url')->nullable();
        });

        Schema::create('authors', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
        Schema::drop('authors');
    }
}
