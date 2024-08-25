@props(['tag' => null,'size' => "base"])

@php
$classes = "bg-white/10 rounded-xl hover:bg-white/25 font-bold transition-colors duration-300";

if ($size == 'base') {
$classes .= " px-5 py-2 text-base";
}
elseif ($size == 'small') {
$classes .= " px-3 py-1 text-xxs";
}
@endphp

<a href="{{Route('tags.search', strtolower($tag->name))}}" class="{{$classes}}">{{ ucwords($tag->name) }}</a>
