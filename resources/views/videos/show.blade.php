<x-layouts.base title="video">

    <h1>video page</h1>
    <br/>
    <br/>
    <hr>
    <h3>title: {{ $video->title }}</h3>
    <h3>url: <a href="#">{{ $video->url }}</a></h3>
    <hr>
    <br/>
    <br/>
    {{--<a href="{{route('video.edit', [$video->id])}}">edit video</a>--}}
    {{--<br/>--}}
    {{--<br/>--}}
    {{--<form method="post" action="{{ route('video.destroy', [$video->id]) }}">--}}
    {{--    @csrf--}}
    {{--    @method('DELETE')--}}
    {{--    <button class="btn btn-danger">delete video!!!</button>--}}

    {{--</form>--}}

    <form method="post" action="{{ route('comment.store', [$video->id]) }}">
        @csrf
        <x-controls.input defval="{{ null }}" name="content" label="add comment" type="text"></x-controls.input>
        {{--        <input class="form-control w-25" type="text" name="content" label="add comment">--}}
        <input type="hidden" name="id" value="{{ $video->id }}">
        <input type="hidden" name="for" value="video">
        <button type="submit" class="btn btn-primary">add comment</button>
    </form>


    <h1>post comments:</h1>
    <br/>

    <ul class="list-group">
{{--        @foreach($comments as $key=>$value)--}}
{{--            <div style="display: flex; justify-content: space-between" class="list-group-item">--}}

{{--                <li><?= $value['content']; ?></li>--}}
{{--                <a href="{{ route('comment.show', $value['id']) }}">to comment...</a>--}}

{{--            </div>--}}
{{--        @endforeach--}}
    </ul>
</x-layouts.base>
