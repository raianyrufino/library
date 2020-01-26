<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model{
    public $timestamps = false;
    
    protected $fillable = ['id', 'name', 'surname', 'genre'];
    protected $guarded =  ['id', 'name', 'surname'];
    protected $table = 'authors';

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function genres(){
        return belongsToMany(Genre::class, 'genres_books', 'author_id');
    }
}
