@props([
    'options',
    'name',
    'id' => null

])

@php
    if($id === null){
        $id = "field-$name";
    }
@endphp


<select
    name="{{ $name }}"
    id="{{ $id }}"
    class="form-select w-25 @error($name) is-invalid @enderror"

    aria-label="Default select example">
    {{--    <option selected>Open this select menu</option>--}}
    @foreach($options as $op)
        <option value="{{ $op['id'] }}"> {{ $op['title'] }} </option>
    @endforeach
</select>

@error( $name )
<div class="invalid-feedback">{{ $message }}</div>
@enderror
