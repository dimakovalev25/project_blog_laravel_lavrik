<x-layouts.base title="comments">
    <h3>all comments</h3>
{{--    {{  dd($comment->getpost)}}--}}
    {{--    @dd($comments)--}}

    @foreach($comments as $comment)
        <div class="alert alert-danger">

            <div>
               data: {{ $comment->created_at}}
               text: "{{ $comment->content }}"
                <div style="display: flex">

                <a href="{{ route('post.show', [$comment->id]) }}">
                    link to original post
                </a>

                </div>
            </div>

            <div>

                <form action="{{route('comment.update', [$comment->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Approve</button>
                </form>

                <form action="{{route('comment.destroy', [$comment->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>

        </div>

    @endforeach


</x-layouts.base>
