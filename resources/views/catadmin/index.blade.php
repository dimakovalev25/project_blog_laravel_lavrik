<x-layouts.base title="category">

    <h1>deleted categories page</h1>
    <br/>
    <br/>
    @foreach($trashedcategory as $category)
        <hr>
        <h3>name: {{ $category->title }}</h3>
        <h3>slug: {{ $category->slug }}</h3>
        <h5>description: {{ $category->description }}</h5>

        <form action="{{route('catadmin.restore', [$category->id])}}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-success">restore category</button>

        </form>
        <br/>

        <form action="{{route('catadmin.destroy', [$category->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">delete forewer</button>

        </form>
        <br/>
        <hr>

    @endforeach
</x-layouts.base>
