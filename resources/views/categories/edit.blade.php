<h1>edit category</h1>
<br/>
<a href="{{route('category.index')}}">categories page
</a>
<br/>
<br/>

<form action="{{ route('category.update', [$category->id]) }}" method="post">
    @csrf
    @method('PUT')
    title: <input type="text" name="title" value="{{ $category->title }}">
    <br/>
    <br/>
    slug: <input type="text" name="slug" value="{{ $category->slug }}">
    <br/>
    <br/>
    description:  <input type="text" name="description" value="{{ $category->description }}">
    <br/>
    <br/>
    <button type="submit">update</button>
</form>
