<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NiceAction extends Model
{
    protected $fillable = ['name', 'niceness'];

    public function loggedActions()
    {
        return $this->hasMany('App\LoggedAction');
    }
}
