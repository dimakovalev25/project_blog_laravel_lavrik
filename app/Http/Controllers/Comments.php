<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Enums\Comment\Status as enumCommentStatus;

use App\Http\Requests\Comment\Add as commentRequest;

class Comments extends Controller
{

    const FOR_MODELS = [
        'video' => Video::class,
        'post' => Post::class
    ];
    public function index()
    {
        $comments = Comment::with('post')->where('status', '=', 0)->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));

//        return view('comments.index', ['comments' => Comment::all()]);
//        return view('posts.index', ['posts' => Post::all()]);
    }


    public function store(commentRequest $request)
    {
//        $request->validate([
//            'content' => 'required|min:1|max:100',
//            'post_id' => 'required'
//        ]);
//        $data = $request->only('content', 'post_id');

        $modelName = self::FOR_MODELS[$request->for];
        $model = $modelName::findOrFail($request->id);
        $model->comments()->create($request->only('content', 'id'));

        $data = $request->validated();
//        Comment::create($data);
        return view('posts.show', ['post' => Post::findOrFail($data['id'])]);

    }

    public function videostore(commentRequest $request)
    {
//        $request->validate([
//            'content' => 'required|min:1|max:100',
//            'post_id' => 'required'
//        ]);
//        $data = $request->only('content', 'post_id');

        $data = $request->validated();
        Comment::create($data);
        return view('videos.show', ['video' => Video::findOrFail($data['id'])]);

    }

    public function update(string $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->status = enumCommentStatus::APPROVED;
        $comment->save();

        $comments = Comment::with('post')->where('status', '=', 0)->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));
    }

    public function destroy(string $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->status = enumCommentStatus::REJECTED;

//        $comment->delete();

        $comments = Comment::with('post')->where('status', '=', 0)->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));
    }


    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));

    }
}
