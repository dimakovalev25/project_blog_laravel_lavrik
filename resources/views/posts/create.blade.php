@php
    //    $categories = \App\Models\Category::all();
    //dd($categories);
@endphp

<x-layouts.base title="posts">

    <h1>create posts page!</h1>
    <br/>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <x-controls.input name="title" type="text" label="Title:"></x-controls.input>
        <br/>

        <x-controls.input name="content" type="text" label="Content:"></x-controls.input>
        <br/>
        <span>
        Choose category:
        </span>

        <x-controls.select name="category_id" :options="$categories"></x-controls.select>
        <br/>

{{--        <x-controls.select name="tags" :options="$tags" multiple="true"></x-controls.select>--}}

        <select name="tags[]" class="form-select w-75  @error('tags') is-invalid @enderror" multiple aria-label="multiple select example">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
            @endforeach
        </select>
        @error('tags')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

{{--        <x-controls.selectlavrik label="Add tags" name="posts[]" :options="$tags" multiple/>--}}

        <br/>

        <button class="btn btn-primary" type="submit">send</button>


    </form>
</x-layouts.base>
