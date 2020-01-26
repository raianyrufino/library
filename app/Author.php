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
        return $this->belongsToMany(Genre::class, 'genres_author', 'author_id');
    }
}
