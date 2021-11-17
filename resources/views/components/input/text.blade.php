@props([
    'error' => false
])

@php

    $classes =    "block w-full px-4 py-2 mt-2 text-gray-700 bg-white border
                   rounded-md border-gray-300
                   focus:outline-none transition duration-300 border-grey-300
                        focus:border-transparent bg-gray-100 form-input
                        focus:ring-2
                        focus:ring-white
                        focus:ring-offset-2
                        focus:ring-offset-gray-300";

if($error){
    $classes .= ' border-red-500 border-3 ';
}

@endphp


<div>

    <input  {{ $attributes->merge(['class' => $classes ]) }}>

    @if($error)

        <span class="text-red-500 text-xs italic  m-1">

            * {{ $error }}

        </span>

    @endif
</div>

