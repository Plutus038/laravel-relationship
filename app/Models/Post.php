<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    /**
     * Get the comments for the blog post.
     */
    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
