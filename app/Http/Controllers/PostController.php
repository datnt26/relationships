<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show($id)
    {
    	$post = Post::find(1);
        return view('posts.show', array('post' => $post));
    }
}
