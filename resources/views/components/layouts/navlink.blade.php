@props([
  'links'
])

@php
//    $links = array(
//    [
//        'title' => 'title1',
//        'href' => 'href1',
//        'class' => ''
//    ],
//    [
//        'title' => 'title2',
//        'href' => 'href2',
//        'class' => 'active'
//    ],
//    [
//        'title' => 'title3',
//        'href' => 'href3',
//        'class' => 'disabled'
//    ],
//
//
//    );

@endphp


<h1>navbar</h1>
<nav class="nav flex-column">
    @foreach ($links as $link)
        <a class="nav-link {{ $link['class'] }}" aria-current="page" href="{{ $link['href']  }}">{{ $link['title'] }}</a>
    @endforeach
</nav>


