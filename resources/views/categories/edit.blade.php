<x-layouts.base title="category">

    <h1>edit category</h1>
    <br/>

    <form action="{{ route('category.update', [$category->id]) }}" method="post">
        @csrf
        @method('PUT')

        <x-controls.input name="title" type="text" label="Title:" defval="{{ $category->title }}"></x-controls.input>
        <br/>

        <x-controls.input name="slug" type="text" label="Slug:" defval="{{ $category->slug }}" ></x-controls.input>
        <br/>

        <x-controls.input name="description" type="text" label="Description:" defval="{{ $category->description }}"></x-controls.input>
        <br/>

        <br/>
        <button class="btn btn-info" type="submit">update</button>

        {{--

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
            <br/>--}}

    </form>
</x-layouts.base>
