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

<div class="container">

    <h1>categories page</h1>
    <br/>
    <a href="{{route('post.index')}}">to posts</a>
    <br/>
    <br/>
    <a href="{{route('category.create')}}">create new category</a>
    <br/>
    <br/>
    <a href="{{route('catadmin.trash')}}">deleted categories</a>
    <br/>

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
</body>
</html>




