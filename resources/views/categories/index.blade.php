<h1>categories page</h1>
<br/>
<a href="{{route('post.index')}}">to posts</a>
<br/>
<br/>
<a href="{{route('category.create')}}">create new category</a>
<br/>

<br/>
@foreach($categories as $category)
    <hr>
    <h3>name: {{ $category->title }}</h3>
    <h3>slug: {{ $category->slug }}</h3>
    <h5>description:  {{ $category->description }}</h5>
    <a href="/categories/{{ $category->id}}">more...</a>

    <hr>

@endforeach
