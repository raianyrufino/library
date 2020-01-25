<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamp = false;
    
    protected $fillable = ['id', 'name'];
    protected $guarded = ['id', 'name'];
    protected $table = 'genres';

    public function author(){
        return $this->hasMany(Author::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }

}
