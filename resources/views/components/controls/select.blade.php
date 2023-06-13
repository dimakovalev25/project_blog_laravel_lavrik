@props([
    'options'

])

<select name="category_id" class="form-select w-25" aria-label="Default select example">
    <option selected>Open this select menu</option>
    @foreach($options as $op)
        <option value="{{ $op['id'] }}"> {{ $op['title'] }} </option>
    @endforeach
</select>
