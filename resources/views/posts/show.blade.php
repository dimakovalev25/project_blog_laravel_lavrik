<x-layouts.base title="category">

<h1>post page</h1>
<br/>
<br/>
<hr>
<h3>{{ $post->title }}</h3>
<h5>{{ $post->content }}</h5>
<em>{{ $post->created_at }}</em>


</x-layouts.base>
