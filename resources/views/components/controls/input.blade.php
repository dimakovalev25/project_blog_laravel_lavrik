{{--<div class="h3">input blade php</div>--}}

@props([
    'name' => '',
    'label' => '',



])

@php
    $id = $name . bin2hex(random_bytes(6));
//    dd($id)
@endphp


<label for="{{ $id }}"
       class="form-label"> {{$label}} </label>
<input id="{{ $id }}"
       type="text"
       class="form-control w-25"
       name="{{ $name }}"
       value="{{old($name)}}">
@error($name)
    <div style="color: red">{{$message}}</div>
@enderror
