@php
    $mess = session()->get('notification');
    $hasMess = $mess !== null;
    $message = $hasMess ? config('app.notifications') : [];

@endphp
@if($hasMess)
    <h6 style="color: green">
        {{ $message[$mess]['text'] }}</h6>

@endif

