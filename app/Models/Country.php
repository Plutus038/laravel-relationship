<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $table = 'countries';

    /**
     * Get all of the posts for the country.
     */
   /* public function posts()
    {
        return $this->hasManyThrough('App\Models\Post', 'App\Models\User');
    }*/

    public function posts()
    {
        return $this->hasManyThrough(
            'App\Models\Post', 'App\Models\User'
        );
    }
}
