<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    /**
     * Get the comments for the post.
     */
    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * Get all of the comments related to the post.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }


    /**https://laravel.com/docs/5.3/queries#raw-expressions
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
