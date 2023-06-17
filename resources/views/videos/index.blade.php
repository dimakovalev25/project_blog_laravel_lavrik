<x-layouts.base title="videos">

<h1>videos page</h1>
<br/>
<br/>
<a href="{{route('video.create')}}">create new video</a>
<br/>

<br/>
@foreach($videos as $video)
    <hr>
    <a href="{{ route('video.show', $video->id )}}">{{ $video->title }}</a>
    <a href="#">url:   {{ $video->url }}</a>
    <em>{{ $video->created_at }}</em>
{{--    <a href="/posts/{{$post->id}}">more...</a>--}}

    <hr>

@endforeach
</x-layouts.base>


