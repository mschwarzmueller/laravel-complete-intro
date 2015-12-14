<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoggedAction extends Model
{
    protected $fillable = ['nice_action_id'];

    public function niceAction()
    {
        return $this->belongsTo('App\NiceAction');
    }
}
