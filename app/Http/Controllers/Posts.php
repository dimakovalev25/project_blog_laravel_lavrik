<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{

    public function index()
    {
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
        $data = $request->only(['title', 'content', 'category_id']);
//        dd($data);
        Post::create($data);
        return redirect('/posts');

//        dd($request);   bad practice
//        $args = $request->all();
//        $post = new Post();
//        $post->title = $args['title'];
//        $post->content = $args['content'];
//        $post->save();
//        dd('done!');

        return view('posts.store');
    }

    public function show($id){
//        return "posts with id = $id";

        return view('posts.show', ['post' => Post::findOrFail($id)] );
    }
}
