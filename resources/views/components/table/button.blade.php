@props(['color' => 'blue'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => "text-center bg-$color-600 text-white py-1 px-3 rounded-md"]) }}>
    
    {{ $slot }}
    
</button>