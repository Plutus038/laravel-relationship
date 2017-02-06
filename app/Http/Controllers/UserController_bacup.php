<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Country;
use App\Models\Post;
use App\Models\Role;
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


      $phone = User::find(2)->phone;

        return view('relationship.hasOne')
            ->with(
                ['record' => $phone]
            );

    }

    public function belongsTo()
    {
        $user = Phone::find(2)->user;

        return view('relationship.belongsTo')
            ->with(
                ['record' => $user]
            );

    }

    public function hasMany()
    {
        $comments = Post::find(1)->comments;

        return view('relationship.hasMany')
            ->with(
                ['record' => $comments]
            );
    }

    public function hasManyInverse()
    {
        $post = Comment::find(1)->post;


        return view('relationship.hasManyInverse')
            ->with(
                ['record' => $post]
            );

    }

    public function manyToMany()
    {
        $users = User::find(2)->roles()->get();

    foreach($users as $res){
        echo "<pre>";print_r($res);echo "</pre>";exit();
    }
exit();
        echo "<pre>";print_r($users[0]['pivot']);echo "</pre>";exit();

        foreach ($users as $role) {
           echo "<pre>";print_r($role['pivot']);echo "</pre>";
        }

        exit();

        return view('relationship.manyToMany')->with(
            ['record' => $users]
        );

    }

    public function manyToManyInverse(){
        $roles = Role::find(1);

//        echo "<pre>";print_r($roles->roles());echo "</pre>";exit();

        foreach ($roles->roles as $role) {
            echo "<pre>";print_r( $role->pivot->created_at );echo "</pre>";
        }

        exit();
        /*return view('relationship.manyToManyInverse')->with(
            ['record' => $users]
        );*/
    }


    public function hasManyThrough(){

        $country = Country::find(1)->posts;

        return view('relationship.hasManyThrough')->with(
            ['record' => $country]
        );

    }

    public function polymorphic(){


        $post = Post::find(1);

        echo "<pre>";($post->commentsMorphic());echo "</pre>";exit();
        foreach ($post->tags as $tag) {
            print_r($tag);
        }

        exit();

        $post = Post::find(2);

        /*foreach ($post->comments as $comment) {
            print_r($comment);
        }*/

        $comment = Comment::find(1);



        print_r($post->commentsMorphic);exit();

        foreach ($post->commentable as $comment) {
            print_r($comment);
        }

        dd($comment);exit();

        $commentable = $comment->commentable;

        print_r($commentable);
    }

    public function lazyEagarLoad(){

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
