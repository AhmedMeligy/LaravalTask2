<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user')->get();
        $posts = Post::paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(){
        $users = User::all();
        return view('posts.create', ['users'=>$users]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function store(Request $request){
        $data = $request->except('_token');
        $data['slug'] = Str::slug($data['title']);
        $post = Post::create($data);
        return redirect()->route('posts.index');
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
    $post->update([
        'title' => $request->input('title'),
        'body' => $request->input('body')
    ]);
    return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
};
