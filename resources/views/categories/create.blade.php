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
    <h1>create new category</h1>
    <br/>
    <a href="{{route('category.index')}}">category page
    </a>
    <br/>

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" class="form-control" placeholder="title" value="{{old('title')}}">
            @error('title')
            <div style="color: red">{{$message}}</div> @enderror
        </div>
        <br/>
        <div>
            slug: <input type="text" name="slug" value="{{old('slug')}}">
            @error('slug')
            <div style="color: red">{{$message}}</div> @enderror
        </div>
        <br/>
        <div>
            descr: <input type="text" name="description" value="{{old('description')}}">
            @error('description')
            <div style="color: red">{{$message}}</div> @enderror
        </div>
        <br/>
        <button type="submit">send</button>
    </form>
</div>
</body>
</html>



