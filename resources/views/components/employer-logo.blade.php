@props(['employer', 'width' => 90 ,'height' => 90])

<img src="{{ public_path("{$employer->logo}") }}" alt="" class="rounded-xl" width="{{ $width }}" height="{{ $height }}">