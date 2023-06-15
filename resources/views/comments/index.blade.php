<x-layouts.base title="comments">
    <h3>all comments</h3>

{{--    @dd($comments)--}}

    @foreach($comments as $comment)
        <div class="alert alert-danger">


            {{ $comment->created_at}}
            {{ $comment->content }}

        </div>


    @endforeach




</x-layouts.base>
