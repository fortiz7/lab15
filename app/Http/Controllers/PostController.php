<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::al(); // Error intencional: 'al()' en lugar de 'all()'
        return view('posts.index', compact('posts'));
    }

}
