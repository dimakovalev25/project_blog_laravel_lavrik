<x-layouts.base title="Video">

    <div class="container">
        <h1>create new video</h1>
        <br/>

        <form action="{{ route('video.store') }}" method="post">
            @csrf
        <x-controls.newinput id=4 name="title" type="text" label="Title:" defval=""></x-controls.newinput>
        <x-controls.newinput id=4 name="url" type="text" label="URL:" defval=""></x-controls.newinput>
            <button class="btn btn-primary" type="submit">send</button>
        </form>
    </div>

</x-layouts.base>


