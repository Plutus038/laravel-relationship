<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Phone;

use App\Models\Country;

use App\Models\Role;

use App\Models\Tag;

use App\Models\Taggable;

use App\Models\Video;



class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('relationship');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hasOne()
    {
        $phone = User::with('phone')->find(1)->toArray();
        echo "<pre>";print_r($phone);echo "</pre>";

    }

    public function belongsTo()
    {
        $user = Phone::with('user')->find(2)->toArray();
        echo "<pre>";print_r($user);echo "</pre>";
    }

    public function hasMany()
    {
//        $comments = Post::with('comment')->find(1)->toArray();
        $comments = Post::with(['comment'])->get()->toArray();
        echo "<pre>";print_r($comments);echo "</pre>";
    }

    public function hasManyInverse()
    {
//        $post = Comment::with('post')->find(1)->toArray();
        $post = Comment::with('post')->get()->toArray();
        echo "<pre>";print_r($post);echo "</pre>";

    }

    public function manyToMany()
    {
        $users = User::with(['roles'])->get()->toArray();

        echo "<pre>";print_r($users);echo "</pre>";


    }

    public function hasManyThrough(){

        $country = Country::find(1)->posts;

        dd($country);
//        echo "<pre>";print_r($country);echo "</pre>";

    }


    public function polymorphic(){

        /*$post = Post::find(1);

        foreach ($post->comments as $comment) {
            echo "<pre>";print_r($comment);echo "</pre>";
        }*/

        /*$video = Video::find(1);

        foreach ($video->comments as $comment) {
            echo "<pre>";print_r($comment);echo "</pre>";
        }*/


        $post = Post::find(1)->comments;

//        dd($post);
        echo "<pre>";print_r($post);echo "</pre>";

    }


    public function manyToManyPolymorphic(){        
        
        // Many to many Polymorphic relationship    

        /*$post = Post::find(1);

        foreach ($post->tags as $tag) {
             echo "<pre>";print_r($tag);echo "</pre>";
        }*/

        $post = Post::find(1)->tags;

        dd($post);
        echo "<pre>";print_r($post);echo "</pre>";

    }

    public function eagarLoading(){
        $user = User::with('phone')->get();

        echo "<pre>";print_r($user);echo "</pre>";       
        
        
        // Eager Loading
        $user = User::with(['phone' => function ($query) {
                        $query->where('phone', '=', '7676767676');
                    }])->get();

        echo "<pre>";print_r($user);echo "</pre>";  
    }

    public function lazyEagarLoad(){

        $user = User::all();

        if ($user) {
            $roles[] = $user->load('roles');
        }
        dd($roles);
        echo "<pre>";print_r($roles);echo "</pre>";
    }
}
