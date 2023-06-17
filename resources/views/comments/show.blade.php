
<x-layouts.base title="category">

    <h1>comment page</h1>
    <br/>
    <hr>
    <h3>{{ $comment->content }}</h3>
    <h3>data: {{ $comment->created_at }}</h3>
    <h3>status: {{ $comment->status }}</h3>
    <br/>
{{--    <a href="{{route('post.edit', [$post->id])}}">edit comment</a>--}}
    <br/>


</x-layouts.base>
