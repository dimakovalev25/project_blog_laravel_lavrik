<x-layouts.base title="category">



<h1>edit category</h1>
<br/>
<br/>
<br/>

<form action="{{ route('category.update', [$category->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        title: <input type="text" name="title" value="{{ old('slug') ??  $category->title }}">
        @error('title')
        <div style="color: red">{{$message}}</div> @enderror
    </div>
    <br/>
    <br/>
    <div>
        slug: <input type="text" name="slug" value="{{ old('slug') ?? $category->slug }}">
        @error('slug')
        <div style="color: red">{{$message}}</div> @enderror

    </div>
    <br/>
    <br/>
    <div>
        description: <input type="text" name="description" value="{{ old('slug') ?? $category->description }}">
        @error('description')
        <div style="color: red">{{$message}}</div> @enderror

    </div>
    <br/>
    <br/>
    <button type="submit">update</button>
</form>
</x-layouts.base>
