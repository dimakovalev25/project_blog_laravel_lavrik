<x-layouts.base title="categories">

<h1>category page</h1>
<br/>
<br/>
<hr>
<h3>category: {{ $category->title }}</h3>
<h3>slug: {{ $category->slug }}</h3>
<em>description:  {{ $category->description }}</em>
<hr>
<br/>
<br/>
<a href="{{route('category.edit', [$category->id])}}">edit category</a>
<br/>
<br/>
<form method="post" action="{{ route('category.destroy', [$category->id]) }}">
    @csrf
    @method('DELETE')
    <button>delete category!!!</button>
</form>

</x-layouts.base>
