<x-layouts.base title="category">

<h1>posts page</h1>
<br/>
<br/>
<a href="{{route('post.create')}}">create new post</a>
<br/>

<br/>
@foreach($posts as $post)
    <hr>
    <h3>{{ $post->title }}</h3>
    <h5>{{ $post->content }}</h5>
    <h7>comments:  {{ $post->comments_count }}</h7>
    <br/>

    <h7>{{ $post->created_at }}</h7>

    <a href="/posts/{{$post->id}}">more...</a>

    <hr>

@endforeach
</x-layouts.base>


