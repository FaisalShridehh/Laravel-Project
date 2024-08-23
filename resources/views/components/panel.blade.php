@php
$classes = "bg-white/5 rounded-xl flex items-center border border-transparent group hover:border-sky-800 transition-all"

@endphp

<div {{$attributes->merge(['class' => $classes])}}>{{$slot}}</div>
