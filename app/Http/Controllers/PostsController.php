<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index() {
        // $posts = \App\Post::all();
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        // 上の書き方と同じ
        $posts = Post::latest()->get();

        // データ取得をブラウザで確認できる
        // dd($posts->toArray()); // dump die の略
        return view('posts.index', [
            'posts' => $posts,
        ]);
        // 上の書き方と同じ
        // return view('post.index')->with('posts', $posts);
    }
}
