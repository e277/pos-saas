@props([
    'title' => false
])
<div x-data="{ isDrop: false }"
    class="relative inline-block overflow-hidden  w-full mt-8">
    <!-- Dropdown toggle button -->
    <button @click.prevent="isDrop = !isDrop"
            :class="isDrop ? 'translate-y-0 ease-out' : '-translate-y-full ease-in'"
        class="relative z-20 flex items-center mx-auto transition duration-300 w-10/12 p-2 text-sm text-white bg-transparent border border-transparent rounded-md
                 focus:outline-none">

        <span class="mx-1"><i class="fas fa-list mr-2"></i> {{ $title }}</span>

        <svg :class="isDrop ? 'transform transition duration-500 rotate-180' : 'transform transition duration-500 rotate-0' "
            class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                  fill="currentColor"></path>
        </svg>

    </button>

    <!-- Dropdown menu -->
    <div x-show="isDrop"
         x-transition.duration.1000ms.origin.top
         x-transition:leave="translate-y-0 ease-out"
         :class="isDrop ? 'translate-y-0 ease-out' : '-translate-y-full ease-in'"
        class="relative right-0 z-20 w-full transform duration-200 static translate-y-0 mt-1
               overflow-hidden bg-transparent rounded-md  dark:bg-gray-800">

        {{ $slot }}

    </div>
</div>
