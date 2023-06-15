<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;

class Comments extends Controller
{
    public function index()
    {
        $comments = Comment::with('post')->where('status', '=' ,'under_review')->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));

//        return view('comments.index', ['comments' => Comment::all()]);
//        return view('posts.index', ['posts' => Post::all()]);
    }


    public function store(Request $request)
    {
        $request->validate(['content' => 'required|min:1|max:100']);
        $post = $request->only('post');
        $data = $request->only('content', 'post');
        $data['post_id'] = $post['post'];
        Comment::create($data);
        return view('posts.show', ['post' => Post::findOrFail($post['post'])]);

    }

    public function update(string $id)
    {

        $comment = Comment::findOrFail($id)->update(['status' => 'approved']);
        $comments = Comment::with('post')->where('status', '=' ,'under_review')->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));
        return 'update';
    }

    public function destroy(string $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        $comments = Comment::with('post')->where('status', '=' ,'under_review')->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));
    }
}
