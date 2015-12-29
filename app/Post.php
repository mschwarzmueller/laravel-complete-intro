<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'body'];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'posts_categories');
    }
}
