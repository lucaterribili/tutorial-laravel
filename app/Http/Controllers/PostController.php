<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->get();
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
    }
}
