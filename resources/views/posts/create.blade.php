<h1>create posts page</h1>
<br/>
<a href="/posts">posts page
</a>
<br/>
<br/>
<form action="/posts" method="post">
    @csrf
    <input type="text" name="title">
    <input type="text" name="content">
    <button type="submit">send</button>


</form>
