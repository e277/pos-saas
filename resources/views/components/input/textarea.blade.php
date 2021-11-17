@props([
    'error' => false
])

@php

    $classes = 'block w-full h-20 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200
                   bg-gray-100 rounded-md focus:outline-none transition
                   duration-300 form-textarea no-resize resize-none
                        focus:border-transparent
                        focus:ring-2
                        focus:ring-white
                        focus:ring-offset-2
                        focus:ring-offset-gray-300';

if($error) { $classes .= ' border-red-300'; }

@endphp


<div>

    <textarea {{ $attributes->merge(['class' => $classes]) }}></textarea>

    @if($error)

        <span class="text-red-500 text-xs italic m-1">

            * {{ $error }}

        </span>

    @endif
</div>

