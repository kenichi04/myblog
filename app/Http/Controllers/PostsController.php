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

    // public function show($id) {
    public function show(Post $post) {
        // $post = Post::find($id);
        // データが見つからなかった場合に例外を返す
        //  $post = Post::findOrFail($id);

         return view('posts.show')->with('post', $post);
    }
}
