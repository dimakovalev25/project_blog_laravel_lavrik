<x-layouts.base title="category">

    <h1>tags page</h1>
    <br/>
    <br/>
    <a href="{{route('tag.create')}}">create new tag</a>
    <br/>

    <br/>
    @foreach($tags as $tag)
        <hr>
        <h3>{{ $tag->title }}</h3>
        <h5>{{ $tag->url }}</h5>
        <h5>{{ $tag->description }}</h5>

        <form method="post" action="{{route('tag.destroy', $tag->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">delete</button>
        </form>

        <hr>
    @endforeach
</x-layouts.base>


