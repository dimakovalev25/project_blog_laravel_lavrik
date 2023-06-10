<h1>create new category</h1>
<br/>
<a href="{{route('category.index')}}">category page
</a>
<br/>
<br/>

<form action="{{ route('category.store') }}" method="post">
    @csrf
    <div>
        title: <input type="text" name="title" value="{{old('title')}}">
        @error('title')
        <div style="color: red">{{$message}}</div> @enderror
    </div>
    <br/>
    <br/>
    <div>
        slug: <input type="text" name="slug" value="{{old('slug')}}">
        @error('slug')
        <div style="color: red">{{$message}}</div> @enderror
    </div>
    <br/>
    <br/>
    <div>
        descr: <input type="text" name="description" value="{{old('description')}}">
        @error('description')
        <div style="color: red">{{$message}}</div> @enderror
    </div>
    <br/>
    <br/>
    <button type="submit">send</button>
</form>
