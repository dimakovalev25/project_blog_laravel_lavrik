<x-layouts.base title="Category">

    <div class="container">
        <h1>create new category</h1>
        <br/>
        <a href="{{route('category.index')}}">category page
        </a>
        <br/>

        <form action="{{ route('category.store') }}" method="post">
            @csrf

            <x-controls.input name="title" type="text" label="Title:"></x-controls.input>
            <br/>

            <x-controls.input name="slug" type="text" label="Slug:"></x-controls.input>
            <br/>

            <x-controls.input name="description" type="text" label="Description:"></x-controls.input>
            <br/>

            <br/>
            <button class="btn btn-primary" type="submit">send</button>
        </form>
    </div>

</x-layouts.base>


