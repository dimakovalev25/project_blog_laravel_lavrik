{{--<div class="h3">input blade php</div>--}}

@props([
    'name' => '',
    'label' => '',
    'type' => 'text',
    'id' => null,
    'defval' => ''
])

@php
    $id = $name . bin2hex(random_bytes(6));
//    dd($id)
@endphp


<label for="{{ $id }}"
       class="form-label"> {{$label}} </label>
<input id="{{ $id }}"
       type="{{$type}}"
       class="form-control w-25"
       @error($name) is-invalid @enderror
       name="{{ $name }}"
       value="{{old($name) ?? $defval}}">
@error($name)
<div style="color: red">{{$message}}</div>
@enderror
