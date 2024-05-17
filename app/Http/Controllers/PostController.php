<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppoort\Fcades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
    $posts = Auth::user()->posts()->orderBy('create_at', 'desc')->get();

    return view('posts.index', compact('posts'));
}

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }
}
