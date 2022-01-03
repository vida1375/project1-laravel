<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    public function login()
    {
        return $this->belongsTo('App\Login');
    }
}
