<div>
    <div class="bg-gray-200 h-screen">
        <main class="h-screen w-full">
            <div class="flex p-5 h-full gap-6 mx-auto px-6">
                <div class="w-8/12 h-full bg-white bg-cover bg-center">
                    <div class="w-full py-6 px-4 font-bold bg-indigo-600">
                        <h1 class="text-white text-3xl">Products</h1>
                    </div>
                    <div class="flex justify-between text-gray-700 font-bold text-3xl px-5 pt-5 mb-3">
                        <h1>Select Product</h1>

                        <div class="relative text-gray-600">
                            <input type="search" wire:keydown.lazy="search($event.target.value)" placeholder="Search"
                                class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                    xml:space="preserve" width="512px" height="512px">
                                    <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="h-3/6 overflow-y-scroll mx-5">
                        {{-- {{dd($products)}} --}}
                        <x-table.table>
                            <x-table.thead>

                                <x-table.table-head>Product Name</x-table.table-head>
                                <x-table.table-head>Quantity</x-table.table-head>
                                <x-table.table-head>Price</x-table.table-head>
                                <x-table.table-head>Discount</x-table.table-head>
                                <x-table.table-head>Total</x-table.table-head>
                                <x-table.table-head>Action</x-table.table-head>

                            </x-table.thead>
                            <x-table.tbody>

                                {{-- @for($x = 0; $x < 15; $x++)  --}}
                                @foreach ($products as $product)
                                <x-table.table-row>
                                    <x-table.table-data responsiveName="Product Name">{{$product->name}}</x-table.table-data>
                                    <x-table.table-data responsiveName="Quantity"><input class="w-5/12 h-8"
                                            type="number" max="{{$product->qty}}"></x-table.table-data>
                                    <x-table.table-data responsiveName="Price">{{ '$'.number_format($product->price, 2, '.', ',')}}</x-table.table-data>
                                    <x-table.table-data responsiveName="Discount">{{ '$'.number_format(($product->sale_price ? $product->sale_price - $product->price : null), 2, '.', ',')}}</x-table.table-data>
                                    <x-table.table-data responsiveName="Total">{{ '$'.number_format($product->sale_price ?? $product->price, 2, '.', ',')}}</x-table.table-data>
                                    <x-table.table-data responsiveName="Action">
                                        <x-table.button color="gray" class="w-24 h-18 font-bold" >Select</x-table.button>
                                    </x-table.table-data>

                                    </x-table.table-row>
                                    @endforeach

                            </x-table.tbody>
                        </x-table.table>
                    </div>

                   <div class="flex justify-center space-x-2 mt-8 px-5">
                    <x-table.button color="indigo" class="w-32 h-24 font-bold">
                        <div><i class="fas fa-home"></i></div>BUTTON
                    </x-table.button>
                    <x-table.button color="indigo" class="w-32 h-24 font-bold">
                        <div><i class="far fa-tags"></i></div>BUTTON
                    </x-table.button>
                    <x-table.button color="indigo" class="w-32 h-24 font-bold">
                        <div><i class="fas fa-dollar-sign"></i></div>BUTTON
                    </x-table.button>
                    <x-table.button color="indigo" class="w-32 h-24 font-bold">
                        <div><i class="far fa-key"></i></div>BUTTON
                    </x-table.button>
                    <x-table.button color="indigo" class="w-32 h-24 font-bold">
                        <div><i class="fas fa-file-invoice-dollar"></i></div>BUTTON
                    </x-table.button>
                    <x-table.button color="indigo" class="w-32 h-24 font-bold">
                        <div><i class="far fa-dolly-flatbed-alt"></i></div>BUTTON
                    </x-table.button>
                    <x-table.button color="indigo" class="w-32 h-24 font-bold">
                        <div><i class="far fa-comment-lines"></i></div>BUTTON
                    </x-table.button>
                
                </div>
                </div>


                <div class="w-4/12 bg-white h-full pb rounded-lg overflow-hidden bg-cover bg-center">

                    <div class="w-full py-6 px-4 bg-indigo-600">
                        <h1 class="text-white font-bold text-3xl">Summary</h1>
                    </div>

                    <div class="sales_details mx-5 h-3/6 mt-5 p-5  bg-white border border-gray-500">
                        <table class="w-full">
                            <tr class="border-b-2 mb-2 text-left">
                                <th class="py-2">Product</th>
                                <th class="py-2">Qty</th>
                                <th class="py-2">Description</th>
                                <th class="py-2">Price</th>
                                <th class="py-2">Total</th>
                            </tr>
                    
                            @for($y=0; $y<5; $y++) <tr>
                                <td class="py-2">Cocoa Bread</td>
                                <td class="py-2">5</td>
                                <td class="py-2">Weat Bread</td>
                                <td class="py-2">$50</td>
                                <td class="py-2">$250</td>
                                </tr>
                                @endfor
                        </table>
                    </div>

                    <div class="py-5 px-5 font-bold space-x-8 text-gray-600 text-xl">
                        <div class="w-full space-y-1">
                            <div class="flex justify-between">
                                <span>Sub Total</span>
                                <span>$158,550.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Tax:</span>
                                <span>$0.00</span>
                            </div>
                            <div class="flex justify-between text-3xl text-green-600">
                                <span>Total:</span>
                                <span>170,000.00</span>
                            </div>
                        </div>
                    
                    </div>

                    <div class="flex space-x-3 mx-5">
                        <x-table.button color="indigo" class="w-1/2 h-14 font-bold"><i class="far fa-money-bill-wave"></i> Pay Now</x-table.button>
                        <x-table.button color="gray" class="w-1/2 h-14 font-bold">Cancel</x-table.button>
                    </div>
                </div>

            </div>
        </main>

    </div>
</div>