<?php

namespace App\Http\Controllers;

use App\Models\Category;
//use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\Post\Save as SaveRequest;

class Posts extends Controller
{
    public function index()
    {
        $posts = Post::withCount('comments')->orderByDesc('created_at')->get();
        return view ('posts.index', compact('posts'));
//        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(SaveRequest $request)
    {
//        $request->validate([
//            'title' => 'required|min:2|max:100',
//            'content' => 'required',
//            'category_id' => 'required',
//        ]);

//        $data = $request->only(['title', 'content', 'category_id']);

        $data = $request->validated();
//        dd($data);

        Post::create($data);
        return redirect('/posts');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
//        $comments = $post->comment()->where('status', '=' ,10)->orderByDesc('created_at')->get();
//        $comments = $post->comment()->orderByDesc('created_at')->get();
//        dd($comments);
        return view('posts.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(SaveRequest $request, string $id)
    {

//        $request->validate([
//            'title' => 'required|min:2|max:100',
//            'content' => 'required|min:2',
//            'category_id' => 'required',
//        ]);

        $post = Post::findOrFail($id);
        $data = $request->only('title', 'content', 'category_id');
        $post->update($data);
        return redirect()->route('post.index');
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }

}
