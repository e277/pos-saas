@props([
    'error' => false
])

@php

    $classes = 'block w-full h-20 px-4 py-2 mt-2 text-gray-700 bg-white border
                   bg-gray-100 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600
                   focus:outline-none transition duration-300 textarea no-resize resize-none
                        focus:border-transparent
                        focus:ring-2
                        focus:ring-white
                        focus:ring-offset-2
                        focus:ring-offset-gray-300';

if($error) { $classes .= 'border-gray-300'; }

@endphp


<div>

    <textarea {{ $attributes->merge(['class' => $classes]) }}></textarea>

    @if($error)

        <span class="text-red-900 text-xs italic  m-1">

            * {{ $error }}

        </span>

    @endif
</div>

