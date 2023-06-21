<?php

namespace App\Http\Controllers;

use App\Models\Category;
//use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\Post\Save as SaveRequest;
use App\Models\Tag;

class Posts extends Controller
{
    public function index()
    {
        $posts = Post::withCount('comments')->orderByDesc('created_at')->get();
        $tags = Tag::orderByDesc('title')->pluck('title', 'id');
//        dd($tags);
        return view ('posts.index', compact('posts', 'tags'));
//        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create()
    {
//        $tags = Tag::orderByDesc('title')->pluck('title', 'id');
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('tags', 'categories'));
    }

    public function store(SaveRequest $request)
    {
        $data = $request->validated();
        $post = Post::create($data);
        $post->tags()->sync($data['tags']);


        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
//        $comments = $post->comment()->where('status', '=' ,10)->orderByDesc('created_at')->get();
//        $comments = $post->comment()->orderByDesc('created_at')->get();
        return view('posts.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
//        $tags = Tag::orderByDesc('title')->pluck('title', 'id');
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'tags'));
    }

    public function update(SaveRequest $request, string $id)
    {   $data = $request->validated();
        $post = Post::findOrFail($id);
        $post->update($data);
        $post->tags()->sync($data['tags']);

//        $post = Post::findOrFail($id);
//        $data = $request->only('title', 'content', 'category_id');
//        $tags = $request->only('tags');
//        $post->update($data);
//        $post->tags()->sync($data['tags']);
        return redirect()->route('post.index');
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }

}
