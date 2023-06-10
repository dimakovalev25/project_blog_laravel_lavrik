<h1>create posts page</h1>
<br/>
<a href="{{route('post.index')}}">posts page
</a>
<br/>
<br/>
<form action="/posts" method="post">
    @csrf
    <input type="text" name="title">
    <br/>
    <br/>
    <input type="text" name="content">
    <br/>
    <br/>
    <button type="submit">send</button>


</form>
