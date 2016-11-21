<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class WelcomeController extends Controller
{
    // Controller for the welcome page

    public function index()
    {
        $posts = Post::paginate(6);
        return view('welcome', compact('posts'));
    }
}
