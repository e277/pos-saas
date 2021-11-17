<div x-data="{ isOpen: false }">

    <div class="w-full px-8 py-4 mx-auto bg-white shadow-md dark:bg-gray-800">

        <div class="flex items-center justify-between">

            <span class="lg:text-lg text-sm lg:font-medium font-light text-gray-800 dark:text-gray-400">

                Associate Details

            </span>

            <a @click="isOpen =true" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-indigo-600
                      rounded cursor-pointer hover:bg-indigo-500">

                Create Associate

            </a>

        </div>
    </div>

{{--    <div class="bg-white rounded-lg w-9/12 m-auto my-10 p-3 flex  justify-center items-center">--}}
{{--        <div class="flex items-center justify-between">--}}
{{--            <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>--}}
{{--            <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">Design</a>--}}
{{--        </div>--}}
{{--        <div class="flex justify-evenly items-center">--}}

{{--            <div class="text-black font-bold text-2xl">--}}
{{--                <h1>Create New Sales Associate</h1>--}}
{{--            </div>--}}

{{--            <div class="" style="margin-left: 26px;  display: flex; justify-content: right">--}}

{{--                <button @click="isOpen =true" class="text-white font-bold  bg-indigo-600 px-4 py-2 rounded " >--}}

{{--                    Add Associate--}}

{{--                </button>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class=" z-50 sm:mx-auto lg:mx-32 fixed top-0 left-0 w-full h-full bg-black bg-opacity-75
                flex items-center shadow-lg overflow-y-auto"
         x-show="isOpen"
    >

        <section @click.away="isOpen = false"
            class="w-3/5 p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            @if (session()->has('error'))
                <div class="bg-red-200 px-6 py-4 mx-2 -my-5 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor" d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"></path>
                    </svg>
                    <span class="text-red-800"> {{ session('error') }} </span>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="bg-green-200 px-6 py-4 mx-2 my-4 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor"
                              d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                        ></path>
                    </svg>
                    <span class="text-green-800"> {{ session('success') }} </span>
                </div>
            @endif
            <h2 class="text-lg font-semibold text-center text-gray-700 capitalize dark:text-white">New Sales Associate</h2>

            <form
                wire:submit.prevent="newsalesassociate">
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <x-input.label class="text-md" label="First Name:">

                                <x-input.text wire:model="first_name" type="text"/>
                                @error('first_name') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror

                        </x-input.label>
                    </div>

                    <div>
                        <x-input.label class="text-md" label="Last Name:">
                                <x-input.text wire:model="last_name" type="text"/>
                                @error('last_name') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </x-input.label>
                    </div>

                    <div>
                        <x-input.label class="text-md" label="Email Address:">

                            <x-input.text wire:model="email" type="text"/>
                            @error('email') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror

                        </x-input.label>
                    </div>


                    <div>
                        <x-input.label class="text-md" label="Store Available">

                            <x-input.select field="name" :option="$stores" />
                            @error('name') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror

                        </x-input.label>
                    </div>

                    <div>
                        <x-input.label class="text-md" label="Password:">

                            <x-input.text wire:model="password" readonly type="text"/>
                            @error('password') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror

                        </x-input.label>
                    </div>

                </div>

                <div class="flex justify-end mt-6 space-x-1">
                    <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
                                   rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">
                                   Save
                    </button>
                    <button @click.prevent="isOpen = false"
                            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-500
                            rounded-md hover:bg-red-600 focus:outline-none focus:bg-gray-600">
                            Close
                    </button>
                </div>
            </form>
        </section>

    </div>





<!-- TABLE -->
    <table class="min-w-full border-collapse block md:table mt-2 z-0">
        <thead class="block md:table-header-group z-0">
        <tr class=" z-0 border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class=" bg-indigo-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Last Name</th>--}}
            <th class="bg-indigo-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email Address</th>
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Mobile</th>--}}
            <th class="bg-indigo-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
        </tr>
        </thead>
        <tbody class="block md:table-row-group">

        @foreach($associates as $key => $associate)
            <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{$associate['name']}}</td>
{{--                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Last Name</span>maribelkoch</td>--}}
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>{{$associate['email']}}</td>
{{--                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>582-400-3X36</td>--}}
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded" >Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" wire:click="delete({{$associate['id']}})">Delete</button>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>


</div>
