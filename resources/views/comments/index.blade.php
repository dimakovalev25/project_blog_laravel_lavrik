<x-layouts.base title="comments">
    <h3>all comments</h3>

{{--    @dd($comments)--}}

    @foreach($comments as $comment)
        <div class="alert alert-danger">


            {{ $comment->created_at}}
            {{ $comment->content }}
            <a href="{{ route('post.show', [$comment->post_id]) }}">
                {{ $comment->content }}

            </a>


        </div>


    @endforeach




</x-layouts.base>
