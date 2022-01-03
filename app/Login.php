<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public function signups()
    {
        return $this->hasMany('App\Signup');
    }
}
