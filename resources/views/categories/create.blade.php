<x-layouts.base title="Category">

    <div class="container">
        <h1>create new category</h1>
        <br/>

        <form action="{{ route('category.store') }}" method="post">
            @csrf

{{--         <x-naws.link route="welcom" :params="[]" >test link</x-naws.link>--}}


        <x-controls.newinput id=4 name="title" type="text" label="Title:" defval=""></x-controls.newinput>
        <x-controls.newinput id=4 name="slug" type="text" label="Slug:" defval=""></x-controls.newinput>
        <x-controls.newinput id=4 name="description" type="text" label="Description:" defval=""></x-controls.newinput>


            <x-controls.newselect name="select" label="Choose category:" :options="['1'=> 'opt1', '2' => 'opt2']"></x-controls.newselect>

{{--            <x-controls.input name="title" type="text" label="Title:"></x-controls.input>--}}
{{--            <br/>--}}

{{--            <x-controls.input name="slug" type="text" label="Slug:"></x-controls.input>--}}
{{--            <br/>--}}

{{--            <x-controls.input name="description" type="text" label="Description:"></x-controls.input>--}}
{{--            <br/>--}}


            <button class="btn btn-primary" type="submit">send</button>
        </form>
    </div>

</x-layouts.base>


