@props(['tag'])

@php
    $tags = explode(',', $tag);
@endphp
<ul>
    @foreach ($tags as $tag)
        <li> <a href="/?tag={{ $tag }}">{{ $tag }}</a></li>
    @endforeach
</ul>
