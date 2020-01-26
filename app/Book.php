<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'title', 'genre', 'about', 'edition', 'author_id'];
    protected $guarded = ['id', 'author_id'];
    protected $table = 'books'; 

    public function author(){
        return $this->belongsTo(Author::class);
        # aqui tava com this já, voce que n colocou
    }

    public function genres(){
        return $this->belongsToMany(Genre::class, 'genres_books', 'book_id');
    }
}
