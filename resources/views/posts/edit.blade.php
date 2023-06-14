@php
    $categories = \App\Models\Category::all();
@endphp

<x-layouts.base title="category">

    <h1>edit post</h1>
    <br/>

    <form action="{{ route('post.update', [$post->id]) }}" method="post">
        @csrf
        @method('PUT')
        <x-controls.input name="title" type="text" label="Title:" defval="{{ $post->title }}"></x-controls.input>
        <br/>
        <x-controls.input name="content" type="text" label="Content:" defval="{{ $post->content }}" ></x-controls.input>
        <br/>
        <span>
        Choose category:
        </span>
        <x-controls.select name="category_id" :options="$categories"></x-controls.select>
        <br/>

        <button class="btn btn-info" type="submit">update</button>

    </form>
</x-layouts.base>
