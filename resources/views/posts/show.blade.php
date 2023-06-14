@php
//    $comments = \App\Models\Comment::where('post_id', '=', $post->id)->get();
    $cmt = $post->comment;
    $comments = $post->comment()->orderByDesc('created_at')->get();
//    dd($cmt);
@endphp

<x-layouts.base title="category">

    <h1>post page</h1>
    <br/>
    <br/>
    <hr>
    <h3>{{ $post->title }}</h3>
    <h5>{{ $post->content }}</h5>
    <em>{{ $post->created_at }}</em>
    <br/>
    <a href="{{route('post.edit', [$post->id])}}">edit post</a>
    <br/>


    <form method="post" action="{{ route('post.destroy', [$post->id]) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">delete post!!!</button>
    </form>


    <hr>

    <form method="post" action="{{ route('comment.store', [$post->id]) }}">
        @csrf
        <x-controls.input defval="{{ null }}" name="content" label="add comment" type="text"></x-controls.input>
{{--        <input class="form-control w-25" type="text" name="content" label="add comment">--}}
        <input type="hidden" name="post" value="{{ $post->id }}">
        <button type="submit" class="btn btn-primary">add comment</button>
    </form>


    <h1>post comments:</h1>
    <br/>

    <ul class="list-group">
        <?php foreach($comments as $key=>$value): ?>
            <li class="list-group-item"><?= $value['content']; ?></li>
        <?php endforeach; ?>
    </ul>

</x-layouts.base>
