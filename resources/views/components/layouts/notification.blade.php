@php
    $mess = session()->get('notification');
    $hasMess = $mess !== null;
    $message = $hasMess ? config('app.notifications') : [];

@endphp
@if($hasMess)
    <h6 style="color: green" class="mb-4 alert alert-{{$message[$mess]['type']}}">
        {{ $message[$mess]['text'] }}</h6>

@endif

