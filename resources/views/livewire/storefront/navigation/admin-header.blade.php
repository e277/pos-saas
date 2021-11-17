<header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">

    <div class="flex items-center">

        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">

            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>

        </button>


    </div>

    <div class="flex items-center">

        <div>

            <a href="{{ route('pos') }}"
               class="flex mx-4 mt-1 text-gray-600 focus:outline-none">

                <span class="mr-2"><i class="fab fa-windows text-2xl"></i> POS System </span>

            </a>

        </div>

        <div class="relative flex">

            <div>

                <a href="{{ route('backend.inbox') }}"
                   class="flex mx-4 mt-1 text-gray-600 focus:outline-none">

                    <span class="mr-4">

                        <i class="fas fa-inbox text-xl  "></i>

                    Inbox

                    </span>

                </a>

            </div>

            <div
                class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>


        </div>

        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = ! dropdownOpen"
                    class="relative block h-8 w-8 rounded-full overflow-hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>

            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                 class="fixed inset-0 h-full w-full z-10"
                 style="display: none;"></div>

            <div x-show="dropdownOpen"
                 class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                 style="display: none;">
                <a href="{{route('backend.profile')}}"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                   <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>
    </div>
</header>
