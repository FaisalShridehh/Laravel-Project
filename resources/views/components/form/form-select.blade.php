{{-- resources/views/components/form/form-select.blade.php --}}
@props([
'name',
'id' => null,
'options' => [], // Array of options where key is the value and value is the display text
'selected' => null, // The currently selected value
])
{{-- @dd($options) --}}
    <select name="{{ $name }}" id="{{ $id ?? $name }}"
        class="block w-full py-1 px-2  shadow-sm text-white border border-gray-500/50 rounded-md bg-white/10 ocus:outline-none  focus:ring-2 focus:ring-sky-600 focus:border-transparent ">
        @foreach($options as $value => $display)
        <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} class="text-gray-400">
            {{ $display }}
        </option>
        @endforeach
    </select>
{{-- block w-full rounded-md py-1 px-2 shadow-sm  bg-white/10 border border-gray-500/50 placeholder-gray-400 text-white focus:outline-none  focus:ring-2 focus:ring-sky-600 focus:border-transparent --}}