<h1>post page</h1>
<br/>
<a href="{{route('post.index')}}">to posts...</a>
<br/>
<br/>
<hr>
<h3>{{ $post->title }}</h3>
<h5>{{ $post->content }}</h5>
<em>{{ $post->created_at }}</em>


