<x-layouts.base title="videos">

    <h1>videos page</h1>
    <br/>
    <br/>
    <a href="{{route('video.create')}}">create new video</a>
    <br/>

    <br/>
    @foreach($videos as $video)
        <hr>
        <h3>{{ $video->title }}</h3>
        <h6>url: {{ $video->url }}</h6>
        <h6>{{ $video->created_at }}</h6>
        <a href="{{ route('video.show', $video->id )}}">more...</a>
        <hr>
    @endforeach
</x-layouts.base>


