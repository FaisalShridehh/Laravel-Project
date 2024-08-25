@props([
    'name',
    'id' ,
    'value' ,
    'label' ,
])

@php
    $defaults = [
        'type' => 'checkbox',
        'name' => $name,
        'id' => $id ?? $name,
        'value' => old($name),
    ];

    
@endphp

<div class="flex items-center  ">
    <input {{ $attributes->merge($defaults) }}>
    @if($label)
        <span class="pl-1 text-white">{{ $label }}</span>
    @endif
</div>
