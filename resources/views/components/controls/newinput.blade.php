<div>
    <label for="{{ $id }}"
           class="form-label"> {{$label}} </label>
    <input id="{{ $id }}"
           type="{{$type}}"
           class="form-control w-25"
           name="{{ $name }}"
           value="{{old($name) ?? $defval}}">
    @error($name)
    <div style="color: red">{{$message}}</div>
    @enderror

</div>
