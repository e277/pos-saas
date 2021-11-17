@props([
    'icon' => false,
])

<div class="flex col-span-full justify-end mt-6">

    <button {{ $attributes->merge(['class'=> 'px-4 py-2 leading-5 transition-colors duration-200 transform
            rounded-md border border-gray-400 focus:outline-none focus:bg-gray-600']) }}>

        @if($icon)

            {{ $icon }}

        @endif

        {{ $slot }}

    </button>

</div>
