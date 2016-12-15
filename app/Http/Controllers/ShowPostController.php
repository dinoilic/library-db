<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ShowPostController extends Controller
{
    //
    public function show($id)
    {
    	$post = Post::findOrFail($id);
        
        return view('posts.show', compact('post'));
    }
}
