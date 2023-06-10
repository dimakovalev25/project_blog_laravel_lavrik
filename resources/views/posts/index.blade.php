<h1>posts page</h1>
<a href="{{route('persons.index')}}">to persons</a>
<br/>
<br/>
<a href="{{route('categories.index')}}">to categories</a>
<br/>
<br/>
<a href="{{route('post.create')}}">create new post</a>
<br/>

<br/>
@foreach($posts as $post)
    <hr>
    <h3>{{ $post->title }}</h3>
    <h5>{{ $post->content }}</h5>
    <em>{{ $post->created_at }}</em>
    <a href="/posts/{{$post->id}}">more...</a>

    <hr>

@endforeach
