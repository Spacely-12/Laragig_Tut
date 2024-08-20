@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp
<ul class="flex flex-wrap mb-4">
    @foreach ($tags as $tag)
        <li class="flex items-center justify-center bg-[#1c3b72] text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs shadow-sm">
            <a href="/?tag={{$tag}}">{{$tag}}</a>
        </li>
    @endforeach
</ul>
