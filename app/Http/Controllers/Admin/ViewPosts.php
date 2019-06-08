<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
Use App\User;
class ViewPosts extends Controller
{
    public function individualPosts(){
        $id = auth()->user()->id;
// return $id;
        $posts = User::find($id)->posts;

        return view('admin\allposts', compact('posts'));

    }

    public function personalDetails(){
        return view('admin\personalDetails');
    }

}
