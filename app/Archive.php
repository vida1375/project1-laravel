<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    public function archves()
    {
        return $this->hasMany('App\post');
    }
    public function pposts()
    {
        return $this->belongsTo('App\post');
    }
}
