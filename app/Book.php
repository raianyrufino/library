<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'title', 'genre', 'about', 'edition', 'author_id'];
    protected $guarded = ['id', 'author_id'];
    protected $table = 'books'; 
}
