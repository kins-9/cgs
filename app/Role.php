<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
    public function User()
    {
        //create relationsip between user and roles
    return $this->belongsToMany('App\User');
    }
}
