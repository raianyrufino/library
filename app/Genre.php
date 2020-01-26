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
        return $this->belongsToMany(Author::class, 'genres_author', 'genre_id');
    }

    public function books(){
        return $this->belongsToMany(Book::class, 'genres_books', 'genre_id');
    }

   

}
