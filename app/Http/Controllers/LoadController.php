<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class LoadController extends Controller
{
    public function home(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
    public function singleBlog($user_id,$id){
        $blogItem= Post::find($id);
        $user = Post::find($user_id)->user;
        return view('users\singleBlog', compact('blogItem','$user'));

        // return $user->name;
    }
}
