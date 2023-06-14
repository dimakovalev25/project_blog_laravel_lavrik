<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{

    public function index()
    {

        dd(Post::recent());
//        $post = new Post();
//        $post->title = 'test';
//        $post->content = 'test content';
//        $post->save();

        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create()
    {

//        $data = Category::orderBy('title')->get()->toArray();
//        $data = Category::pluck('id', 'title');

        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|max:100',
            'content' => 'required',
            'category_id' => 'required',
        ]);


        $data = $request->only(['title', 'content', 'category_id']);
        Post::create($data);
        return redirect('/posts');

//        dd($request);   bad practice
//        $args = $request->all();
//        $post = new Post();
//        $post->title = $args['title'];
//        $post->content = $args['content'];
//        $post->save();
//        dd('done!');

//        return view('posts.store');
    }

    public function show($id){
//        return "posts with id = $id";

        return view('posts.show', ['post' => Post::findOrFail($id)] );
    }
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|min:2|max:100',
            'content' => 'required|min:2',
            'category_id' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $data = $request->only('title', 'content', 'category_id');
        $post->update($data);
        return redirect()->route('post.index');
    }

    public function destroy(string $id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }

}
