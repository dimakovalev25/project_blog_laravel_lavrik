@php

@endphp

<x-layouts.base title="tags">

    <h1>create tag</h1>
    <br/>

    <form action="{{ route('tag.store') }}" method="post">
        @csrf
        <x-controls.input name="title" type="text" label="Title:"></x-controls.input>
        <br/>
        <x-controls.input name="url" type="text" label="Url:"></x-controls.input>
        <br/>
        <x-controls.input name="description" type="text" label="Description:"></x-controls.input>
        <br/>
        <button class="btn btn-primary" type="submit">send</button>
    </form>

</x-layouts.base>
