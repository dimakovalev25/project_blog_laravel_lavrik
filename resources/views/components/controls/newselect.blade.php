@props([
    'name',
    'label',
    'options',
    'multiple' => false,
    'id' => null,
    'defval' => ''
])

@php
    $id = $name . bin2hex(random_bytes(6));
@endphp

<label for="{{ $id }}" class="mt-3 w-100 mb-2 form-group"> {{$label}}</label>
<select
    class="form-select w-25"
    aria-label="Default select example">

    <option selected disabled value="{{$label}}">Choose category:</option>

    @foreach($options as $value => $text)
        <option value="{{ $value }}"> {{ $text}} </option>
    @endforeach

</select>
@error($name)
<div class="invalid-feedback">{{ $message }}</div>
@enderror
