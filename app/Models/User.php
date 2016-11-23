<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    protected $table = 'users';

    public function phone()
    {
        return $this->hasOne('App\Models\Phone');
    }

    /**
     * The roles that belong to the user.
     */
        public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
