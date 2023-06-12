{{--<div class="h3">input blade php</div>--}}

@props([
    'name' => '',
    'label' => '',



])


<label for="{{ $name }}"
       class="form-label"> {{$label}} </label>
<input id="{{ $name }}"
       type="text"
       class="form-control w-25"
       name="{{ $name }}"
       value="{{old($name)}}">
@error($name)
    <div style="color: red">{{$message}}</div>
@enderror
