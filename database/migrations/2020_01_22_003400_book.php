<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('books', function(Blueprint $table){
            $table->bigIncrements('id')->nullable(false);
            $table->string('title', 30)->nullable(false);
            $table->string('genre', 30)->nullable(false);
            $table->string('about', 30);
            $table->string('edition', 4);
            $table->Integer('author_id')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('books');

    }
}
