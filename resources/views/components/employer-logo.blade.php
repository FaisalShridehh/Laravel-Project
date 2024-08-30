@props(['employer', 'width' => 90 ,'height' => 90])

@php
   $randomSeed = rand(1, 1000); // Generate a random seed number
  $placeholder = "http://picsum.photos/seed/{$randomSeed}/{$width}/{$height}";
  $logo = $employer->logo ?  asset('storage/' . $employer->logo) : $placeholder;

@endphp


<img src="{{ $logo }}" alt="" class="rounded-xl" width="{{ $width }}" height="{{ $height }}">
