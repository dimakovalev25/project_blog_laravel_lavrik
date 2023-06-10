<h1>create new category</h1>
<br/>
<a href="{{route('category.index')}}">category page
</a>
<br/>
<br/>

<form action="{{ route('category.store') }}" method="post">
    @csrf
    title: <input type="text" name="title">
    <br/>
    <br/>
    slug:  <input type="text" name="slug">
    <br/>
    <br/>
    description:  <input type="text" name="description">
    <br/>
    <br/>
    <button type="submit">send</button>
</form>
