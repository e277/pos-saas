@props([
    'error' => false
])

@php

    $classes =    "block w-full px-4 py-2 mt-2 text-gray-700 bg-white border
                   rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600
                   focus:outline-none transition duration-300 form-input border-grey-300
                        focus:border-transparent bg-gray-100
                        focus:ring-2
                        focus:ring-white
                        focus:ring-offset-2
                        focus:ring-offset-gray-300";

if($error){
    $classes .= ' border-red-500 border-3 ';
}

@endphp


<div>

    <input {{ $attributes->merge(['class' => $classes]) }}>

    @if($error)

        <span class="text-red-500 text-xs italic  m-1">

            * {{ $error }}

        </span>

    @endif
</div>

