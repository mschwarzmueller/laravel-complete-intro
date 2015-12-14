<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['author_id', 'quote'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
