<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamp = false;
    
    protected $fillable = ['id', 'name'];
    protected $guarded = ['id', 'name'];
    protected $table = 'genres';

    public function authors(){
        return belongsToMany(Author::class, 'genres_author', 'author_id');
    }

    public function books(){
        return belongsToMany(Book::class, 'genres_books', 'books_id');
    }

   

}
