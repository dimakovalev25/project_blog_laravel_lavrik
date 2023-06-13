@props([
    'title',

])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$title}} </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <div class="container"></div>
</header>
<div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-3">

                <x-naws.link route="welcom" :params="[]">home</x-naws.link>
                <br>
                <x-naws.link route="persons.index" :params="[]">persons</x-naws.link>
                <br>
                <x-naws.link route="post.index" :params="[]">posts</x-naws.link>
                <br>
                <x-naws.link route="category.index" :params="[]">categories</x-naws.link>
                <br>

{{--                <x-layouts.navlink></x-layouts.navlink>--}}

{{--                //old navbar--}}
{{--                <x-layouts.navlink :links="  array(['title'=>'home','href'=>'/','class'=>'active'],['title'=>'posts','href'=>'/posts','class'=>''],['title'=>'categories','href'=>'/categories','class'=>''])  "></x-layouts.navlink>--}}

            </div>
            <main class="col col-12 col-md-9">
                {{$slot}}
            </main>
        </div>
    </div>
</div>
<footer>
    <div class="container"></div>
</footer>
</body>
</html>



