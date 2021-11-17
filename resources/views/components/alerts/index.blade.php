@props([
    'message' => false,
    'status' => false
])

@php

    $theme = ($status ?? false) ? 'bg-red-500' : 'bg-green-500'

@endphp

<div x-data="{ isAlert: false }"
     x-show="isAlert"
     x-transition.duration.300ms.origin.left
     x-on:show-alert.window="isAlert = false; setTimeout(() => { isAlert = true },2500)"

    class="w-4/12 absolute rounded-l-2xl  py-2 right-0 text-white {{ $theme }}">

    <div
        class="container flex items-center justify-between px-4 py-2 mx-auto">

        <div class="flex">

            @if($status)

                <i class="fas fa-exclamation-triangle mt-0.5"></i>

            @else

                <i class="fas fa-shield-check mt-0.5"></i>

            @endif

            <p class="mx-3 my-auto">{{ $message }}</p>

        </div>

        {{ $slot }}

    </div>

</div>
