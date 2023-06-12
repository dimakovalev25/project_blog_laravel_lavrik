<x-layouts.base title="category">
<div class="container">

    <h1>categories page</h1>
    <br/>
    <a href="{{route('category.create')}}">create new category</a>
    <br/>
    <a href="{{route('catadmin.trash')}}">deleted categories</a>
    <br/>

    @foreach($categories as $category)
        <hr>
        <h3>name: {{ $category->title }}</h3>
        <h3>slug: {{ $category->slug }}</h3>
        <h5>description: {{ $category->description }}</h5>
        <a href="/categories/{{ $category->id}}">more...</a>
        <hr>
    @endforeach


</div>

</x-layouts.base>



