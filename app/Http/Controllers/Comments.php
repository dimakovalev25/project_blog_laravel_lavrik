<?php

namespace App\Http\Controllers;

use App\Enums\Comment\Status as enumCommentStatus;
use App\Http\Requests\Comment\Add as commentRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;

class Comments extends Controller
{

    const FOR_MODELS = [
        'video' => Video::class,
        'post' => Post::class
    ];

    const MODELS_REDIRECT = [
        Video::class => 'video.show',
        Post::class => 'posts.show'
    ];
    public function index()
    {
        $comments = Comment::with('post')->where('status', '=', 0)->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));
    }


    public function store(commentRequest $request)
    {
        $modelName = self::FOR_MODELS[$request->for];
        $model = $modelName::findOrFail($request->id);
        $model->comments()->create($request->only('content'));

        $request->session()->flash('notification', 'comment.added');

//        return redirect()->route(
//            self::MODELS_REDIRECT[$model->commentable_type],
//            [ $model->commentable_id ]
//        );


        if ($modelName === 'App\Models\Post') {
            $data = $request->validated();
            return view('posts.show', ['post' => Post::findOrFail($data['id'])]);
        } elseif ($modelName === 'App\Models\Video') {
            $data = $request->validated();
            return view('videos.show', ['video' => Video::findOrFail($data['id'])]);
        } else {
            return view('welcom');
        }

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
        $comment->delete();
        $comment->status = enumCommentStatus::REJECTED;
        $comments = Comment::with('post')->where('status', '=', 0)->orderByDesc('created_at')->get();
        return view('comments.index', compact('comments'));
    }


    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));
    }
}
