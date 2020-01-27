<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Author extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('authors', function(Blueprint $table){
            $table->bigIncrements('id')->nullable(false);
            $table->string('name', 30)->nullable(false);
            $table->string('surname', 30)->nullable(false);
            // $table->string('genre_id', 30)->nullable(false);
           // $table->Integer('genre_id')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('authors');
    }
}
