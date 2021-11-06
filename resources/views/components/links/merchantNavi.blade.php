@props([
    'active' => false,
])

@php

$classes = ($active ?? false)
            ? 'flex items-center mt-2 py-2 px-6 cursor-pointer bg-gray-700 bg-opacity-25 text-gray-100'
            : 'flex items-center mt-2 py-2 px-6 cursor-pointer text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100'

@endphp

<div>

    <a {{ $attributes->merge(['class' => $classes]) }}>

        {{ $icon }}

        <span class="mx-4">

        {{ $slot }}

    </span>

    </a>
</div>
