<div>
        <x-Proximity-Table.table>

            <x-slot name="thead">
                <x-Proximity-Table.table-head title="Product Name"/>
                <x-Proximity-Table.table-head title="Category"/>
                <x-Proximity-Table.table-head title="Quantity"/>
                <x-Proximity-Table.table-head title="Discounted"/>
                <x-Proximity-Table.table-head title="Price"/>
                <x-Proximity-Table.table-head title="Expected Revenue"/>
                <x-Proximity-Table.table-head title="Action"/>
            </x-slot>

            <x-slot name="tbody">

                @forelse($products as $product)
                    <x-Proximity-Table.table-row>
                        <x-Proximity-Table.table-cell :title="$product->name"/>
                        <x-Proximity-Table.table-cell :title="$product->category->category_nm"/>
                        <x-Proximity-Table.table-cell :title="$product->qty"/>
                        <x-Proximity-Table.table-cell :title="$product->sale_price"/>
                        <x-Proximity-Table.table-cell :title="$product->price"/>
                        <x-Proximity-Table.table-cell :title="$product->qty * $product->price - $product->sale_price"/>
                        <x-Proximity-Table.table-cell>
                            <x-slot name="title">
                                <button class="px-4 py-2 rounded bg-gray-500 hover:bg-green-500 duration-300 text-white">View</button>
                            </x-slot>
                        </x-Proximity-Table.table-cell>
                    </x-Proximity-Table.table-row>
                @empty

                @endforelse



            </x-slot>

            <x-slot name="pagination">
                {{$products->links()}}
            </x-slot>
        </x-Proximity-Table.table>
</div>
