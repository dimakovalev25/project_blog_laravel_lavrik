<x-layouts.base title="persons">




<h1>persons page</h1>
<br/>
<a href="{{route('persons.index')}}">create new person</a>
<br/>
<br/>
@foreach($persons as $person)
    <hr>
    <h3>name:  {{ $person->name }}</h3>
    <h5>email:  {{ $person->email }}</h5>
    <em>age:   {{ $person->age }}</em>
    <hr>
@endforeach
</x-layouts.base>
