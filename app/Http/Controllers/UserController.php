<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Phone;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hasOne()
    {
        $phone = User::find(2)->phone;

        echo $phone->phone;

        exit();

    }

    public function belongsTo()
    {
        $user = Phone::find(2)->user;

//        dd($user);
        echo "<pre>";print_r($user);echo "</pre>";

        exit();

    }

    public function hasMany()
    {
        $comments = Post::find(1)->comment;

//        dd($comments);
        echo "<pre>";print_r($comments);echo "</pre>";

        exit();

    }

    public function hasManyInverse()
    {
        $post = Comment::find(1)->post;

//        dd($post);
        echo "<pre>";print_r($post);echo "</pre>";

        exit();

    }

    public function manyToMany()
    {
        $users = User::find(2)->roles()->get();



//        dd($post);
        echo "<pre>";print_r($users);echo "</pre>";

        exit();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
