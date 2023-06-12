<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<h1>posts page</h1>
<br/>
<a href="{{route('category.index')}}">to categories</a>
<br/>
<br/>
<a href="{{route('post.create')}}">create new post</a>
<br/>

<br/>
@foreach($posts as $post)
    <hr>
    <h3>{{ $post->title }}</h3>
    <h5>{{ $post->content }}</h5>
    <em>{{ $post->created_at }}</em>
    <a href="/posts/{{$post->id}}">more...</a>

    <hr>

@endforeach
</body>
</html>


