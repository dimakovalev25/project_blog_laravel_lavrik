@php
    $categories = \App\Models\Category::all();
//dd($categories);
@endphp

<x-layouts.base title="posts">

    <h1>create posts page</h1>
    <br/>
    <form action="/posts" method="post">
        @csrf

        <x-controls.input name="title" type="text" label="Title:"></x-controls.input>
        <br/>

        <x-controls.input name="content" type="text" label="Content:"></x-controls.input>
        <br/>

        <span>
        Choose category:
        </span>

{{--        <x-controls.select  :options="  array(['title'=>'title1','value'=>'value1'],['title'=>'title2','value'=>'value2'],['title'=>'title3','value'=>'value3'])"--}}
{{--        ></x-controls.select>--}}

        <x-controls.select name="category_id" :options="$categories"></x-controls.select>

        <br/>

        <button class="btn btn-primary" type="submit">send</button>

        {{--    <input type="text" name="title">--}}
        {{--    <br/>--}}
        {{--    <br/>--}}
        {{--    <input type="text" name="content">--}}
        {{--    <br/>--}}
        {{--    <br/>--}}


    </form>
</x-layouts.base>
