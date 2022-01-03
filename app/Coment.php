<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    public function coments()
    {
        return $this->hasMany('App\Post');
    }
}
